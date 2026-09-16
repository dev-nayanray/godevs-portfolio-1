<?php
/**
 * Settings Integration — wires theme settings to front-end behavior.
 *
 * This file bridges the gap between saved Theme Settings options and
 * actual front-end rendering. It handles:
 *
 *   1. Header/footer template-part switching (header_style → slug swap)
 *   2. Header CTA text/link injection
 *   3. Header sticky behavior
 *   4. Footer copyright/social toggles
 *   5. Blog layout/columns/show toggles for `post` post type
 *   6. Typography settings (font family, weight, scale)
 *   7. Performance settings (motion, lazy images)
 *   8. Brand name/tagline injection
 *
 * @package GoDevs_Portfolio
 * @since   3.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

/**
 * Map header_style setting to template-part slug.
 */
function godevs_settings_header_slug_map(): array {
        return array(
                'default'     => 'header',
                'minimal'     => 'header-minimal',
                'centered'    => 'header-centered',
                'split'       => 'header-split',
                'transparent' => 'header-transparent',
                'dark'        => 'header-dark',
        );
}

/**
 * Map footer_style setting to template-part slug.
 */
function godevs_settings_footer_slug_map(): array {
        return array(
                'default'       => 'footer',
                'minimal'       => 'footer-minimal',
                'multi-column' => 'footer-multi-column',
                'social'        => 'footer-social',
                'cta'           => 'footer-cta',
                'newsletter'    => 'footer-newsletter',
                'dark'          => 'footer-dark',
        );
}

/**
 * render_block filter: Swap the default header/footer template-part slug
 * based on the Theme Settings header_style / footer_style value.
 *
 * This lets the user pick a header variant (Minimal, Centered, Split,
 * Transparent, Dark) from the Header settings panel — without needing
 * to use the Header/Footer Builder.
 *
 * Only runs when NO builder layout is active (the builder takes
 * precedence over header_style/footer_style).
 *
 * @param string    $block_content The rendered block HTML.
 * @param array     $block         The block array.
 * @return string Modified block content (unchanged if not a header/footer template-part).
 */
function godevs_settings_swap_template_part( string $block_content, array $block ): string {
        if ( 'core/template-part' !== $block['blockName'] ) {
                return $block_content;
        }

        $slug = $block['attrs']['slug'] ?? '';
        if ( ! $slug ) {
                return $block_content;
        }

        // Only swap the default 'header' and 'footer' slugs — not variants
        // like 'header-dark' or 'footer-minimal' that are already specific.
        if ( 'header' === $slug ) {
                // Skip if a builder layout is active for headers.
                if ( function_exists( 'godevs_hf_get_active' ) && godevs_hf_get_active( 'header' ) ) {
                        return $block_content;
                }
                $style = godevs_portfolio_get_setting( 'header_style' );
                $map   = godevs_settings_header_slug_map();
                if ( isset( $map[ $style ] ) && $map[ $style ] !== 'header' ) {
                        // Re-render the template-part with the new slug.
                        $block['attrs']['slug'] = $map[ $style ];
                        return render_block( $block );
                }
        } elseif ( 'footer' === $slug ) {
                // Skip if a builder layout is active for footers.
                if ( function_exists( 'godevs_hf_get_active' ) && godevs_hf_get_active( 'footer' ) ) {
                        return $block_content;
                }
                $style = godevs_portfolio_get_setting( 'footer_style' );
                $map   = godevs_settings_footer_slug_map();
                if ( isset( $map[ $style ] ) && $map[ $style ] !== 'footer' ) {
                        $block['attrs']['slug'] = $map[ $style ];
                        return render_block( $block );
                }
        }

        return $block_content;
}
add_filter( 'render_block', 'godevs_settings_swap_template_part', 5, 2 );

/**
 * Add 'post' to the CPT archive settings map so blog layout/columns work.
 *
 * @param array $map Existing map.
 * @return array Modified map with 'post' added.
 */
function godevs_settings_add_post_to_archive_map( array $map ): array {
        $map['post'] = 'blog_';
        return $map;
}
add_filter( 'godevs_cpt_archive_settings_map', 'godevs_settings_add_post_to_archive_map' );

/**
 * Generate the blog archive template for post-type archives.
 *
 * Handles blog_layout (grid/list/magazine), blog_columns, and the
 * blog_show_author/date/categories/featured toggles.
 *
 * @param string $layout  Layout type (grid/list/magazine).
 * @param int    $columns Number of columns.
 * @return string Block markup for the post-template inner content.
 */
