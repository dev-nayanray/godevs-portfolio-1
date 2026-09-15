<?php
/**
 * Demo import controller.
 *
 * Handles:
 *   - Admin page registration (Appearance → GoDevs Demos)
 *   - Admin asset enqueues
 *   - AJAX endpoints for preview, import, removal
 *   - Import logic: page creation, navigation, style application
 *   - Style variation application (via user meta)
 *
 * Security:
 *   - Every AJAX endpoint checks capability 'manage_options' (admin only)
 *   - Every AJAX endpoint verifies a nonce
 *   - Demo IDs are validated against the registry
 *   - All user-provided content is escaped at output
 *
 * @package GoDevs_Portfolio
 * @since   0.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

/**
 * Register the admin menu page under Appearance.
 *
 * @return void
 */
function godevs_portfolio_register_admin_page(): void {
        add_theme_page(
                __( 'GoDevs Demos', 'godevs-portfolio' ),
                __( 'GoDevs Demos', 'godevs-portfolio' ),
                'manage_options',
                'godevs-portfolio-demos',
                'godevs_portfolio_render_admin_page'
        );
}
add_action( 'admin_menu', 'godevs_portfolio_register_admin_page' );

/**
 * Render the admin page.
 *
 * @return void
 */
function godevs_portfolio_render_admin_page(): void {
        if ( ! current_user_can( 'manage_options' ) ) {
                wp_die( esc_html__( 'You do not have permission to access this page.', 'godevs-portfolio' ) );
        }

        require_once get_template_directory() . '/inc/admin/views/admin-demos.php';
}

/**
 * Enqueue admin assets on the demo library page only.
 *
 * @param string $hook Current admin page hook suffix.
 * @return void
 */
function godevs_portfolio_enqueue_admin_assets( string $hook ): void {
        if ( 'appearance_page_godevs-portfolio-demos' !== $hook ) {
                return;
        }

        wp_enqueue_style(
                'godevs-portfolio-admin-demos',
                get_template_directory_uri() . '/assets/css/admin-demos.css',
                array(),
                (string) filemtime( get_template_directory() . '/assets/css/admin-demos.css' )
        );

        wp_enqueue_script(
                'godevs-portfolio-admin-demos',
                get_template_directory_uri() . '/assets/js/admin-demos.js',
                array(),
                (string) filemtime( get_template_directory() . '/assets/js/admin-demos.js' ),
                array( 'in_footer' => true )
        );

        wp_localize_script(
                'godevs-portfolio-admin-demos',
                'GODEVS_DEMOS_API',
                array(
                        'ajaxUrl'   => admin_url( 'admin-ajax.php' ),
                        'ajaxNonce' => wp_create_nonce( 'godevs_demo_admin' ),
                        'previewUrl' => add_query_arg( array( 'godevs_preview' => '1' ), home_url( '/' ) ),
                        'i18n'      => array(
                                'cancel'                => __( 'Cancel', 'godevs-portfolio' ),
                                'importDemo'            => __( 'Import Demo', 'godevs-portfolio' ),
                                'removeDemo'            => __( 'Remove Demo', 'godevs-portfolio' ),
                                'confirmRemove'         => __( 'Confirm Removal', 'godevs-portfolio' ),
                                'confirmSafeTitle'      => __( 'Import Demo', 'godevs-portfolio' ),
                                'importFailed'          => __( 'Import failed.', 'godevs-portfolio' ),
                                'importComplete'        => __( 'Import complete!', 'godevs-portfolio' ),
                                'loadDetailsFailed'     => __( 'Could not load demo details.', 'godevs-portfolio' ),
                                'removeFailed'          => __( 'Could not remove demo.', 'godevs-portfolio' ),
                                'networkErrorDetails'   => __( 'Network error while loading demo details.', 'godevs-portfolio' ),
                                'networkErrorImport'    => __( 'Network error during import.', 'godevs-portfolio' ),
                                'networkErrorRemoval'   => __( 'Network error during removal.', 'godevs-portfolio' ),
                                'redirecting'           => __( 'Redirecting to your live site…', 'godevs-portfolio' ),
                        ),
                )
        );
}
add_action( 'admin_enqueue_scripts', 'godevs_portfolio_enqueue_admin_assets' );

/**
 * AJAX: Get import confirmation details for a demo.
 *
 * Returns the demo metadata + the list of pages that will be created.
 *
 * @return void
 */
function godevs_portfolio_ajax_get_import_details(): void {
        check_ajax_referer( 'godevs_demo_admin', 'nonce' );

        if ( ! current_user_can( 'manage_options' ) ) {
                wp_send_json_error( array( 'message' => __( 'Insufficient permissions.', 'godevs-portfolio' ) ), 403 );
        }

        $demo_id = isset( $_POST['demo_id'] ) ? sanitize_file_name( wp_unslash( $_POST['demo_id'] ) ) : '';
        if ( ! $demo_id ) {
                wp_send_json_error( array( 'message' => __( 'Missing demo ID.', 'godevs-portfolio' ) ), 400 );
        }

        $demo = godevs_portfolio_get_demo( $demo_id );
        if ( null === $demo ) {
                wp_send_json_error( array( 'message' => __( 'Demo not found.', 'godevs-portfolio' ) ), 404 );
        }

        $is_imported = godevs_portfolio_tracker_is_imported( $demo_id );

        wp_send_json_success(
                array(
                        'demo'       => array(
                                'id'          => $demo['id'],
                                'name'        => $demo['name'],
                                'category'    => $demo['category'],
                                'style'       => $demo['style'],
                                'description' => $demo['description'],
                                'pages'       => $demo['pages'],
                        ),
                        'isImported' => $is_imported,
                )
        );
}
add_action( 'wp_ajax_godevs_portfolio_get_import_details', 'godevs_portfolio_ajax_get_import_details' );

/**
 * AJAX: Import a demo.
 *
 * Creates the demo's recommended pages, populates the homepage with the
 * demo's pattern markup, creates a navigation menu linking to the pages,
 * and (optionally) sets the homepage + applies the recommended style variation.
 *
 * Two modes:
 *   - 'starter': For fresh sites — sets homepage, applies style variation.
 *   - 'safe': For existing sites — creates pages but does not change homepage or style.
 *
 * @return void
 */
