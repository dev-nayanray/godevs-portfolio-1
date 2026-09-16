/**
 * GoDevs Portfolio — CPT Manager admin page JS.
 *
 * Handles interactions on the Content Manager admin page
 * (Appearance → Content Manager):
 *
 *   - Delegated confirmation dialogs: any element carrying a
 *     `data-confirm` attribute will prompt the user with `confirm()`
 *     before navigating. If the user cancels, the default action is
 *     prevented. This replaces the previous inline `onclick="return
 *     confirm(...)"` attribute on the trash link (P1.16 — remove
 *     inline JS).
 *
 * The script is enqueued by `godevs_cpt_admin_enqueue_styles()` in
 * inc/cpt-admin.php on the `appearance_page_godevs-portfolio-cpt-manager`
 * admin screen only.
 *
 * @package GoDevs_Portfolio
 * @since   1.5.0
 */

document.addEventListener( 'DOMContentLoaded', function () {
        var confirmables = document.querySelectorAll( '[data-confirm]' );

        confirmables.forEach( function ( el ) {
                el.addEventListener( 'click', function ( e ) {
                        var message = el.getAttribute( 'data-confirm' );
                        if ( message && ! window.confirm( message ) ) {
                                e.preventDefault();
                                e.stopPropagation();
                        }
                } );
        } );
} );
