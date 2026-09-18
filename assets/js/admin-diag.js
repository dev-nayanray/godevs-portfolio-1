/**
 * GoDevs Portfolio - Diagnostic Admin Notice dismissal.
 *
 * Listens for clicks on the dismiss button of the
 * `.godevs-diag-notice` admin notice and fires an AJAX request to
 * record the dismissal. All configuration (AJAX URL, nonce, and any
 * future i18n strings) is injected via the `GODEVS_DIAG` global object,
 * which is localized by `godevs_portfolio_enqueue_admin_diag_script()`
 * in functions.php.
 *
 * Replaces the previous inline `<script>` block that lived inside
 * `godevs_portfolio_diagnostic_notice()` (P1.16 - remove inline JS).
 *
 * @package GoDevs_Portfolio
 * @since   1.5.0
 */

( function () {
        'use strict';

        document.addEventListener( 'DOMContentLoaded', function () {
                if ( typeof GODEVS_DIAG === 'undefined' ) {
                        return;
                }

                var notice = document.querySelector( '.godevs-diag-notice .notice-dismiss' );

                if ( ! notice ) {
                        // Fall back to listening on the notice container so the
                        // click handler still fires even if WordPress renders
                        // the dismiss button with a slightly different DOM.
                        var container = document.querySelector( '.godevs-diag-notice' );
                        if ( ! container ) {
                                return;
                        }
                        container.addEventListener( 'click', function ( e ) {
                                if ( e.target && e.target.classList.contains( 'notice-dismiss' ) ) {
                                        sendDismissal();
                                }
                        } );
                        return;
                }

                notice.addEventListener( 'click', sendDismissal );
        } );

        /**
         * Fire the AJAX request that records the dismissal.
         */
        function sendDismissal() {
                if ( typeof GODEVS_DIAG === 'undefined' || ! GODEVS_DIAG.ajaxUrl || ! GODEVS_DIAG.nonce ) {
                        return;
                }

                var body =
                        'action=godevs_portfolio_dismiss_diag' +
                        '&_ajax_nonce=' + encodeURIComponent( GODEVS_DIAG.nonce );

                fetch( GODEVS_DIAG.ajaxUrl, {
                        method: 'POST',
                        credentials: 'same-origin',
                        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                        body: body
                } ).catch( function () {
                        // Silent failure - the notice will simply reappear next
                        // page load, which is the safe default.
                } );
        }
} )();