function godevs_portfolio_ajax_import_demo(): void {
        check_ajax_referer( 'godevs_demo_admin', 'nonce' );

        if ( ! current_user_can( 'manage_options' ) ) {
                wp_send_json_error( array( 'message' => __( 'Insufficient permissions.', 'godevs-portfolio' ) ), 403 );
        }

        $demo_id = isset( $_POST['demo_id'] ) ? sanitize_file_name( wp_unslash( $_POST['demo_id'] ) ) : '';
        $mode    = isset( $_POST['mode'] ) ? sanitize_key( wp_unslash( $_POST['mode'] ) ) : 'safe';
        // The JS sends apply_style as '1' or '0'. Cast to int first, then bool —
        // (bool) '0' is TRUE in PHP because non-empty strings are truthy.
        $apply_style = isset( $_POST['apply_style'] ) ? ( '1' === (string) wp_unslash( $_POST['apply_style'] ) ) : false;
        // phpcs:disable WordPress.Security.NonceVerification.Recommended -- verified above via check_ajax_referer().

        if ( ! $demo_id ) {
                wp_send_json_error( array( 'message' => __( 'Missing demo ID.', 'godevs-portfolio' ) ), 400 );
        }

        if ( ! in_array( $mode, array( 'starter', 'safe' ), true ) ) {
                wp_send_json_error( array( 'message' => __( 'Invalid import mode.', 'godevs-portfolio' ) ), 400 );
        }

        $demo = godevs_portfolio_get_demo( $demo_id );
        if ( null === $demo ) {
                wp_send_json_error( array( 'message' => __( 'Demo not found.', 'godevs-portfolio' ) ), 404 );
        }

        // Block imports for non-ready (Coming Soon) demos.
        if ( empty( $demo['is_ready'] ) ) {
                wp_send_json_error( array( 'message' => __( 'This demo is coming soon and cannot be imported yet.', 'godevs-portfolio' ) ), 403 );
        }

        // ═══ CONCURRENCY LOCK ═══
        // Prevent duplicate imports from concurrent admin requests. Acquired
        // BEFORE the destructive cleanup phase so two overlapping requests
        // can never both trash pages/menus.
        if ( get_transient( 'godevs_import_lock' ) ) {
                wp_send_json_error(
                        array(
                                'message' => __( 'Another import is in progress. Please wait a moment and try again.', 'godevs-portfolio' ),
                        ),
                        409
                );
        }
        set_transient( 'godevs_import_lock', 1, 60 );
        // Safety net: release the lock even if a fatal error occurs mid-import.
        register_shutdown_function( function () {
                delete_transient( 'godevs_import_lock' );
        } );

        $steps = array(
                array( 'id' => 'prepare', 'label' => __( 'Preparing demo', 'godevs-portfolio' ) ),
                array( 'id' => 'pages',   'label' => __( 'Creating pages', 'godevs-portfolio' ) ),
                array( 'id' => 'nav',     'label' => __( 'Creating navigation', 'godevs-portfolio' ) ),
        );

        if ( 'starter' === $mode ) {
                $steps[] = array( 'id' => 'homepage', 'label' => __( 'Applying homepage', 'godevs-portfolio' ) );
        }

        $steps[] = array( 'id' => 'content', 'label' => __( 'Applying demo layout', 'godevs-portfolio' ) );

        if ( $apply_style && $demo['style'] ) {
                $steps[] = array( 'id' => 'style', 'label' => __( 'Applying style variation', 'godevs-portfolio' ) );
        }

        $steps[] = array( 'id' => 'complete', 'label' => __( 'Complete', 'godevs-portfolio' ) );

        // Begin import.
        $created_pages   = array();
        $nav_menu_id     = 0;
        $homepage_id     = 0;
        $style_applied   = '';
        $errors          = array();
        $replaced_demos  = array();

        // ═══ AUTO-CLEANUP: Remove ALL previously imported demos ═══
        // This ensures only ONE demo's pages are visible on the site at any
        // time. When a new demo is imported, all previously imported demo
        // pages, navigation menus, style variations, and homepage settings
        // are cleanly removed so the user sees ONLY the newly imported demo.
        $previous_imports = godevs_portfolio_tracker_get_all();
        $had_previous_import = false;
        foreach ( $previous_imports as $prev_demo_id => $prev_record ) {
                // Skip the demo being imported (in case it's a re-import).
                if ( $prev_demo_id === $demo_id ) {
                        continue;
                }

                // Remove the previous demo (trashes its pages, deletes its nav menu).
                $remove_result = godevs_portfolio_tracker_remove( $prev_demo_id, true );
                if ( ! empty( $remove_result['success'] ) ) {
                        $replaced_demos[] = $prev_demo_id;
                }
        }

        // Also clean up any orphaned demo menus (from failed imports, etc.).
        // Delete any nav menu whose name ends with "— Navigation" that isn't
        // currently assigned to a location. This catches stale menus.
        $existing_menus = wp_get_nav_menus();
        $current_locations = get_theme_mod( 'nav_menu_locations', array() );
        foreach ( $existing_menus as $menu ) {
                // Skip menus assigned to a location.
                if ( in_array( (int) $menu->term_id, array_map( 'absint', array_values( $current_locations ) ), true ) ) {
                        continue;
                }
                // Only delete menus created by our demo importer.
                if ( false !== strpos( $menu->name, '— Navigation' ) ) {
                        wp_delete_nav_menu( $menu->term_id );
                }
        }

        // Also remove the onboarding-seeded default pages + Primary menu so a
        // demo import starts from a clean slate (prevents "about-2" slugs and
        // a duplicated page set). Seeded pages are flagged with post meta.
        $seeded = get_posts(
                array(
                        'post_type'      => 'page',
                        'posts_per_page' => 20,
                        'meta_key'       => '_godevs_portfolio_seed',
                        'meta_value'     => '1',
                        'fields'         => 'ids',
                        'post_status'    => 'any',
                )
        );
        foreach ( $seeded as $seeded_id ) {
            wp_trash_post( $seeded_id );
        }
        $seeded_menu = wp_get_nav_menu_object( __( 'Primary', 'godevs-portfolio' ) );
        if ( $seeded_menu ) {
                wp_delete_nav_menu( $seeded_menu->term_id );
        }

        // Also handle re-import of the SAME demo — remove its old pages first
        // so we don't get duplicate pages with suffix slugs (home-director-2).
        if ( isset( $previous_imports[ $demo_id ] ) ) {
                $remove_result = godevs_portfolio_tracker_remove( $demo_id, true );
                if ( ! empty( $remove_result['success'] ) ) {
                        $replaced_demos[] = $demo_id;
                }
        }

        // ═══ RESET STYLE VARIATION ═══
        // If there was a previous import with a style applied, reset the
        // global styles post so the new demo's style (or the default) starts
        // from a clean state. This prevents the old demo's colors/typography
        // from leaking into the new demo.
        if ( ! empty( $previous_imports ) ) {
                godevs_portfolio_reset_style_variation();
        }

        // 0. Starter imports on a fresh site must use pretty permalinks.
        // Demo pattern markup links to pages by path (/about/, /work/ …),
        // which 404 under the default plain permalink structure.
        if ( 'starter' === $mode && ! get_option( 'permalink_structure' ) ) {
                global $wp_rewrite;
                $wp_rewrite->set_permalink_structure( '/%postname%/' );
                // Rules are flushed again after the pages are created below.
        }

        // 1. Read the demo pattern markup (the homepage content).
        $homepage_markup = godevs_portfolio_render_demo_markup( $demo );
        if ( '' === $homepage_markup ) {
                // CRITICAL: Release the import lock on the early-return error path
                // so the user can immediately retry. Without this, the lock holds
                // for the full 60-second TTL and blocks legitimate retries.
                delete_transient( 'godevs_import_lock' );
                wp_send_json_error(
                        array(
                                'message' => __( 'Could not read demo markup.', 'godevs-portfolio' ),
                                'steps'   => $steps,
                        ),
                        500
                );
        }

        // 2. Create the pages.
        $page_titles = array(
                'home'        => __( 'Home', 'godevs-portfolio' ),
                'about'       => __( 'About', 'godevs-portfolio' ),
                'work'        => __( 'Work', 'godevs-portfolio' ),
                'portfolio'   => __( 'Portfolio', 'godevs-portfolio' ),
                'services'    => __( 'Services', 'godevs-portfolio' ),
                'case-studies' => __( 'Case Studies', 'godevs-portfolio' ),
                'journal'     => __( 'Journal', 'godevs-portfolio' ),
                'blog'        => __( 'Blog', 'godevs-portfolio' ),
                'insights'    => __( 'Insights', 'godevs-portfolio' ),
                'research'    => __( 'Research', 'godevs-portfolio' ),
                'teaching'    => __( 'Teaching', 'godevs-portfolio' ),
                'experience'  => __( 'Experience', 'godevs-portfolio' ),
                'contact'     => __( 'Contact', 'godevs-portfolio' ),
        );

        foreach ( $demo['pages'] as $page_slug ) {
                $title = $page_titles[ $page_slug ] ?? ucfirst( $page_slug );

                // CRITICAL FIX: Populate ALL pages, not just the homepage.
                // For each inner page, render the corresponding pattern file
                // (e.g., patterns/demos/<demo-slug>-about.php) and use its
                // markup as the page content. This closes the bug where only
                // the homepage got content and all inner pages were blank.
                if ( 'home' === $page_slug ) {
                        $content = $homepage_markup;
                } else {
                        // Try to load the inner-page pattern file.
                        $page_file = godevs_portfolio_get_demo_page_file( $demo_id, $page_slug );
                        if ( null !== $page_file && file_exists( $page_file ) ) {
                                ob_start();
                                include $page_file; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped — pattern file output is HTML block markup.
                                $content = (string) ob_get_clean();
                        } else {
                                // No pattern file for this page — skip it entirely
                                // rather than publishing a blank page (and a nav
                                // item pointing at it). The registry already filters
                                // pages to existing files; this is a safety net.
                                $errors[] = sprintf(
                                        /* translators: %s: page slug. */
                                        __( 'Skipped "%1$s" — no demo content found.', 'godevs-portfolio' ),
                                        $page_slug
                                );
                                continue;
                        }
                }

                // CRITICAL FIX (v2.4.1): Strip embedded `<!-- wp:template-part -->`
                // references from the page content. The demo pattern files
                // include their own header/footer template-part references
                // (e.g. `header-dark`, `footer-minimal`), but when this content
                // becomes `post_content` on a real page, WordPress wraps it in
                // the active `page.html` template — which ALSO has its own
                // header/footer template-part references. That produces a
                // double-header + double-footer on the rendered page.
                //
                // Solution: remove all `wp:template-part` blocks from the
                // imported page content. The active theme template's header
                // and footer will be used instead. The Header/Footer Builder
                // override (if any) takes precedence via the render_block filter.
                $content = godevs_portfolio_strip_template_parts_from_content( $content );

                // Demo pattern markup uses placeholder links (href="#") for
                // project showcases and case rows. A dead "#" link fails the
                // "every CTA leads somewhere" requirement, so point them at
                // the demo's showcase page (case studies, work, or portfolio).
                $showcase_slug = '';
                foreach ( array( 'case-studies', 'work', 'portfolio' ) as $candidate ) {
                        if ( in_array( $candidate, $demo['pages'], true ) ) {
                                $showcase_slug = $candidate;
                                break;
                        }
                }
                if ( $showcase_slug && false !== strpos( $content, 'href="#"' ) ) {
                        $content = str_replace( 'href="#"', 'href="/' . $showcase_slug . '/"', $content );
                }

                // Anything still pointing at "#" after the showcase rewrite
                // (e.g. decorative social anchors) must not lead nowhere —
                // send it to the demo's contact page.
                if ( in_array( 'contact', $demo['pages'], true ) && false !== strpos( $content, 'href="#"' ) ) {
                        $content = str_replace( 'href="#"', 'href="/contact/"', $content );
                }

                $page_id = wp_insert_post(
                        array(
                                'post_title'   => $title,
                                'post_name'    => $page_slug, // clean URL; WordPress uniquifies on collision.
                                'post_status'   => 'publish',
                                'post_type'     => 'page',
                                'post_content'  => $content,
                                'post_excerpt'  => '',
                                'comment_status' => 'closed',
                                'ping_status'   => 'closed',
                        ),
                        true
                );

                if ( is_wp_error( $page_id ) ) {
                        $errors[] = sprintf(
                                /* translators: 1: page slug, 2: error message. */
                                __( 'Page "%1$s": %2$s', 'godevs-portfolio' ),
                                $page_slug,
                                $page_id->get_error_message()
                        );
                } else {
                        $created_pages[ $page_slug ] = (int) $page_id;
                        // Demo patterns carry their own art-directed H1 hero, so
                        // render them with the no-title page template to avoid a
                        // second H1 (and the template's "Page" eyebrow + featured
                        // image) above the demo content.
                        update_post_meta( $page_id, '_wp_page_template', 'page-no-title' );
                        if ( 'home' === $page_slug ) {
                                $homepage_id = (int) $page_id;
                        }
                }
        }

        // If not a single page could be created, the import failed — report
        // it instead of recording a "successful" import with zero pages.
        if ( empty( $created_pages ) ) {
                delete_transient( 'godevs_import_lock' );
                wp_send_json_error(
                        array(
                                'message' => $errors
                                        ? implode( ' ', $errors )
                                        : __( 'No pages could be created for this demo.', 'godevs-portfolio' ),
                                'errors'  => $errors,
                        ),
                        500
                );
        }

        // 2b. Seed demo service details so "Services → Service Details" works
        // as a real journey: three godevs_service posts per demo, linked from
        // a query loop appended to the demo's Services page.
        $services_created = 0;
        if ( in_array( 'services', $demo['pages'], true ) && isset( $created_pages['services'] ) && post_type_exists( 'godevs_service' ) ) {
                $services_created = godevs_portfolio_seed_demo_services( $demo_id, $created_pages['services'] );
        }

        // 3. Create the navigation menu.
        $menu_name = sprintf(
                /* translators: %s: demo name. */
                __( '%s — Navigation', 'godevs-portfolio' ),
                $demo['name']
        );
        $menu_exists = wp_get_nav_menu_object( $menu_name );
        if ( $menu_exists ) {
                // Delete the existing menu and create a fresh one.
                // This prevents stale items from a previous import leaking into
                // the new demo's navigation.
                wp_delete_nav_menu( $menu_exists->term_id );
        }

        $menu_id = wp_create_nav_menu( $menu_name );
        if ( is_wp_error( $menu_id ) ) {
                $errors[] = sprintf(
                        /* translators: %s: error message. */
                        __( 'Navigation: %s', 'godevs-portfolio' ),
                        $menu_id->get_error_message()
                );
        } else {
                $nav_menu_id = (int) $menu_id;

                // Add menu items for each created page.
                foreach ( $created_pages as $page_slug => $page_id ) {
                        wp_update_nav_menu_item(
                                $nav_menu_id,
                                0,
                                array(
                                        'menu-item-title'     => $page_titles[ $page_slug ] ?? ucfirst( $page_slug ),
                                        'menu-item-object'    => 'page',
                                        'menu-item-object-id' => $page_id,
                                        'menu-item-type'      => 'post_type',
                                        'menu-item-status'    => 'publish',
                                )
                        );
                }
        }

        // 4. Apply homepage setting (starter mode only).
        if ( 'starter' === $mode && $homepage_id ) {
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $homepage_id );
                update_option( 'page_for_posts', 0 );
        }

        // 4b. Assign the created nav menu to the `primary` menu location.
        // Previously the menu was created but never assigned, so the demo's
        // header navigation appeared empty (or fell back to the default site
        // menu, if any). This makes the imported menu show up in the header
        // navigation block automatically.
        if ( $nav_menu_id ) {
                $locations                 = get_theme_mod( 'nav_menu_locations', array() );
                $locations['primary']      = (int) $nav_menu_id;
                set_theme_mod( 'nav_menu_locations', $locations );
        }

        // 5. Apply the recommended style variation (if requested).
        if ( $apply_style && $demo['style'] ) {
                // Map the style name (e.g., "Dark") to the corresponding style file slug.
                $style_lower = strtolower( $demo['style'] );
                $style_file  = get_template_directory() . '/styles/' . $style_lower . '.json';
                if ( file_exists( $style_file ) ) {
                        // CRITICAL FIX: Actually apply the style variation programmatically.
                        // WordPress 6.0+ stores the active style variation in the
                        // wp_global_styles custom post type. We write to it directly.
                        $style_applied = godevs_portfolio_apply_style_variation( $style_lower );

                        // Also store the user's choice via user meta (for reference).
                        $user_id = get_current_user_id();
                        update_user_meta( $user_id, 'godevs-portfolio-applied-style', $demo['style'] );

                        if ( ! $style_applied ) {
                                $style_applied = $demo['style']; // Record the intent even if application failed.
                        }
                }
        }

        // 6. Record the import in the tracker.
        godevs_portfolio_tracker_record(
                $demo_id,
                $demo['name'],
                $mode,
                array_values( $created_pages ),
                $nav_menu_id,
                $homepage_id,
                $style_applied
        );

        // 6b. Clear caches so the imported content appears immediately on the
        // front-end. This addresses the "old data still shows" report:
        //   - clean_post_cache() flushes the individual page's object cache
        //   - wp_cache_delete() clears the options cache (for page_on_front etc.)
        //   - WP_Theme_JSON_Resolver cache is cleared by apply_style_variation
        //   - rewrite_rules are flushed so the new page slugs (home-<demo>,
        //     about-<demo>, etc.) are immediately queryable without a manual
        //     visit to Settings → Permalinks.
        foreach ( $created_pages as $page_id ) {
                clean_post_cache( $page_id );
        }
        if ( $homepage_id ) {
                clean_post_cache( $homepage_id );
        }
        wp_cache_delete( 'godevs_portfolio_imports', 'options' );
        wp_cache_delete( 'page_on_front', 'options' );
        wp_cache_delete( 'show_on_front', 'options' );
        wp_cache_delete( 'alloptions', 'options' );

        // 6c. Flush rewrite rules so the new page slugs are immediately
        // queryable. Without this, /home-<demo>/ etc. would 404 until the
        // user manually re-saves permalinks in Settings → Permalinks.
        // Uses the default hard-flush (regenerates rewrite_rules option AND
        // rewrites .htaccess if the server supports it). The functions.php
        // after_switch_theme handler also flushes on theme switch; this
        // call ensures that any pages created DURING import (after the
        // theme-switch flush) are picked up immediately.
        flush_rewrite_rules();

        // 7. Clear the import lock and return the result.
        delete_transient( 'godevs_import_lock' );

        // 7.5. Fire the post-import action — used by the onboarding module
        // to display the "Demo imported successfully!" admin notice with
        // next-action buttons (View Site, Edit Homepage, Customize Theme).
        do_action( 'godevs_portfolio_demo_imported', $demo['id'], $homepage_id );

        wp_send_json_success(
                array(
                        'demo'        => array(
                                'id'   => $demo['id'],
                                'name' => $demo['name'],
                        ),
                        'mode'        => $mode,
                        'pages'       => $created_pages,
                        'nav_menu_id' => $nav_menu_id,
                        'homepage_id' => $homepage_id,
                        'style'       => $style_applied,
                        'style_label' => $demo['style'] ? $demo['style'] : '',
                        'services_created' => $services_created,
                        'errors'      => $errors,
                        'steps'       => $steps,
                        'replaced_demos' => $replaced_demos,
                        'editHomepageUrl' => $homepage_id ? admin_url( 'post.php?post=' . $homepage_id . '&action=edit' ) : '',
                        'viewSiteUrl'    => home_url( '/' ),
                        'viewSiteLabel'  => __( 'View Live Site →', 'godevs-portfolio' ),
                        'editSiteUrl'      => admin_url( 'site-editor.php' ),
                )
        );
        // phpcs:enable WordPress.Security.NonceVerification.Recommended.
}
add_action( 'wp_ajax_godevs_portfolio_import_demo', 'godevs_portfolio_ajax_import_demo' );

