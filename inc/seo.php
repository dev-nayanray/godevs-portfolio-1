<?php
/**
 * SEO Module — Meta tags, Open Graph, Twitter Cards, JSON-LD structured data.
 *
 * Emits SEO meta tags via `wp_head` hooks:
 *   - Meta description (from post excerpt, site tagline, or archive description)
 *   - Canonical URL (via wp_get_canonical_url())
 *   - Open Graph tags (og:title, og:description, og:url, og:type, og:site_name, og:image, og:locale)
 *   - Twitter Card tags (twitter:card, twitter:title, twitter:description, twitter:image)
 *   - JSON-LD structured data:
 *     - WebSite schema on homepage
 *     - Organization schema site-wide (if logo exists)
 *     - Article schema on single posts
 *     - BreadcrumbList schema on single CPT views
 *     - Per-CPT schema: Person (team), Service, CreativeWork (project), Article (case_study), FAQPage (FAQ)
 *
 * The output is escaped per-context (esc_attr for attribute values, esc_url for URLs,
 * wp_kses_post for descriptions, wp_json_encode for JSON-LD).
 *
 * @package GoDevs_Portfolio
 * @since   1.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

// ════════════════════════════════════════════════════════════════════════════
// META DESCRIPTION
// ════════════════════════════════════════════════════════════════════════════

/**
 * Emit <meta name="description"> based on the current query.
 *
 * WordPress core does NOT emit a meta description (it relies on SEO plugins).
 * This fills the gap when no SEO plugin is active.
 *
 * Priority 5 so it appears early in <head> (before OG/Twitter).
 *
 * @return void
 * @since 1.5.0
 */
function godevs_seo_meta_description(): void {
        $description = godevs_seo_get_description();
        if ( '' === $description ) {
                return;
        }
        // Trim to ~160 chars (Google's typical SERP snippet length).
        $description = wp_trim_words( $description, 30, '…' );
        echo '<meta name="description" content="' . esc_attr( $description ) . '">' . "\n";
}
add_action( 'wp_head', 'godevs_seo_meta_description', 5 );

/**
 * Resolve the meta description for the current query.
 *
 * @return string The description, or empty string if none found.
 * @since 1.5.0
 */
function godevs_seo_get_description(): string {
        if ( is_singular() ) {
                $post = get_post();
                if ( ! $post ) {
                        return '';
                }
                // Use manual excerpt if set, otherwise generate from content.
                $excerpt = $post->post_excerpt;
                if ( '' === $excerpt ) {
                        $excerpt = wp_strip_all_tags( $post->post_content );
                        $excerpt = wp_trim_words( $excerpt, 30, '…' );
                }
                return $excerpt;
        }
        if ( is_front_page() || is_home() ) {
                return get_bloginfo( 'description' );
        }
        if ( is_archive() ) {
                $desc = get_the_archive_description();
                if ( $desc ) {
                        return wp_strip_all_tags( $desc );
                }
                $obj = get_queried_object();
                if ( $obj && ! empty( $obj->description ) ) {
                        return $obj->description;
                }
                return sprintf(
                        /* translators: %s: archive title */
                        __( 'Archive for %s', 'godevs-portfolio' ),
                        wp_strip_all_tags( get_the_archive_title() )
                );
        }
        if ( is_search() ) {
                return sprintf(
                        /* translators: %s: search query */
                        __( 'Search results for "%s"', 'godevs-portfolio' ),
                        get_search_query()
                );
        }
        if ( is_404() ) {
                return __( 'Page not found. Try searching or browse the homepage.', 'godevs-portfolio' );
        }
        return '';
}

// ════════════════════════════════════════════════════════════════════════════
// CANONICAL URL
// ════════════════════════════════════════════════════════════════════════════

/**
 * Emit <link rel="canonical"> using WordPress core's canonical URL.
 *
 * WP core does NOT emit a canonical tag on the front-end by default
 * (SEO plugins do). This fills the gap.
 *
 * @return void
 * @since 1.5.0
 */
function godevs_seo_canonical_url(): void {
        $canonical = wp_get_canonical_url();
        if ( ! $canonical ) {
                return;
        }
        echo '<link rel="canonical" href="' . esc_url( $canonical ) . '">' . "\n";
}
add_action( 'wp_head', 'godevs_seo_canonical_url', 5 );

// ════════════════════════════════════════════════════════════════════════════
// OPEN GRAPH + TWITTER CARDS
// ════════════════════════════════════════════════════════════════════════════

/**
 * Emit Open Graph + Twitter Card meta tags.
 *
 * Builds og:title, og:description, og:url, og:type, og:site_name, og:image,
 * og:locale from the current query (post data + featured image).
 *
 * @return void
 * @since 1.5.0
 */