function godevs_settings_blog_archive_template( string $layout, int $columns ): string {
        $show_author  = godevs_portfolio_get_setting( 'blog_show_author' ) === '1';
        $show_date    = godevs_portfolio_get_setting( 'blog_show_date' ) === '1';
        $show_cats    = godevs_portfolio_get_setting( 'blog_show_categories' ) === '1';
        $show_feature = godevs_portfolio_get_setting( 'blog_show_featured' ) === '1';

        $card = '';
        if ( $show_feature ) {
                $card .= '<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"border":{"radius":"8px"}}} /-->';
        }
        $card .= '<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->';
        $card .= '<div class="wp-block-group">';
        if ( $show_date || $show_cats ) {
                $card .= '<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->';
                $card .= '<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">';
                $meta = array();
                if ( $show_date ) $meta[] = '<!-- wp:post-date /-->';
                if ( $show_cats ) $meta[] = '<!-- wp:post-terms {"term":"category"} /-->';
                $card .= implode( ' · ', $meta );
                $card .= '</p>';
                $card .= '<!-- /wp:paragraph -->';
        }
        $card .= '<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"var:preset|font-size|large","letterSpacing":"-0.01em"}}} /-->';
        $card .= '<!-- wp:post-excerpt {"moreText":"' . __( 'Read more', 'godevs-portfolio' ) . ' →","style":{"typography":{"fontSize":"var:preset|font-size|small"}}} /-->';
        if ( $show_author ) {
                $card .= '<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|small"},"color":{"text":"var:preset|color|muted"}}} -->';
                $card .= '<p class="has-text-color" style="color:var(--wp--preset--color--muted);font-size:var(--wp--preset--font-size--small)">' . esc_html__( 'By', 'godevs-portfolio' ) . ' <!-- wp:post-author {"showAvatar":false} /--></p>';
                $card .= '<!-- /wp:paragraph -->';
        }
        $card .= '</div>';
        $card .= '<!-- /wp:group -->';

        if ( $layout === 'list' ) {
                return $card;
        }
        // Grid / magazine → wrap in column grid.
        $col_class = "godevs-archive-grid-{$columns}col";
        return "<!-- wp:group {\"className\":\"{$col_class}\",\"layout\":{\"type\":\"default\"}} -->\n<div class=\"wp-block-group {$col_class}\">\n{$card}\n</div>\n<!-- /wp:group -->";
}

/**
 * Hook into the CPT archive template generator for 'post' type.
 *
 * Reads blog_layout, blog_columns, blog_show_* settings and generates
 * the inner block markup for the blog home page post-template.
 *
 * @param string $template The generated inner template (empty string for 'post').
 * @param string $cpt_slug  The CPT slug ('post' for blog home).
 * @param string $layout    Layout setting value passed through from the dispatcher.
 * @param int    $columns   Column count passed through from the dispatcher.
 * @return string The generated template for 'post', or the original $template unchanged.
 */
function godevs_settings_post_archive_template( string $template, string $cpt_slug, string $layout = '', int $columns = 0 ): string {
        if ( 'post' !== $cpt_slug ) {
                return $template;
        }
        // The dispatcher passes the resolved layout/columns, but those values
        // came from the CPT settings map which doesn't include 'post'. So we
        // re-resolve them from the dedicated blog_* settings here.
        $resolved_layout  = '' !== $layout ? $layout : godevs_portfolio_get_setting( 'blog_layout' );
        $resolved_columns = $columns > 0 ? $columns : (int) godevs_portfolio_get_setting( 'blog_columns' );
        if ( $resolved_columns < 1 ) {
                $resolved_columns = 3;
        }
        return godevs_settings_blog_archive_template( $resolved_layout, $resolved_columns );
}
add_filter( 'godevs_cpt_archive_generate_template', 'godevs_settings_post_archive_template', 10, 4 );

/**
 * Inject brand name and tagline into the site header.
 *
 * Replaces the default site-title text with the brand_name setting,
 * and the tagline with brand_tagline.
 *
 * @param string $block_content The rendered block content.
 * @param array  $block         The block array.
 * @return string Modified content.
 */
function godevs_settings_inject_brand( string $block_content, array $block ): string {
        if ( 'core/site-title' !== $block['blockName'] ) {
                return $block_content;
        }
        $brand = godevs_portfolio_get_setting( 'brand_name' );
        if ( $brand && $brand !== get_bloginfo( 'name' ) ) {
                // Replace the site title text with the custom brand name.
                $block_content = preg_replace(
                        '/>([^<]*)<\/a>/',
                        '>' . esc_html( $brand ) . '</a>',
                        $block_content,
                        1
                );
        }
        return $block_content;
}
add_filter( 'render_block', 'godevs_settings_inject_brand', 10, 2 );

/**
 * Inject typography settings as CSS variables.
 *
 * Handles display_font, body_font, heading_weight, and type_scale.
 *
 * @param string $css The existing dynamic CSS.
 * @return string Modified CSS with typography variables appended.
 */
function godevs_settings_typography_css( string $css ): string {
        $display_font   = godevs_portfolio_get_setting( 'display_font' );
        $body_font      = godevs_portfolio_get_setting( 'body_font' );
        $heading_weight = godevs_portfolio_get_setting( 'heading_weight' );

        $font_map = array(
                'display' => '"Inter", "SF Pro Display", "Segoe UI", system-ui, sans-serif',
                'body'    => '"Inter", "SF Pro Text", "Segoe UI", system-ui, sans-serif',
                'serif'   => '"Georgia", "Times New Roman", serif',
                'mono'    => '"SF Mono", "JetBrains Mono", "Menlo", monospace',
        );

        $display_family = $font_map[ $display_font ] ?? $font_map['display'];
        $body_family    = $font_map[ $body_font ] ?? $font_map['body'];

        $css .= ":root{";
        $css .= "--wp--preset--font-family--display:{$display_family};";
        $css .= "--wp--preset--font-family--body:{$body_family};";
        $css .= "}";

        // Heading weight override.
        $css .= "h1,h2,h3,h4,h5,h6{font-weight:{$heading_weight};}";

        return $css;
}
add_filter( 'godevs_portfolio_dynamic_css', 'godevs_settings_typography_css' );

/**
 * Add lazy loading attributes to images if the setting is enabled.
 *
 * @param array $attrs  Image attributes.
 * @return array Modified attributes.
 */
function godevs_settings_lazy_load_images( array $attrs ): array {
        if ( godevs_portfolio_get_setting( 'lazy_images' ) !== '1' ) {
                return $attrs;
        }
        if ( ! isset( $attrs['loading'] ) ) {
                $attrs['loading'] = 'lazy';
        }
        return $attrs;
}
add_filter( 'wp_get_attachment_image_attributes', 'godevs_settings_lazy_load_images' );