/**
 * Seed demo service detail posts and link them from the Services page.
 *
 * Creates three godevs_service posts with demo-specific professional copy,
 * each flagged so the next import can clean them up (demo isolation), and
 * appends a Query Loop block to the imported Services page so single
 * service pages are reachable.
 *
 * @param string $demo_id          Demo slug (e.g. 'nova').
 * @param int    $services_page_id Imported Services page ID.
 * @return int Number of services created.
 * @since 1.2.0
 */
function godevs_portfolio_seed_demo_services( string $demo_id, int $services_page_id ): int {
        // Remove services seeded by ANY previous demo import.
        $old = get_posts(
                array(
                        'post_type'      => 'godevs_service',
                        'posts_per_page' => 30,
                        'meta_key'       => '_godevs_demo_service',
                        'fields'         => 'ids',
                        'post_status'    => 'any',
                )
        );
        foreach ( $old as $old_id ) {
                wp_delete_post( $old_id, true );
        }

        $catalog = godevs_portfolio_demo_services_catalog();
        if ( ! isset( $catalog[ $demo_id ] ) ) {
                return 0;
        }

        $created = 0;
        foreach ( $catalog[ $demo_id ] as $service ) {
                $body = '<!-- wp:paragraph --><p class="godevs-service-intro">' . esc_html( $service['intro'] ) . '</p><!-- /wp:paragraph -->';
                $body .= '<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">What\'s included</h2><!-- /wp:heading -->';
                $body .= '<!-- wp:list --><ul class="wp-block-list">';
                foreach ( $service['deliverables'] as $d ) {
                        $body .= '<li>' . esc_html( $d ) . '</li>';
                }
                $body .= '</ul><!-- /wp:list -->';
                $body .= '<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">How we work</h2><!-- /wp:heading -->';
                $body .= '<!-- wp:paragraph --><p>' . esc_html( $service['process'] ) . '</p><!-- /wp:paragraph -->';
                $body .= '<!-- wp:paragraph --><p><a class="wp-block-button__link wp-element-button" href="/contact/">Discuss this service</a></p><!-- /wp:paragraph -->';

                $post_id = wp_insert_post(
                        array(
                                'post_type'    => 'godevs_service',
                                'post_title'   => $service['title'],
                                'post_excerpt' => $service['intro'],
                                'post_content' => $body,
                                'post_status'  => 'publish',
                        ),
                        true
                );
                if ( is_wp_error( $post_id ) ) {
                        continue;
                }
                update_post_meta( $post_id, '_godevs_demo_service', $demo_id );
                $created++;
        }

        if ( $created > 0 ) {
                // Append a query loop linking the single service pages.
                $loop  = '<!-- wp:heading {"level":2} --><h2 class="wp-block-heading">Service details</h2><!-- /wp:heading -->';
                $loop .= '<!-- wp:query {"query":{"postType":"godevs_service","perPage":9,"orderBy":"date","order":"asc"},"layout":{"type":"default"}} -->';
                $loop .= '<div class="wp-block-query">';
                $loop .= '<!-- wp:post-template --><ul class="wp-block-post-template">';
                $loop .= '<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} --><div class="wp-block-group">';
                $loop .= '<!-- wp:post-title {"isLink":true} /-->';
                $loop .= '<!-- wp:post-excerpt {"excerptLength":24} /-->';
                $loop .= '</div><!-- /wp:group -->';
                $loop .= '</ul><!-- /wp:post-template -->';
                $loop .= '</div><!-- /wp:query -->';

                $page = get_post( $services_page_id );
                if ( $page ) {
                        wp_update_post(
                                array(
                                        'ID'           => $services_page_id,
                                        'post_content' => $page->post_content . "\n" . $loop,
                                )
                        );
                }
        }

        return $created;
}

