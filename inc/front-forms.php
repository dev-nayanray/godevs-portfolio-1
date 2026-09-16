<?php
/**
 * Front-end Booking & Proposal Forms.
 *
 * Provides two shortcodes for front-end user interaction:
 *
 *   [godevs_booking_form]  — A booking request form that creates a
 *     godevs_booking post when submitted. Used for appointment/service
 *     bookings. Sends an email notification to the admin on submission.
 *
 *   [godevs_proposal_form] — A project proposal/contact form that sends
 *     an email to the site admin. Does NOT create a post — it's a
 *     lightweight contact form for project inquiries.
 *
 * Both forms are self-contained: they handle their own submission via
 * admin-ajax.php, nonce verification, sanitization, and success/error
 * display. No plugins required.
 *
 * @package GoDevs_Portfolio
 * @since   2.9.0
 */

if ( ! defined( 'ABSPATH' ) ) {
        exit;
}

/**
 * Enqueue front-end form styles.
 */
function godevs_forms_enqueue_styles(): void {
        if ( ! is_singular() ) {
                return;
        }
        // Only enqueue if the post content contains our shortcodes.
        $post = get_post();
        if ( ! $post || ! has_shortcode( $post->post_content ?? '', 'godevs_booking_form' )
                && ! has_shortcode( $post->post_content ?? '', 'godevs_proposal_form' ) ) {
                return;
        }

        $css_path = get_template_directory() . '/assets/css/front-forms.css';
        $css_uri  = get_template_directory_uri() . '/assets/css/front-forms.css';
        if ( file_exists( $css_path ) ) {
                wp_enqueue_style( 'godevs-front-forms', $css_uri, array(), '2.9.0' );
        }

        $front_forms_js_path = get_template_directory() . '/assets/js/front-forms.js';
        $front_forms_js_ver  = file_exists( $front_forms_js_path ) ? (string) filemtime( $front_forms_js_path ) : GODEVS_PORTFOLIO_VERSION;
        wp_enqueue_script(
                'godevs-front-forms',
                get_template_directory_uri() . '/assets/js/front-forms.js',
                array(),
                $front_forms_js_ver,
                array( 'in_footer' => true, 'strategy' => 'defer' )
        );
        wp_localize_script(
                'godevs-front-forms',
                'GODEVS_FORMS',
                array(
                        'ajaxUrl'  => admin_url( 'admin-ajax.php' ),
                        'bookingNonce' => wp_create_nonce( 'godevs_booking_form' ),
                        'proposalNonce' => wp_create_nonce( 'godevs_proposal_form' ),
                        'i18n'     => array(
                                'submitting' => __( 'Sending…', 'godevs-portfolio' ),
                                'successBooking' => __( 'Booking request sent! We\'ll get back to you shortly.', 'godevs-portfolio' ),
                                'successProposal' => __( 'Proposal sent! We\'ll review and respond within 48 hours.', 'godevs-portfolio' ),
                                'error' => __( 'Something went wrong. Please try again or email us directly.', 'godevs-portfolio' ),
                                'required' => __( 'Please fill in all required fields.', 'godevs-portfolio' ),
                                'invalidEmail' => __( 'Please enter a valid email address.', 'godevs-portfolio' ),
                        ),
                )
        );
}
add_action( 'wp_enqueue_scripts', 'godevs_forms_enqueue_styles' );

/**
 * Shortcode: Booking Form.
 *
 * Renders a front-end booking request form. On submission, creates a
 * `godevs_booking` post with status `pending` and sends an email
 * notification to the site admin.
 *
 * Usage: [godevs_booking_form service="Consultation"]
 *
 * @param array $atts Shortcode attributes.
 * @return string HTML form.
 */