function godevs_seo_open_graph_and_twitter(): void {
        if ( is_admin() ) {
                return;
        }

        // Resolve title.
        if ( is_singular() ) {
                $title = get_the_title();
                $url   = get_permalink();
                $type  = 'article';
                $desc  = godevs_seo_get_description();
                $img   = get_the_post_thumbnail_url( null, 'full' );
        } elseif ( is_front_page() || is_home() ) {
                $title = get_bloginfo( 'name' );
                $url   = home_url( '/' );
                $type  = 'website';
                $desc  = get_bloginfo( 'description' );
                // Use custom logo as the homepage OG image, if set.
                $logo_id = get_theme_mod( 'custom_logo' );
                if ( $logo_id ) {
                        $img = wp_get_attachment_image_url( $logo_id, 'full' );
                } else {
                        $img = '';
                }
        } elseif ( is_archive() ) {
                $title = wp_strip_all_tags( get_the_archive_title() );
                $url   = get_permalink( get_queried_object_id() );
                if ( ! $url ) {
                        $url = home_url( $_SERVER['REQUEST_URI'] ?? '/' );
                }
                $type = 'website';
                $desc = godevs_seo_get_description();
                $img  = '';
        } else {
                $title = wp_get_document_title();
                $url   = home_url( $_SERVER['REQUEST_URI'] ?? '/' );
                $type  = 'website';
                $desc  = godevs_seo_get_description();
                $img   = '';
        }

        if ( ! $title ) {
                return;
        }

        // Open Graph tags.
        echo "\n<!-- Open Graph -->\n";
        echo '<meta property="og:title" content="' . esc_attr( $title ) . '">' . "\n";
        echo '<meta property="og:description" content="' . esc_attr( $desc ) . '">' . "\n";
        echo '<meta property="og:url" content="' . esc_url( $url ) . '">' . "\n";
        echo '<meta property="og:type" content="' . esc_attr( $type ) . '">' . "\n";
        echo '<meta property="og:site_name" content="' . esc_attr( get_bloginfo( 'name' ) ) . '">' . "\n";
        echo '<meta property="og:locale" content="' . esc_attr( get_locale() ) . '">' . "\n";
        if ( $img ) {
                echo '<meta property="og:image" content="' . esc_url( $img ) . '">' . "\n";
                echo '<meta property="og:image:alt" content="' . esc_attr( $title ) . '">' . "\n";
        }

        // Twitter Card tags.
        echo "\n<!-- Twitter Card -->\n";
        echo '<meta name="twitter:card" content="' . ( $img ? 'summary_large_image' : 'summary' ) . '">' . "\n";
        echo '<meta name="twitter:title" content="' . esc_attr( $title ) . '">' . "\n";
        echo '<meta name="twitter:description" content="' . esc_attr( $desc ) . '">' . "\n";
        if ( $img ) {
                echo '<meta name="twitter:image" content="' . esc_url( $img ) . '">' . "\n";
        }
}
add_action( 'wp_head', 'godevs_seo_open_graph_and_twitter', 5 );

// ════════════════════════════════════════════════════════════════════════════
// JSON-LD STRUCTURED DATA
// ════════════════════════════════════════════════════════════════════════════

/**
 * Emit JSON-LD structured data based on the current query.
 *
 * Emits WebSite + Organization schema on the homepage, Article schema
 * on single posts, and per-CPT schema (Person, Service, CreativeWork,
 * Article, FAQPage) on CPT single views. Also emits BreadcrumbList
 * schema on all non-front-page singular views.
 *
 * @return void
 * @since 1.5.0
 */