/**
 * Demo service catalog — three services per demo with professional copy.
 *
 * @return array<string, array<int, array<string,mixed>>>
 * @since 1.2.0
 */
function godevs_portfolio_demo_services_catalog(): array {
        return array(
                'nova'      => array(
                        array( 'title' => 'Brand Identity Systems', 'intro' => 'Naming, identity and design systems that give ambitious companies a voice people remember.', 'deliverables' => array( 'Brand strategy workshop', 'Logo & identity system', 'Typography and color system', 'Brand guidelines book' ), 'process' => 'We run a two-week strategy sprint, then design in weekly reviews with your team until the system is ready to ship.' ),
                        array( 'title' => 'Digital Product Design', 'intro' => 'Websites and product interfaces designed end-to-end, from first wireframe to design system handover.', 'deliverables' => array( 'UX research & flows', 'High-fidelity UI design', 'Interactive prototype', 'Design system in Figma' ), 'process' => 'Discovery, two design iterations, prototype testing with real users, then a documented handover to engineering.' ),
                        array( 'title' => 'Development & Launch', 'intro' => 'Fast, accessible WordPress builds that editors love and search engines reward.', 'deliverables' => array( 'WordPress build', 'Performance optimization', 'SEO foundations', 'Editor training session' ), 'process' => 'Two-week build cycles with a staging site you can watch progress on, then launch day support.' ),
                ),
                'atelier'   => array(
                        array( 'title' => 'Art Direction', 'intro' => 'Direction for campaigns and editorial projects that need a considered, authored point of view.', 'deliverables' => array( 'Concept & moodboards', 'Photography direction', 'Typography direction', 'Final artwork supervision' ), 'process' => 'We begin with references and conversation, then direct production in close, small rounds.' ),
                        array( 'title' => 'Visual Identity', 'intro' => 'Identities for studios, makers and cultural projects — quiet, confident and built to last.', 'deliverables' => array( 'Logotype & marks', 'Stationery suite', 'Packaging or signage', 'Usage guidelines' ), 'process' => 'A sketch-led process: dozens of directions on paper before anything touches a screen.' ),
                        array( 'title' => 'Editorial Design', 'intro' => 'Books, catalogues and reports with considered grids and unhurried typography.', 'deliverables' => array( 'Grid & typographic system', 'Cover concepts', 'Full layout', 'Print-ready artwork' ), 'process' => 'Sample spreads first, then full layout in passes with proofing at every stage.' ),
                ),
                'pulse'     => array(
                        array( 'title' => 'UX Research & Audits', 'intro' => 'Evidence instead of opinions — user interviews, analytics reviews and usability audits.', 'deliverables' => array( 'Research plan', '5–8 user interviews', 'Usability audit report', 'Prioritized recommendations' ), 'process' => 'One week of fieldwork, one week of synthesis, a findings workshop with your team.' ),
                        array( 'title' => 'Product Design', 'intro' => 'End-to-end design of web and mobile products, from flows to a developer-ready system.', 'deliverables' => array( 'User flows & wireframes', 'High-fidelity screens', 'Interactive prototype', 'Component library' ), 'process' => 'Two-week design sprints with prototype testing between each sprint.' ),
                        array( 'title' => 'Design Systems', 'intro' => 'Token-based design systems that keep growing products consistent.', 'deliverables' => array( 'Component audit', 'Token architecture', 'Documented components', 'Figma + code sync' ), 'process' => 'We audit what exists, define the tokens, and ship the system with your engineers.' ),
                ),
                'frame'     => array(
                        array( 'title' => 'Editorial Photography', 'intro' => 'Commissioned photo essays and portrait sessions with a quiet, deliberate eye.', 'deliverables' => array( 'Creative brief', 'Full-day session', 'Curated image set (40+)', 'Print-ready masters' ), 'process' => 'A conversation about the story first, location scouting, then a calm, unhurried shoot day.' ),
                        array( 'title' => 'Print Sales', 'intro' => 'Limited archival prints from the ongoing bodies of work.', 'deliverables' => array( 'Hahnemühle archival paper', 'Signed & numbered', 'Certificate of authenticity', 'Worldwide shipping' ), 'process' => 'Choose a print, we confirm the edition, and ship within two weeks.' ),
                        array( 'title' => 'Commissions', 'intro' => 'Long-form documentary commissions for publications and institutions.', 'deliverables' => array( 'Proposal & treatment', 'Multi-day coverage', 'Edited story', 'Caption & metadata package' ), 'process' => 'We agree the story, the days and the deliverables in writing — then I disappear until the edit is ready.' ),
                ),
                'architect' => array(
                        array( 'title' => 'Residential Architecture', 'intro' => 'Homes shaped around light, material and the rituals of the people who live in them.', 'deliverables' => array( 'Feasibility study', 'Concept & planning set', 'Technical documentation', 'Site supervision' ), 'process' => 'We start with the site and a brief, then develop the project through models and 1:1 material studies.' ),
                        array( 'title' => 'Interior Design', 'intro' => 'Interiors that carry the architecture inside — calm surfaces, honest materials.', 'deliverables' => array( 'Spatial concept', 'Material & finish palette', 'Custom joinery design', 'Furniture & lighting plan' ), 'process' => 'Concept boards, then detailed drawings and samples, resolved before a single wall opens.' ),
                        array( 'title' => 'Consultation', 'intro' => 'Focused advisory sessions for renovations, layouts and material decisions.', 'deliverables' => array( 'Pre-purchase assessment', 'Layout options study', 'Material guidance', 'Written summary' ), 'process' => 'A site visit, a working session, and a clear written recommendation within a week.' ),
                ),
                'noir'      => array(
                        array( 'title' => 'Direction', 'intro' => 'Direction for films that need a cinematic instinct and a steady hand.', 'deliverables' => array( 'Treatment development', 'Casting & rehearsals', 'On-set direction', 'Editorial supervision' ), 'process' => 'Long development, short lists, precise shoots — the film is made three times: script, set and cut.' ),
                        array( 'title' => 'Cinematography', 'intro' => 'Photography for narratives, documentaries and commercials — light first, always.', 'deliverables' => array( 'Look development', 'Camera & lens package', 'Principal photography', 'Grading supervision' ), 'process' => 'Tests before the shoot, discipline during it, and a grade I attend from first pass to final.' ),
                        array( 'title' => 'Music Videos', 'intro' => 'Three-to-four minute worlds built around a song and its artist.', 'deliverables' => array( 'Concept & boards', 'Two-day shoot', 'Edit & grade', 'Delivery masters' ), 'process' => 'The track leads. We build one strong idea and protect it all the way to delivery.' ),
                ),
                'mono'      => array(
                        array( 'title' => 'Web Application Development', 'intro' => 'Full-stack builds with boring, reliable technology and honest timelines.', 'deliverables' => array( 'Architecture document', 'Working application', 'Automated test suite', 'Deployment pipeline' ), 'process' => 'Weekly shipped increments behind feature flags — you see progress every Friday.' ),
                        array( 'title' => 'WordPress Engineering', 'intro' => 'Block themes, custom blocks and performant builds done properly.', 'deliverables' => array( 'Block theme build', 'Custom Gutenberg blocks', 'Performance budget pass', 'CI for releases' ), 'process' => 'Design tokens in, semantic templates out, Core Web Vitals verified before launch.' ),
                        array( 'title' => 'Technical Consulting', 'intro' => 'Second opinions, audits and rescue missions for struggling codebases.', 'deliverables' => array( 'Codebase audit', 'Risk register', 'Refactoring roadmap', 'Pairing sessions' ), 'process' => 'A week of reading and mapping, then a written plan you could execute with or without me.' ),
                ),
                'luxe'      => array(
                        array( 'title' => 'Collection Development', 'intro' => 'Seasonal collections developed from concept to production-ready specification.', 'deliverables' => array( 'Concept & mood direction', 'Colour & fabric story', 'Full line drawings', 'Tech packs' ), 'process' => 'Research and draping in the studio, then fittings in three precise rounds.' ),
                        array( 'title' => 'Styling & Art Direction', 'intro' => 'Editorial and campaign styling with a restrained, material-first sensibility.', 'deliverables' => array( 'Styling concept', 'Shoot-day styling', 'On-set art direction', 'Editorial selects' ), 'process' => 'A shared reference file, one fitting, and a shoot day that runs to the minute.' ),
                        array( 'title' => 'Bespoke Commissions', 'intro' => 'One-of-one pieces made to measure for private clients.', 'deliverables' => array( 'Design consultation', 'Toile fittings', 'Final garment', 'Care package' ), 'process' => 'Three fittings over eight weeks; nothing leaves the atelier until it is right.' ),
                ),
                'journal'   => array(
                        array( 'title' => 'Writing & Essays', 'intro' => 'Long-form essays and reported features for publications that value slow reading.', 'deliverables' => array( 'Pitch & outline', 'Reported draft', 'Final edit', 'Fact-check notes' ), 'process' => 'Weeks of reading, days of interviews, then a draft you can cut into stone.' ),
                        array( 'title' => 'Editing', 'intro' => 'Developmental editing for book-length manuscripts and essay collections.', 'deliverables' => array( 'Manuscript read & letter', 'Structural edit', 'Line edit', 'Reader\'s report' ), 'process' => 'One full read, an editorial letter, then chapter-by-chapter collaboration.' ),
                        array( 'title' => 'Speaking', 'intro' => 'Talks and keynotes on writing, attention and the craft of the long sentence.', 'deliverables' => array( 'Keynote (30–45 min)', 'Customized for your event', 'Q&A facilitation', 'Reading & signing' ), 'process' => 'A call about your audience, a tailored talk, and no slides with bullet points.' ),
                ),
                'horizon'   => array(
                        array( 'title' => 'Editorial Assignments', 'intro' => 'Travel and documentary assignments for magazines, brands and tourism boards.', 'deliverables' => array( 'Assignment treatment', '5–10 day coverage', 'Curated story edit', 'Full caption & metadata' ), 'process' => 'We agree the story and the season; I come back with a complete, captioned edit.' ),
                        array( 'title' => 'Commercial Campaigns', 'intro' => 'Location campaigns with cinematic light and a documentary spine.', 'deliverables' => array( 'Mood & recce report', 'Production coordination', 'Campaign stills', 'Motion capture (optional)' ), 'process' => 'Recce first, a tight shot list second, and magic hours protected on the calendar.' ),
                        array( 'title' => 'Print Exhibitions', 'intro' => 'Curated prints and exhibitions from a decade of journeys.', 'deliverables' => array( 'Curated selection', 'Museum-grade prints', 'Exhibition text', 'Framing consultation' ), 'process' => 'We choose a theme together; I deliver framed, sequenced work ready to hang.' ),
                ),
                'pulse-x'   => array(),
        );
}