function godevs_booking_form_shortcode( array $atts = array() ): string {
        $atts = shortcode_atts(
                array(
                        'service' => '',
                ),
                $atts,
                'godevs_booking_form'
        );

        // If the booking module is disabled, show a message.
        if ( function_exists( 'godevs_portfolio_module_enabled' ) && ! godevs_portfolio_module_enabled( 'bookings' ) ) {
                return '<p class="godevs-form-disabled">' . esc_html__( 'Bookings are currently disabled.', 'godevs-portfolio' ) . '</p>';
        }

        $services = array();
        if ( post_type_exists( 'godevs_service' ) ) {
                $services_query = get_posts(
                        array(
                                'post_type'      => 'godevs_service',
                                'posts_per_page' => -1,
                                'orderby'        => 'title',
                                'order'          => 'ASC',
                        )
                );
                foreach ( $services_query as $s ) {
                        $services[ $s->ID ] = $s->post_title;
                }
        }

        ob_start();
        ?>
        <div class="godevs-form-wrap godevs-booking-form-wrap" id="godevs-booking-form">
                <form class="godevs-form" method="post" autocomplete="on" novalidate>
                        <?php wp_nonce_field( 'godevs_booking_form', 'godevs_booking_nonce' ); ?>
                        <input type="hidden" name="action" value="godevs_submit_booking" />
                        <!-- Honeypot anti-spam field — hidden from real users via CSS. -->
                        <div style="position:absolute;left:-9999px;width:1px;height:1px;overflow:hidden;" aria-hidden="true">
                                <label><?php esc_html_e( 'Leave this field empty', 'godevs-portfolio' ); ?>
                                        <input type="text" name="godevs_hp" tabindex="-1" autocomplete="off" />
                                </label>
                        </div>

                        <div class="godevs-form-row">
                                <div class="godevs-form-field">
                                        <label for="godevs-booking-name"><?php esc_html_e( 'Your Name', 'godevs-portfolio' ); ?> <span class="required">*</span></label>
                                        <input type="text" id="godevs-booking-name" name="booking_name" required autocomplete="name" />
                                </div>
                                <div class="godevs-form-field">
                                        <label for="godevs-booking-email"><?php esc_html_e( 'Email', 'godevs-portfolio' ); ?> <span class="required">*</span></label>
                                        <input type="email" id="godevs-booking-email" name="booking_email" required autocomplete="email" />
                                </div>
                        </div>

                        <div class="godevs-form-row">
                                <div class="godevs-form-field">
                                        <label for="godevs-booking-phone"><?php esc_html_e( 'Phone', 'godevs-portfolio' ); ?></label>
                                        <input type="tel" id="godevs-booking-phone" name="booking_phone" autocomplete="tel" />
                                </div>
                                <div class="godevs-form-field">
                                        <label for="godevs-booking-service"><?php esc_html_e( 'Service', 'godevs-portfolio' ); ?></label>
                                        <select id="godevs-booking-service" name="booking_service">
                                                <option value=""><?php esc_html_e( '— Select a service —', 'godevs-portfolio' ); ?></option>
                                                <?php foreach ( $services as $id => $title ) : ?>
                                                        <option value="<?php echo esc_attr( $title ); ?>"<?php selected( $atts['service'], $title ); ?>><?php echo esc_html( $title ); ?></option>
                                                <?php endforeach; ?>
                                                <?php if ( $atts['service'] && ! in_array( $atts['service'], $services, true ) ) : ?>
                                                        <option value="<?php echo esc_attr( $atts['service'] ); ?>" selected><?php echo esc_html( $atts['service'] ); ?></option>
                                                <?php endif; ?>
                                        </select>
                                </div>
                        </div>

                        <div class="godevs-form-row">
                                <div class="godevs-form-field">
                                        <label for="godevs-booking-date"><?php esc_html_e( 'Preferred Date', 'godevs-portfolio' ); ?></label>
                                        <input type="date" id="godevs-booking-date" name="booking_date" />
                                </div>
                                <div class="godevs-form-field">
                                        <label for="godevs-booking-time"><?php esc_html_e( 'Preferred Time', 'godevs-portfolio' ); ?></label>
                                        <input type="time" id="godevs-booking-time" name="booking_time" />
                                </div>
                        </div>

                        <div class="godevs-form-field">
                                <label for="godevs-booking-message"><?php esc_html_e( 'Message', 'godevs-portfolio' ); ?></label>
                                <textarea id="godevs-booking-message" name="booking_message" rows="4" placeholder="<?php esc_attr_e( 'Tell us about your project or what you need…', 'godevs-portfolio' ); ?>"></textarea>
                        </div>

                        <button type="submit" class="godevs-form-submit wp-element-button">
                                <?php esc_html_e( 'Request Booking', 'godevs-portfolio' ); ?>
                        </button>

                        <div class="godevs-form-message" role="alert" aria-live="polite"></div>
                </form>
        </div>
        <?php
        return ob_get_clean();
}
add_shortcode( 'godevs_booking_form', 'godevs_booking_form_shortcode' );

/**
 * Shortcode: Proposal / Contact Form.
 *
 * Renders a project proposal form. On submission, sends an email to the
 * site admin with the proposal details. Does NOT create a post.
 *
 * Usage: [godevs_proposal_form]
 *
 * @return string HTML form.
 */