function godevs_seo_json_ld(): void {
        if ( is_admin() ) {
                return;
        }

        // WebSite schema — emit on the homepage only.
        if ( is_front_page() ) {
                $website_schema = array(
                        '@context' => 'https://schema.org',
                        '@type'    => 'WebSite',
                        '@id'      => home_url( '/#website' ),
                        'url'      => home_url( '/' ),
                        'name'     => get_bloginfo( 'name' ),
                        'description' => get_bloginfo( 'description' ),
                        'potentialAction' => array(
                                '@type'       => 'SearchAction',
                                'target'      => array(
                                        '@type'       => 'EntryPoint',
                                        'urlTemplate' => home_url( '/?s={search_term_string}' ),
                                ),
                                'query-input' => 'required name=search_term_string',
                        ),
                );
                echo "\n<!-- WebSite schema -->\n";
                echo '<script type="application/ld+json">' . wp_json_encode( $website_schema ) . '</script>' . "\n";
        }

        // Organization schema — emit site-wide if a custom logo is set.
        $logo_id = get_theme_mod( 'custom_logo' );
        if ( $logo_id ) {
                $logo_url = wp_get_attachment_image_url( $logo_id, 'full' );
                if ( $logo_url ) {
                        $org_schema = array(
                                '@context' => 'https://schema.org',
                                '@type'    => 'Organization',
                                '@id'      => home_url( '/#organization' ),
                                'url'      => home_url( '/' ),
                                'name'     => get_bloginfo( 'name' ),
                                'logo'     => array(
                                        '@type' => 'ImageObject',
                                        'url'   => $logo_url,
                                ),
                        );
                        echo "\n<!-- Organization schema -->\n";
                        echo '<script type="application/ld+json">' . wp_json_encode( $org_schema ) . '</script>' . "\n";
                }
        }

        // Per-page / per-CPT schema.
        if ( is_singular() ) {
                $schema = godevs_seo_get_singular_schema();
                if ( $schema ) {
                        echo "\n<!-- Single schema -->\n";
                        echo '<script type="application/ld+json">' . wp_json_encode( $schema ) . '</script>' . "\n";
                }

                // BreadcrumbList schema — emit on every singular view except the homepage.
                if ( ! is_front_page() ) {
                        $breadcrumb = godevs_seo_get_breadcrumb_schema();
                        if ( $breadcrumb ) {
                                echo "\n<!-- BreadcrumbList schema -->\n";
                                echo '<script type="application/ld+json">' . wp_json_encode( $breadcrumb ) . '</script>' . "\n";
                        }
                }
        }
}
add_action( 'wp_head', 'godevs_seo_json_ld', 10 );

/**
 * Resolve the per-CPT schema for a singular view.
 *
 * @return array|null Schema array, or null if no schema applies.
 * @since 1.5.0
 */
function godevs_seo_get_singular_schema(): ?array {
        $post = get_post();
        if ( ! $post ) {
                return null;
        }
        $permalink = get_permalink( $post );
        $title     = get_the_title( $post );
        $excerpt   = wp_strip_all_tags( $post->post_excerpt ?: wp_trim_words( wp_strip_all_tags( $post->post_content ), 30, '…' ) );
        $img       = get_the_post_thumbnail_url( $post, 'full' );
        $date_pub  = get_the_date( 'c', $post );
        $date_mod  = get_the_modified_date( 'c', $post );

        switch ( $post->post_type ) {
                case 'post':
                        return array(
                                '@context'         => 'https://schema.org',
                                '@type'            => 'Article',
                                'headline'         => $title,
                                'description'      => $excerpt,
                                'datePublished'    => $date_pub,
                                'dateModified'     => $date_mod,
                                'mainEntityOfPage' => array( '@type' => 'WebPage', '@id' => $permalink ),
                                'url'              => $permalink,
                                'author'           => array(
                                        '@type' => 'Person',
                                        'name'  => get_the_author_meta( 'display_name', $post->post_author ),
                                ),
                                ...( $img ? array( 'image' => array( '@type' => 'ImageObject', 'url' => $img ) ) : array() ),
                        );

                case 'godevs_project':
                        return array(
                                '@context'         => 'https://schema.org',
                                '@type'            => 'CreativeWork',
                                'name'             => $title,
                                'description'      => $excerpt,
                                'url'              => $permalink,
                                'datePublished'    => $date_pub,
                                'dateModified'     => $date_mod,
                                ...( $img ? array( 'image' => $img ) : array() ),
                        );

                case 'godevs_service':
                        return array(
                                '@context'    => 'https://schema.org',
                                '@type'       => 'Service',
                                'name'        => $title,
                                'description' => $excerpt,
                                'url'         => $permalink,
                                'provider'    => array(
                                        '@type' => 'Organization',
                                        'name'  => get_bloginfo( 'name' ),
                                        'url'   => home_url( '/' ),
                                ),
                                ...( $img ? array( 'image' => $img ) : array() ),
                        );

                case 'godevs_team':
                        // Team member — emit Person schema with job title + image.
                        $job_title = get_post_meta( $post->ID, '_godevs_team_job_title', true );
                        return array(
                                '@context'   => 'https://schema.org',
                                '@type'      => 'Person',
                                'name'       => $title,
                                'description' => $excerpt,
                                'url'        => $permalink,
                                ...( $job_title ? array( 'jobTitle' => $job_title ) : array() ),
                                ...( $img ? array( 'image' => $img ) : array() ),
                        );

                case 'godevs_testimonial':
                        // Testimonial — emit Review schema.
                        $rating = get_post_meta( $post->ID, '_godevs_testimonial_rating', true );
                        $client_role = get_post_meta( $post->ID, '_godevs_testimonial_client_role', true );
                        return array(
                                '@context'        => 'https://schema.org',
                                '@type'           => 'Review',
                                'reviewBody'      => $excerpt,
                                'url'             => $permalink,
                                'datePublished'   => $date_pub,
                                'itemReviewed'    => array(
                                        '@type' => 'Organization',
                                        'name'  => get_bloginfo( 'name' ),
                                ),
                                'author'          => array(
                                        '@type' => 'Person',
                                        'name'  => $title,
                                        ...( $client_role ? array( 'description' => $client_role ) : array() ),
                                ),
                                ...( $rating ? array( 'reviewRating' => array(
                                        '@type'       => 'Rating',
                                        'ratingValue' => (string) $rating,
                                        'bestRating'  => '5',
                                        'worstRating' => '1',
                                ) ) : array() ),
                        );

                case 'godevs_case_study':
                        return array(
                                '@context'         => 'https://schema.org',
                                '@type'            => 'Article',
                                'headline'         => $title,
                                'description'      => $excerpt,
                                'datePublished'    => $date_pub,
                                'dateModified'     => $date_mod,
                                'mainEntityOfPage' => array( '@type' => 'WebPage', '@id' => $permalink ),
                                'url'              => $permalink,
                                ...( $img ? array( 'image' => array( '@type' => 'ImageObject', 'url' => $img ) ) : array() ),
                        );

                case 'godevs_faq':
                        // FAQ single — emit FAQPage with Question/Answer pairs.
                        // The FAQ content is parsed from the post content (H3 = question, p = answer).
                        $questions = godevs_seo_parse_faq_questions( $post->post_content );
                        if ( empty( $questions ) ) {
                                return null;
                        }
                        return array(
                                '@context'   => 'https://schema.org',
                                '@type'      => 'FAQPage',
                                'mainEntity' => $questions,
                        );

                default:
                        // Generic page.
                        return array(
                                '@context'         => 'https://schema.org',
                                '@type'            => 'WebPage',
                                'name'             => $title,
                                'description'      => $excerpt,
                                'url'              => $permalink,
                                'dateModified'     => $date_mod,
                                ...( $img ? array( 'image' => $img ) : array() ),
                        );
        }
}