/**
 * AJAX: Remove an imported demo.
 *
 * Trashes the imported pages and deletes the imported navigation menu.
 * Does NOT delete user content unrelated to the demo.
 *
 * @return void
 */
function godevs_portfolio_ajax_remove_demo(): void {
        check_ajax_referer( 'godevs_demo_admin', 'nonce' );

        if ( ! current_user_can( 'manage_options' ) ) {
                wp_send_json_error( array( 'message' => __( 'Insufficient permissions.', 'godevs-portfolio' ) ), 403 );
        }

        $demo_id = isset( $_POST['demo_id'] ) ? sanitize_file_name( wp_unslash( $_POST['demo_id'] ) ) : '';
        if ( ! $demo_id ) {
                wp_send_json_error( array( 'message' => __( 'Missing demo ID.', 'godevs-portfolio' ) ), 400 );
        }

        $result = godevs_portfolio_tracker_remove( $demo_id, true );

        if ( ! $result['success'] ) {
                wp_send_json_error(
                        array(
                                'message' => $result['errors'] ? $result['errors'][0] : __( 'Could not remove demo.', 'godevs-portfolio' ),
                        ),
                        500
                );
        }

        wp_send_json_success(
                array(
                        'demo'    => array( 'id' => $demo_id ),
                        'deleted' => $result['deleted'],
                        'errors'  => $result['errors'],
                )
        );
}
add_action( 'wp_ajax_godevs_portfolio_remove_demo', 'godevs_portfolio_ajax_remove_demo' );