function godevs_proposal_form_shortcode(): string {
        ob_start();
        ?>
        <div class="godevs-form-wrap godevs-proposal-form-wrap" id="godevs-proposal-form">
                <form class="godevs-form" method="post" autocomplete="on" novalidate>
                        <?php wp_nonce_field( 'godevs_proposal_form', 'godevs_proposal_nonce' ); ?>
                        <input type="hidden" name="action" value="godevs_submit_proposal" />
                        <!-- Honeypot anti-spam field. -->
                        <div style="position:absolute;left:-9999px;width:1px;height:1px;overflow:hidden;" aria-hidden="true">
                                <label><?php esc_html_e( 'Leave this field empty', 'godevs-portfolio' ); ?>
                                        <input type="text" name="godevs_hp" tabindex="-1" autocomplete="off" />
                                </label>
                        </div>

                        <div class="godevs-form-row">
                                <div class="godevs-form-field">
                                        <label for="godevs-proposal-name"><?php esc_html_e( 'Your Name', 'godevs-portfolio' ); ?> <span class="required">*</span></label>
                                        <input type="text" id="godevs-proposal-name" name="proposal_name" required autocomplete="name" />
                                </div>
                                <div class="godevs-form-field">
                                        <label for="godevs-proposal-email"><?php esc_html_e( 'Email', 'godevs-portfolio' ); ?> <span class="required">*</span></label>
                                        <input type="email" id="godevs-proposal-email" name="proposal_email" required autocomplete="email" />
                                </div>
                        </div>

                        <div class="godevs-form-row">
                                <div class="godevs-form-field">
                                        <label for="godevs-proposal-company"><?php esc_html_e( 'Company / Organization', 'godevs-portfolio' ); ?></label>
                                        <input type="text" id="godevs-proposal-company" name="proposal_company" autocomplete="organization" />
                                </div>
                                <div class="godevs-form-field">
                                        <label for="godevs-proposal-phone"><?php esc_html_e( 'Phone / WhatsApp', 'godevs-portfolio' ); ?></label>
                                        <input type="tel" id="godevs-proposal-phone" name="proposal_phone" autocomplete="tel" />
                                </div>
                        </div>

                        <div class="godevs-form-row">
                                <div class="godevs-form-field">
                                        <label for="godevs-proposal-type"><?php esc_html_e( 'Project Type', 'godevs-portfolio' ); ?> <span class="required">*</span></label>
                                        <select id="godevs-proposal-type" name="proposal_type" required>
                                                <option value=""><?php esc_html_e( '— Select —', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( 'Website', 'godevs-portfolio' ); ?>"><?php esc_html_e( 'Website', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( 'Branding', 'godevs-portfolio' ); ?>"><?php esc_html_e( 'Branding', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( 'UI/UX Design', 'godevs-portfolio' ); ?>"><?php esc_html_e( 'UI/UX Design', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( 'Development', 'godevs-portfolio' ); ?>"><?php esc_html_e( 'Development', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( 'Photography', 'godevs-portfolio' ); ?>"><?php esc_html_e( 'Photography', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( 'Video / Film', 'godevs-portfolio' ); ?>"><?php esc_html_e( 'Video / Film', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( 'Architecture', 'godevs-portfolio' ); ?>"><?php esc_html_e( 'Architecture', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( 'Fashion / Creative', 'godevs-portfolio' ); ?>"><?php esc_html_e( 'Fashion / Creative', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( 'Consulting', 'godevs-portfolio' ); ?>"><?php esc_html_e( 'Consulting', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( 'Other', 'godevs-portfolio' ); ?>"><?php esc_html_e( 'Other', 'godevs-portfolio' ); ?></option>
                                        </select>
                                </div>
                                <div class="godevs-form-field">
                                        <label for="godevs-proposal-budget"><?php esc_html_e( 'Budget Range', 'godevs-portfolio' ); ?></label>
                                        <select id="godevs-proposal-budget" name="proposal_budget">
                                                <option value=""><?php esc_html_e( '— Select —', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( 'Under $5,000', 'godevs-portfolio' ); ?>"><?php esc_html_e( 'Under $5,000', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( '$5,000 — $15,000', 'godevs-portfolio' ); ?>"><?php esc_html_e( '$5,000 — $15,000', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( '$15,000 — $50,000', 'godevs-portfolio' ); ?>"><?php esc_html_e( '$15,000 — $50,000', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( '$50,000+', 'godevs-portfolio' ); ?>"><?php esc_html_e( '$50,000+', 'godevs-portfolio' ); ?></option>
                                        </select>
                                </div>
                        </div>

                        <div class="godevs-form-row">
                                <div class="godevs-form-field">
                                        <label for="godevs-proposal-timeline"><?php esc_html_e( 'Project Timeline', 'godevs-portfolio' ); ?></label>
                                        <select id="godevs-proposal-timeline" name="proposal_timeline">
                                                <option value=""><?php esc_html_e( '— Select —', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( 'ASAP', 'godevs-portfolio' ); ?>"><?php esc_html_e( 'ASAP', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( '1–3 months', 'godevs-portfolio' ); ?>"><?php esc_html_e( '1–3 months', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( '3–6 months', 'godevs-portfolio' ); ?>"><?php esc_html_e( '3–6 months', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( '6+ months', 'godevs-portfolio' ); ?>"><?php esc_html_e( '6+ months', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( 'Flexible', 'godevs-portfolio' ); ?>"><?php esc_html_e( 'Flexible', 'godevs-portfolio' ); ?></option>
                                        </select>
                                </div>
                                <div class="godevs-form-field">
                                        <label for="godevs-proposal-contact-method"><?php esc_html_e( 'Preferred Contact Method', 'godevs-portfolio' ); ?></label>
                                        <select id="godevs-proposal-contact-method" name="proposal_contact_method">
                                                <option value=""><?php esc_html_e( '— Select —', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( 'Email', 'godevs-portfolio' ); ?>"><?php esc_html_e( 'Email', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( 'Phone', 'godevs-portfolio' ); ?>"><?php esc_html_e( 'Phone', 'godevs-portfolio' ); ?></option>
                                                <option value="<?php esc_attr_e( 'WhatsApp', 'godevs-portfolio' ); ?>"><?php esc_html_e( 'WhatsApp', 'godevs-portfolio' ); ?></option>
                                        </select>
                                </div>
                        </div>

                        <div class="godevs-form-field">
                                <label for="godevs-proposal-services"><?php esc_html_e( 'Services Needed', 'godevs-portfolio' ); ?></label>
                                <input type="text" id="godevs-proposal-services" name="proposal_services" placeholder="<?php esc_attr_e( 'e.g. brand identity, website design, photography', 'godevs-portfolio' ); ?>" />
                        </div>

                        <div class="godevs-form-field">
                                <label for="godevs-proposal-url"><?php esc_html_e( 'Website / Reference URL', 'godevs-portfolio' ); ?></label>
                                <input type="url" id="godevs-proposal-url" name="proposal_url" placeholder="https://" />
                        </div>

                        <div class="godevs-form-field">
                                <label for="godevs-proposal-message"><?php esc_html_e( 'Project Description', 'godevs-portfolio' ); ?> <span class="required">*</span></label>
                                <textarea id="godevs-proposal-message" name="proposal_message" rows="6" required placeholder="<?php esc_attr_e( 'Tell us about your project — goals, scope, anything that helps us understand what you need.', 'godevs-portfolio' ); ?>"></textarea>
                        </div>

                        <button type="submit" class="godevs-form-submit wp-element-button">
                                <?php esc_html_e( 'Send Proposal', 'godevs-portfolio' ); ?>
                        </button>

                        <div class="godevs-form-message" role="alert" aria-live="polite"></div>
                </form>
        </div>
        <?php
        return ob_get_clean();
}
add_shortcode( 'godevs_proposal_form', 'godevs_proposal_form_shortcode' );

/**
 * AJAX handler: Submit booking form.
 *
 * Creates a `godevs_booking` post with status `pending` and sends an
 * email notification to the site admin.
 */
function godevs_ajax_submit_booking(): void {
        check_ajax_referer( 'godevs_booking_form', 'godevs_booking_nonce' );

        // Honeypot anti-spam check — if filled, silently fail.
        // Note: we intentionally do NOT read or use the honeypot value — we only
        // check whether the field was filled by a bot. No sanitization needed.
        if ( isset( $_POST['godevs_hp'] ) && '' !== wp_unslash( $_POST['godevs_hp'] ) ) {
                wp_send_json_error( array( 'message' => __( 'Spam detected.', 'godevs-portfolio' ) ), 400 );
        }

        // Sanitize and validate input.
        // phpcs:disable WordPress.Security.NonceVerification.Recommended -- verified above via check_ajax_referer().
        $name    = isset( $_POST['booking_name'] ) ? sanitize_text_field( wp_unslash( $_POST['booking_name'] ) ) : '';
        $email   = isset( $_POST['booking_email'] ) ? sanitize_email( wp_unslash( $_POST['booking_email'] ) ) : '';
        $phone   = isset( $_POST['booking_phone'] ) ? sanitize_text_field( wp_unslash( $_POST['booking_phone'] ) ) : '';
        $service = isset( $_POST['booking_service'] ) ? sanitize_text_field( wp_unslash( $_POST['booking_service'] ) ) : '';
        $date    = isset( $_POST['booking_date'] ) ? sanitize_text_field( wp_unslash( $_POST['booking_date'] ) ) : '';
        $time    = isset( $_POST['booking_time'] ) ? sanitize_text_field( wp_unslash( $_POST['booking_time'] ) ) : '';
        $message = isset( $_POST['booking_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['booking_message'] ) ) : '';
        // phpcs:enable WordPress.Security.NonceVerification.Recommended.

        // Validate required fields.
        if ( empty( $name ) || empty( $email ) ) {
                wp_send_json_error( array( 'message' => __( 'Please provide your name and email.', 'godevs-portfolio' ) ), 400 );
        }
        if ( ! is_email( $email ) ) {
                wp_send_json_error( array( 'message' => __( 'Please provide a valid email address.', 'godevs-portfolio' ) ), 400 );
        }

        // Create the booking post.
        $post_id = wp_insert_post(
                array(
                        'post_type'   => 'godevs_booking',
                        'post_title'  => sprintf( '%s — %s', $name, $service ?: __( 'General Booking', 'godevs-portfolio' ) ),
                        'post_status' => 'pending',
                        'post_content' => $message,
                ),
                true
        );

        if ( is_wp_error( $post_id ) ) {
                wp_send_json_error( array( 'message' => __( 'Could not create booking. Please try again.', 'godevs-portfolio' ) ), 500 );
        }

        // Save meta fields.
        update_post_meta( $post_id, '_godevs_booking_name', $name );
        update_post_meta( $post_id, '_godevs_booking_email', $email );
        update_post_meta( $post_id, '_godevs_booking_phone', $phone );
        update_post_meta( $post_id, '_godevs_booking_service', $service );
        update_post_meta( $post_id, '_godevs_booking_date', $date );
        update_post_meta( $post_id, '_godevs_booking_time', $time );
        update_post_meta( $post_id, '_godevs_booking_message', $message );
        update_post_meta( $post_id, '_godevs_booking_status', 'pending' );

        // Send admin notification email.
        $admin_email = get_bloginfo( 'admin_email' );
        $site_name   = wp_specialchars_decode( get_bloginfo( 'name' ), ENT_QUOTES );
        $subject     = sprintf( '[%s] New Booking: %s', $site_name, $name );

        $email_body  = __( "New booking request received:\n\n", 'godevs-portfolio' );
        $email_body .= sprintf( __( "Name: %s\n", 'godevs-portfolio' ), $name );
        $email_body .= sprintf( __( "Email: %s\n", 'godevs-portfolio' ), $email );
        if ( $phone ) {
                $email_body .= sprintf( __( "Phone: %s\n", 'godevs-portfolio' ), $phone );
        }
        if ( $service ) {
                $email_body .= sprintf( __( "Service: %s\n", 'godevs-portfolio' ), $service );
        }
        if ( $date ) {
                $email_body .= sprintf( __( "Preferred Date: %s\n", 'godevs-portfolio' ), $date );
        }
        if ( $time ) {
                $email_body .= sprintf( __( "Preferred Time: %s\n", 'godevs-portfolio' ), $time );
        }
        if ( $message ) {
                $email_body .= sprintf( __( "\nMessage:\n%s\n", 'godevs-portfolio' ), $message );
        }
        $email_body .= sprintf( "\n" . __( "Manage booking: %s\n", 'godevs-portfolio' ), admin_url( 'post.php?post=' . $post_id . '&action=edit' ) );

        // Sanitize name for email header — strip <, >, newlines to prevent header injection.
        $reply_name = str_replace( array( '<', '>', "\r", "\n", "%0d", "%0a" ), '', $name );

        $headers = array(
                'From'     => $site_name . ' <' . $admin_email . '>',
                'Reply-To' => $reply_name . ' <' . $email . '>',
        );

        wp_mail( $admin_email, $subject, $email_body, $headers );

        wp_send_json_success( array( 'message' => __( 'Booking request sent! We\'ll get back to you shortly.', 'godevs-portfolio' ) ) );
}
add_action( 'wp_ajax_godevs_submit_booking', 'godevs_ajax_submit_booking' );
add_action( 'wp_ajax_nopriv_godevs_submit_booking', 'godevs_ajax_submit_booking' );

/**
 * AJAX handler: Submit proposal form.
 *
 * Stores the proposal as a private `godevs_proposal` post (visible only to
 * administrators) and sends an email notification to the site admin.
 * Rate-limited per IP address.
 */
function godevs_ajax_submit_proposal(): void {
        check_ajax_referer( 'godevs_proposal_form', 'godevs_proposal_nonce' );

        // Honeypot anti-spam check.
        // We intentionally do NOT read or use the honeypot value — we only check
        // whether the field was filled by a bot. No sanitization needed.
        if ( isset( $_POST['godevs_hp'] ) && '' !== wp_unslash( $_POST['godevs_hp'] ) ) {
                wp_send_json_error( array( 'message' => __( 'Spam detected.', 'godevs-portfolio' ) ), 400 );
        }

        // Rate limiting — max 5 submissions per IP per hour.
        $ip  = isset( $_SERVER['REMOTE_ADDR'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : 'unknown';
        $key = 'godevs_proposal_rl_' . md5( $ip );
        $count = (int) get_transient( $key );
        if ( $count >= 5 ) {
                wp_send_json_error( array( 'message' => __( 'Too many submissions. Please try again later.', 'godevs-portfolio' ) ), 429 );
        }

        // Sanitize and validate input.
        // phpcs:disable WordPress.Security.NonceVerification.Recommended -- verified above via check_ajax_referer().
        $name     = isset( $_POST['proposal_name'] ) ? sanitize_text_field( wp_unslash( $_POST['proposal_name'] ) ) : '';
        $email    = isset( $_POST['proposal_email'] ) ? sanitize_email( wp_unslash( $_POST['proposal_email'] ) ) : '';
        $company  = isset( $_POST['proposal_company'] ) ? sanitize_text_field( wp_unslash( $_POST['proposal_company'] ) ) : '';
        $phone    = isset( $_POST['proposal_phone'] ) ? sanitize_text_field( wp_unslash( $_POST['proposal_phone'] ) ) : '';
        $type     = isset( $_POST['proposal_type'] ) ? sanitize_text_field( wp_unslash( $_POST['proposal_type'] ) ) : '';
        $budget   = isset( $_POST['proposal_budget'] ) ? sanitize_text_field( wp_unslash( $_POST['proposal_budget'] ) ) : '';
        $timeline = isset( $_POST['proposal_timeline'] ) ? sanitize_text_field( wp_unslash( $_POST['proposal_timeline'] ) ) : '';
        $services = isset( $_POST['proposal_services'] ) ? sanitize_text_field( wp_unslash( $_POST['proposal_services'] ) ) : '';
        $url      = isset( $_POST['proposal_url'] ) ? esc_url_raw( wp_unslash( $_POST['proposal_url'] ) ) : '';
        $method   = isset( $_POST['proposal_contact_method'] ) ? sanitize_text_field( wp_unslash( $_POST['proposal_contact_method'] ) ) : '';
        $message  = isset( $_POST['proposal_message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['proposal_message'] ) ) : '';
        // phpcs:enable WordPress.Security.NonceVerification.Recommended.

        // Validate required fields.
        if ( empty( $name ) || empty( $email ) || empty( $type ) || empty( $message ) ) {
                wp_send_json_error( array( 'message' => __( 'Please fill in all required fields (name, email, project type and description).', 'godevs-portfolio' ) ), 400 );
        }
        if ( ! is_email( $email ) ) {
                wp_send_json_error( array( 'message' => __( 'Please provide a valid email address.', 'godevs-portfolio' ) ), 400 );
        }
        if ( '' !== $url && ! wp_http_validate_url( $url ) ) {
                wp_send_json_error( array( 'message' => __( 'The reference URL is not valid.', 'godevs-portfolio' ) ), 400 );
        }

        // Store the proposal as a private post (admins only).
        $post_id = wp_insert_post(
                array(
                        'post_type'    => 'godevs_proposal',
                        'post_title'   => sprintf( '%s — %s', $name, $type ),
                        'post_content' => $message,
                        'post_status'  => 'private',
                ),
                true
        );

        if ( is_wp_error( $post_id ) ) {
                wp_send_json_error( array( 'message' => __( 'Could not submit your proposal. Please try again.', 'godevs-portfolio' ) ), 500 );
        }

        $meta_fields = array(
                '_godevs_proposal_name'           => $name,
                '_godevs_proposal_email'          => $email,
                '_godevs_proposal_company'        => $company,
                '_godevs_proposal_phone'          => $phone,
                '_godevs_proposal_type'           => $type,
                '_godevs_proposal_budget'         => $budget,
                '_godevs_proposal_timeline'       => $timeline,
                '_godevs_proposal_services'       => $services,
                '_godevs_proposal_url'            => $url,
                '_godevs_proposal_contact_method' => $method,
                '_godevs_proposal_message'        => $message,
                '_godevs_proposal_status'         => 'new',
        );
        foreach ( $meta_fields as $k => $v ) {
                update_post_meta( $post_id, $k, $v );
        }

        set_transient( $key, $count + 1, HOUR_IN_SECONDS );

        // Send admin email — a failed mail (e.g. no mail server) is not fatal:
        // the proposal is stored and visible in the admin.
        $admin_email = get_bloginfo( 'admin_email' );
        $site_name   = wp_specialchars_decode( get_bloginfo( 'name' ), ENT_QUOTES );
        $subject     = sprintf( '[%s] New Proposal: %s (%s)', $site_name, $name, $type );

        $email_body  = __( "New project proposal received:\n\n", 'godevs-portfolio' );
        $email_body .= sprintf( __( "Name: %s\n", 'godevs-portfolio' ), $name );
        $email_body .= sprintf( __( "Email: %s\n", 'godevs-portfolio' ), $email );
        if ( $company ) {
                $email_body .= sprintf( __( "Company: %s\n", 'godevs-portfolio' ), $company );
        }
        if ( $phone ) {
                $email_body .= sprintf( __( "Phone / WhatsApp: %s\n", 'godevs-portfolio' ), $phone );
        }
        if ( $type ) {
                $email_body .= sprintf( __( "Project Type: %s\n", 'godevs-portfolio' ), $type );
        }
        if ( $budget ) {
                $email_body .= sprintf( __( "Budget: %s\n", 'godevs-portfolio' ), $budget );
        }
        if ( $timeline ) {
                $email_body .= sprintf( __( "Timeline: %s\n", 'godevs-portfolio' ), $timeline );
        }
        if ( $services ) {
                $email_body .= sprintf( __( "Services Needed: %s\n", 'godevs-portfolio' ), $services );
        }
        if ( $url ) {
                $email_body .= sprintf( __( "Reference URL: %s\n", 'godevs-portfolio' ), $url );
        }
        if ( $method ) {
                $email_body .= sprintf( __( "Preferred Contact: %s\n", 'godevs-portfolio' ), $method );
        }
        $email_body .= sprintf( "\n" . __( "Project Description:\n%s\n", 'godevs-portfolio' ), $message );
        $email_body .= sprintf( "\n" . __( "Manage proposal: %s\n", 'godevs-portfolio' ), admin_url( 'post.php?post=' . $post_id . '&action=edit' ) );

        // Sanitize name for email header — strip <, >, newlines to prevent header injection.
        $reply_name = str_replace( array( '<', '>', "\r", "\n", "%0d", "%0a" ), '', $name );

        $headers = array(
                'From'     => $site_name . ' <' . $admin_email . '>',
                'Reply-To' => $reply_name . ' <' . $email . '>',
        );

        wp_mail( $admin_email, $subject, $email_body, $headers );

        wp_send_json_success( array(
                'message' => __( 'Thank you. Your project inquiry has been received. We\'ll review your proposal and get back to you shortly.', 'godevs-portfolio' ),
        ) );
}
add_action( 'wp_ajax_godevs_submit_proposal', 'godevs_ajax_submit_proposal' );
add_action( 'wp_ajax_nopriv_godevs_submit_proposal', 'godevs_ajax_submit_proposal' );

/**
 * Admin columns for the Proposals list table.
 *
 * Shows date, name, email, project type, budget and workflow status so the
 * admin can triage inquiries without opening each one.
 *
 * @since 1.1.0
 */
function godevs_proposal_admin_columns( array $columns ): array {
        $new = array();
        foreach ( $columns as $key => $label ) {
                if ( 'title' === $key ) {
                        $new['godevs_proposal_name']   = __( 'Name', 'godevs-portfolio' );
                        $new['godevs_proposal_email']  = __( 'Email', 'godevs-portfolio' );
                        $new['godevs_proposal_type']   = __( 'Project Type', 'godevs-portfolio' );
                        $new['godevs_proposal_budget'] = __( 'Budget', 'godevs-portfolio' );
                        $new['godevs_proposal_status'] = __( 'Status', 'godevs-portfolio' );
                }
                if ( ! in_array( $key, array( 'comments', 'author' ), true ) ) {
                        $new[ $key ] = $label;
                }
        }
        return $new;
}
add_filter( 'manage_godevs_proposal_posts_columns', 'godevs_proposal_admin_columns' );

/**
 * Render proposal admin column content.
 *
 * @since 1.1.0
 */
function godevs_proposal_admin_column_content( string $column, int $post_id ): void {
        $meta_key = '_godevs_proposal_' . str_replace( 'godevs_proposal_', '', $column );
        $value    = get_post_meta( $post_id, $meta_key, true );
        if ( 'godevs_proposal_status' === $column ) {
                $statuses = godevs_portfolio_proposal_statuses();
                $current  = $value ?: 'new';
                echo '<span class="godevs-status godevs-status-' . esc_attr( $current ) . '">' . esc_html( $statuses[ $current ] ?? ucfirst( $current ) ) . '</span>';
                return;
        }
        echo esc_html( $value );
}
add_action( 'manage_godevs_proposal_posts_custom_column', 'godevs_proposal_admin_column_content', 10, 2 );

/**
 * Proposal workflow statuses.
 *
 * @since 1.1.0
 * @return array<string,string> status slug => label.
 */
function godevs_portfolio_proposal_statuses(): array {
        return array(
                'new'         => __( 'New', 'godevs-portfolio' ),
                'contacted'   => __( 'Contacted', 'godevs-portfolio' ),
                'in-progress' => __( 'In Progress', 'godevs-portfolio' ),
                'completed'   => __( 'Completed', 'godevs-portfolio' ),
                'archived'    => __( 'Archived', 'godevs-portfolio' ),
        );
}

/**
 * Status meta box on the proposal edit screen — a lightweight select so the
 * workflow can be managed without a full CRM UI.
 *
 * @since 1.1.0
 */
function godevs_proposal_add_status_metabox(): void {
        add_meta_box(
                'godevs_proposal_status',
                __( 'Proposal Status', 'godevs-portfolio' ),
                'godevs_proposal_status_metabox_html',
                'godevs_proposal',
                'side',
                'high'
        );
}
add_action( 'add_meta_boxes', 'godevs_proposal_add_status_metabox' );

/**
 * Render the status meta box.
 *
 * @since 1.1.0
 */
function godevs_proposal_status_metabox_html( WP_Post $post ): void {
        wp_nonce_field( 'godevs_proposal_status_save', 'godevs_proposal_status_nonce' );
        $current   = get_post_meta( $post->ID, '_godevs_proposal_status', true ) ?: 'new';
        $statuses  = godevs_portfolio_proposal_statuses();
        echo '<label class="screen-reader-text" for="godevs_proposal_status">' . esc_html__( 'Proposal status', 'godevs-portfolio' ) . '</label>';
        echo '<select name="godevs_proposal_status" id="godevs_proposal_status" style="width:100%">';
        foreach ( $statuses as $slug => $label ) {
                echo '<option value="' . esc_attr( $slug ) . '"' . selected( $current, $slug, false ) . '>' . esc_html( $label ) . '</option>';
        }
        echo '</select>';
}

/**
 * Save the status meta box.
 *
 * @since 1.1.0
 */
function godevs_proposal_save_status( int $post_id ): void {
        if ( ! isset( $_POST['godevs_proposal_status_nonce'] ) || ! wp_verify_nonce( sanitize_key( wp_unslash( $_POST['godevs_proposal_status_nonce'] ) ), 'godevs_proposal_status_save' ) ) {
                return;
        }
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
                return;
        }
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
                return;
        }
        $status    = isset( $_POST['godevs_proposal_status'] ) ? sanitize_key( wp_unslash( $_POST['godevs_proposal_status'] ) ) : 'new';
        $statuses  = godevs_portfolio_proposal_statuses();
        if ( ! isset( $statuses[ $status ] ) ) {
                $status = 'new';
        }
        update_post_meta( $post_id, '_godevs_proposal_status', $status );
}
add_action( 'save_post_godevs_proposal', 'godevs_proposal_save_status' );