/**
 * Parse H3-question / paragraph-answer pairs from FAQ post content.
 *
 * Used to build FAQPage schema's mainEntity array.
 *
 * @param string $content Post content (HTML).
 * @return array<int,array> Array of Question schema arrays.
 * @since 1.5.0
 */
function godevs_seo_parse_faq_questions( string $content ): array {
        if ( ! preg_match_all( '/<h3[^>]*>(.+?)<\/h3>\s*<p[^>]*>(.+?)<\/p>/is', $content, $matches, PREG_SET_ORDER ) ) {
                return array();
        }
        $questions = array();
        foreach ( $matches as $m ) {
                $q = wp_strip_all_tags( $m[1] );
                $a = wp_strip_all_tags( $m[2] );
                if ( ! $q || ! $a ) {
                        continue;
                }
                $questions[] = array(
                        '@type'          => 'Question',
                        'name'           => $q,
                        'acceptedAnswer' => array(
                                '@type' => 'Answer',
                                'text'  => $a,
                        ),
                );
        }
        return $questions;
}

/**
 * Build BreadcrumbList JSON-LD for a singular view.
 *
 * Produces: Home → [CPT Archive] → Post Title
 *
 * @return array|null BreadcrumbList schema array, or null if not applicable.
 * @since 1.5.0
 */
function godevs_seo_get_breadcrumb_schema(): ?array {
        $post = get_post();
        if ( ! $post ) {
                return null;
        }
        $items = array(
                array(
                        '@type'    => 'ListItem',
                        'position' => 1,
                        'name'     => get_bloginfo( 'name' ),
                        'item'     => home_url( '/' ),
                ),
        );

        $position = 2;
        // If this is a CPT single, add the CPT archive as a parent breadcrumb.
        if ( $post->post_type !== 'post' && $post->post_type !== 'page' ) {
                $cpt_obj = get_post_type_object( $post->post_type );
                if ( $cpt_obj && $cpt_obj->has_archive ) {
                        $archive_url = get_post_type_archive_link( $post->post_type );
                        if ( $archive_url ) {
                                $items[] = array(
                                        '@type'    => 'ListItem',
                                        'position' => $position,
                                        'name'     => $cpt_obj->labels->name,
                                        'item'     => $archive_url,
                                );
                                $position++;
                        }
                }
        }

        // Add the current post as the last breadcrumb.
        $items[] = array(
                '@type'    => 'ListItem',
                'position' => $position,
                'name'     => get_the_title( $post ),
                'item'     => get_permalink( $post ),
        );

        return array(
                '@context'        => 'https://schema.org',
                '@type'           => 'BreadcrumbList',
                'itemListElement' => $items,
        );
}