/**
 * Render the demo markup from the demo pattern file.
 *
 * Executes the PHP pattern file (output buffering) to capture the
 * rendered block markup. This is the same mechanism WordPress core
 * uses to load theme-bundled patterns.
 *
 * @param array $demo Demo definition.
 * @return string Rendered markup, or empty string on failure.
 */
function godevs_portfolio_render_demo_markup( array $demo ): string {
        if ( empty( $demo['file'] ) || ! file_exists( $demo['file'] ) ) {
                return '';
        }

        ob_start();
        include $demo['file']; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped — pattern file output is HTML block markup, not user input.
        return (string) ob_get_clean();
}

/**
 * Strip `<!-- wp:template-part ... /-->` blocks from imported page content.
 *
 * Demo pattern files (patterns/demos/*.php) embed their own header/footer
 * template-part references (e.g. `header-dark`, `footer-minimal`). When this
 * content becomes the `post_content` of an imported page, WordPress wraps
 * it in the active `page.html` template — which ALSO has its own header and
 * footer template-part references. That produces a double-header +
 * double-footer on the rendered page (and a TRIPLE header if a Header/Footer
 * Builder layout is also active).
 *
 * This function removes every `wp:template-part` block from the markup
 * (both self-closing `<!-- wp:template-part {...} /-->` and paired
 * `<!-- wp:template-part {...} --> ... <!-- /wp:template-part -->` forms).
 * The active theme template's header and footer will be used instead.
 *
 * @param string $content The raw pattern markup (may contain PHP-processed HTML).
 * @return string Markup with all `wp:template-part` references removed.
 * @since 2.4.1
 */
function godevs_portfolio_strip_template_parts_from_content( string $content ): string {
        if ( '' === $content ) {
                return $content;
        }

        // Remove self-closing template-part blocks: `<!-- wp:template-part {...} /-->`
        $content = preg_replace(
                '/<!--\s*wp:template-part\b[^>]*?\/-->\s*/s',
                '',
                $content
        );

        // Remove paired template-part blocks (with content between open and close):
        // `<!-- wp:template-part {...} --> ... <!-- /wp:template-part -->`
        $content = preg_replace(
                '/<!--\s*wp:template-part\b[^>]*?-->.*?<!--\s*\/wp:template-part\s*-->\s*/s',
                '',
                $content
        );

        return $content;
}

/**
 * Apply a style variation programmatically.
 *
 * WordPress 6.0+ stores the active style variation in the wp_global_styles
 * custom post type. This function writes the variation's JSON content
 * to that post so the variation is actually applied on the front end.
 *
 * @param string $style_slug The style variation slug (e.g., 'dark', 'minimal').
 * @return bool True on success, false on failure.
 * @since 2.0.0
 */
function godevs_portfolio_apply_style_variation( string $style_slug ): bool {
        $style_file = get_template_directory() . '/styles/' . $style_slug . '.json';
        if ( ! file_exists( $style_file ) ) {
                return false;
        }

        $style_content = file_get_contents( $style_file ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents
        if ( empty( $style_content ) ) {
                return false;
        }

        $style_data = json_decode( $style_content, true );
        if ( ! is_array( $style_data ) ) {
                return false;
        }

        // Get the active theme's stylesheet (theme slug).
        $stylesheet = get_stylesheet();

        // Find the existing wp_global_styles post for this theme.
        $args = array(
                'post_type'      => 'wp_global_styles',
                'post_status'    => 'publish',
                'posts_per_page' => 1,
                'tax_query'      => array(
                        array(
                                'taxonomy' => 'wp_theme',
                                'field'    => 'name',
                                'terms'    => $stylesheet,
                        ),
                ),
        );

        $query = new WP_Query( $args );
        $post_id = 0;

        if ( $query->have_posts() ) {
                $query->the_post();
                $post_id = get_the_ID();
                wp_reset_postdata();
        }

        // Build the global styles post content.
        // CRITICAL: Include 'isGlobalStylesUserThemeJSON' so WordPress
        // recognizes this as a valid user-edited global styles override.
        // Also MERGE with any existing user customizations instead of
        // overwriting them entirely — this preserves Site Editor changes.
        $global_styles = array(
                'version'                     => 3,
                'isGlobalStylesUserThemeJSON' => true,
                'styles'                      => $style_data['styles'] ?? array(),
                'settings'                    => $style_data['settings'] ?? array(),
        );

        // If there's an existing post, try to merge user customizations.
        if ( $post_id ) {
                $existing_content = get_post_field( 'post_content', $post_id );
                $existing_data     = json_decode( $existing_content, true );
                if ( is_array( $existing_data ) ) {
                        // Preserve any user-added custom CSS.
                        if ( isset( $existing_data['styles']['css'] ) ) {
                                $global_styles['styles']['css'] = $existing_data['styles']['css'];
                        }
                        // Preserve any user-added custom properties.
                        if ( isset( $existing_data['styles']['custom'] ) ) {
                                $global_styles['styles']['custom'] = array_merge(
                                        $existing_data['styles']['custom'] ?? array(),
                                        $global_styles['styles']['custom'] ?? array()
                                );
                        }
                }
        }

        $post_content = wp_json_encode( $global_styles );

        // WordPress core runs wp_insert_post()/wp_update_post() data through
        // wp_unslash(), which strips the backslashes that escape quotes in
        // JSON (font stacks like "Newsreader", serif) and leaves invalid JSON
        // that WP_Theme_JSON_Resolver rejects on the front end. Write the
        // JSON payload directly to the posts table instead.
        global $wpdb;

        if ( $post_id ) {
                // Update existing post content directly.
                $wpdb->update( $wpdb->posts, array( 'post_content' => $post_content ), array( 'ID' => (int) $post_id ) );
        } else {
                // Create new post, then write the content directly.
                $post_id = wp_insert_post(
                        array(
                                'post_title'   => 'Global Styles',
                                'post_status'  => 'publish',
                                'post_type'    => 'wp_global_styles',
                                'post_content' => '',
                                'post_name'    => 'global-styles-' . $stylesheet,
                        )
                );

                if ( is_wp_error( $post_id ) ) {
                        return false;
                }

                $wpdb->update( $wpdb->posts, array( 'post_content' => $post_content ), array( 'ID' => (int) $post_id ) );

                // Assign the wp_theme taxonomy term.
                wp_set_object_terms( $post_id, $stylesheet, 'wp_theme' );
        }

        clean_post_cache( $post_id );

        // Clear the WP_Theme_JSON_Resolver cache.
        // This forces WordPress to re-read the global styles on the next request.
        if ( class_exists( 'WP_Theme_JSON_Resolver' ) ) {
                // The resolver has a static cache that needs to be cleared.
                // We use reflection to access the private $cache property.
                $reflection = new ReflectionClass( 'WP_Theme_JSON_Resolver' );
                if ( $reflection->hasProperty( 'cache' ) ) {
                        $cache_prop = $reflection->getProperty( 'cache' );
                        $cache_prop->setAccessible( true );
                        $cache_prop->setValue( null, array() );
                }
        }

        return true;
}

/**
 * Reset the global styles post to the theme's default (no variation).
 *
 * This is called during the auto-cleanup phase when a previous demo is
 * removed. It clears any style variation that was applied by the previous
 * demo so the new demo starts from a clean state.
 *
 * @return bool True on success.
 * @since 1.0.0
 */
function godevs_portfolio_reset_style_variation(): bool {
        $stylesheet = get_stylesheet();

        $args = array(
                'post_type'      => 'wp_global_styles',
                'post_status'    => 'publish',
                'posts_per_page' => 1,
                'tax_query'      => array(
                        array(
                                'taxonomy' => 'wp_theme',
                                'field'    => 'name',
                                'terms'    => $stylesheet,
                        ),
                ),
        );

        $query = new WP_Query( $args );
        if ( $query->have_posts() ) {
                $query->the_post();
                $post_id = get_the_ID();
                wp_reset_postdata();

                // Reset the post content to an empty global styles object.
                // This removes any variation's color/typography overrides
                // while preserving the post (so WordPress doesn't re-create
                // it on the next request).
                $empty_styles = wp_json_encode(
                        array(
                                'version'                     => 3,
                                'isGlobalStylesUserThemeJSON' => true,
                                'styles'                      => array(),
                                'settings'                    => array(),
                        )
                );
                // Write directly — wp_update_post() unslashes the content and
                // would corrupt the JSON. See apply_style_variation().
                global $wpdb;
                $wpdb->update( $wpdb->posts, array( 'post_content' => $empty_styles ), array( 'ID' => (int) $post_id ) );
                clean_post_cache( $post_id );
        }

        // Clear the resolver cache.
        if ( class_exists( 'WP_Theme_JSON_Resolver' ) ) {
                $reflection = new ReflectionClass( 'WP_Theme_JSON_Resolver' );
                if ( $reflection->hasProperty( 'cache' ) ) {
                        $cache_prop = $reflection->getProperty( 'cache' );
                        $cache_prop->setAccessible( true );
                        $cache_prop->setValue( null, array() );
                }
        }

        return true;
}

/**
 * AJAX: Get demo preview markup.
 *
 * Returns the rendered block markup for the demo. The JS uses this to
 * render a preview in a modal without modifying the site.
 *
 * @return void
 */
function godevs_portfolio_ajax_preview_demo(): void {
        check_ajax_referer( 'godevs_demo_admin', 'nonce' );

        if ( ! current_user_can( 'manage_options' ) ) {
                wp_send_json_error( array( 'message' => __( 'Insufficient permissions.', 'godevs-portfolio' ) ), 403 );
        }

        $demo_id = isset( $_POST['demo_id'] ) ? sanitize_file_name( wp_unslash( $_POST['demo_id'] ) ) : '';
        if ( ! $demo_id ) {
                wp_send_json_error( array( 'message' => __( 'Missing demo ID.', 'godevs-portfolio' ) ), 400 );
        }

        $demo = godevs_portfolio_get_demo( $demo_id );
        if ( null === $demo ) {
                wp_send_json_error( array( 'message' => __( 'Demo not found.', 'godevs-portfolio' ) ), 404 );
        }

        $markup = godevs_portfolio_render_demo_markup( $demo );
        if ( '' === $markup ) {
                wp_send_json_error( array( 'message' => __( 'Could not render demo.', 'godevs-portfolio' ) ), 500 );
        }

        wp_send_json_success(
                array(
                        'demo'   => array(
                                'id'       => $demo['id'],
                                'name'     => $demo['name'],
                                'style'    => $demo['style'],
                        ),
                        'markup' => $markup,
                )
        );
}
add_action( 'wp_ajax_godevs_portfolio_preview_demo', 'godevs_portfolio_ajax_preview_demo' );

/**
 * AJAX: Get the list of available pages for a demo (for preview navigation).
 *
 * Returns an array of page definitions, each with slug, title, and whether
 * a pattern file exists for that page. Used by the preview modal to build
 * the page-navigation bar.
 *
 * @return void
 * @since 1.3.0
 */
function godevs_portfolio_ajax_get_demo_pages(): void {
        check_ajax_referer( 'godevs_demo_admin', 'nonce' );

        if ( ! current_user_can( 'manage_options' ) ) {
                wp_send_json_error( array( 'message' => __( 'Insufficient permissions.', 'godevs-portfolio' ) ), 403 );
        }

        $demo_id = isset( $_POST['demo_id'] ) ? sanitize_file_name( wp_unslash( $_POST['demo_id'] ) ) : '';
        if ( ! $demo_id ) {
                wp_send_json_error( array( 'message' => __( 'Missing demo ID.', 'godevs-portfolio' ) ), 400 );
        }

        $demo = godevs_portfolio_get_demo( $demo_id );
        if ( null === $demo ) {
                wp_send_json_error( array( 'message' => __( 'Demo not found.', 'godevs-portfolio' ) ), 404 );
        }

        $pages = godevs_portfolio_get_demo_pages( $demo_id );

        // Format for JSON response.
        $formatted = array();
        foreach ( $pages as $page ) {
                $formatted[] = array(
                        'slug'  => $page['slug'],
                        'title' => $page['title'],
                );
        }

        wp_send_json_success(
                array(
                        'demo'  => array(
                                'id'       => $demo['id'],
                                'name'     => $demo['name'],
                                'category' => $demo['category'],
                                'style'    => $demo['style'],
                        ),
                        'pages' => $formatted,
                )
        );
}
add_action( 'wp_ajax_godevs_portfolio_get_demo_pages', 'godevs_portfolio_ajax_get_demo_pages' );

/**
 * AJAX: Preview a specific demo page (not just the homepage).
 *
 * Renders the markup for a given demo + page slug, for use in the
 * preview modal's page-navigation feature.
 *
 * @return void
 * @since 1.3.0
 */
function godevs_portfolio_ajax_preview_demo_page(): void {
        check_ajax_referer( 'godevs_demo_admin', 'nonce' );

        if ( ! current_user_can( 'manage_options' ) ) {
                wp_send_json_error( array( 'message' => __( 'Insufficient permissions.', 'godevs-portfolio' ) ), 403 );
        }

        $demo_id = isset( $_POST['demo_id'] ) ? sanitize_file_name( wp_unslash( $_POST['demo_id'] ) ) : '';
        $page    = isset( $_POST['page'] ) ? sanitize_file_name( wp_unslash( $_POST['page'] ) ) : 'home';

        if ( ! $demo_id ) {
                wp_send_json_error( array( 'message' => __( 'Missing demo ID.', 'godevs-portfolio' ) ), 400 );
        }

        $demo = godevs_portfolio_get_demo( $demo_id );
        if ( null === $demo ) {
                wp_send_json_error( array( 'message' => __( 'Demo not found.', 'godevs-portfolio' ) ), 404 );
        }

        // Resolve the page file.
        $file = godevs_portfolio_get_demo_page_file( $demo_id, $page );
        if ( null === $file ) {
                wp_send_json_error( array( 'message' => __( 'Page not found for this demo.', 'godevs-portfolio' ) ), 404 );
        }

        // Render the markup.
        $markup = '';
        if ( file_exists( $file ) ) {
                ob_start();
                include $file; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped — pattern file output is HTML block markup.
                $markup = (string) ob_get_clean();
        }

        if ( '' === $markup ) {
                wp_send_json_error( array( 'message' => __( 'Could not render page.', 'godevs-portfolio' ) ), 500 );
        }

        wp_send_json_success(
                array(
                        'demo'   => array(
                                'id'   => $demo['id'],
                                'name' => $demo['name'],
                                'page' => $page,
                        ),
                        'markup' => $markup,
                )
        );
}
add_action( 'wp_ajax_godevs_portfolio_preview_demo_page', 'godevs_portfolio_ajax_preview_demo_page' );
