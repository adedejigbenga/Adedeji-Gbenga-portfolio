<?php
/**
 * One-time seed: populates the Portfolio Content settings page with the
 * current site copy, so the dashboard opens already filled in instead
 * of blank. Runs once (guarded by the agp_content_seeded_v1 option).
 * Not load-bearing for the site itself — agp_field() already falls
 * back to agp_defaults() on its own — this is purely so the admin
 * editor has something to show/edit instead of empty inputs.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'init', 'agp_seed_defaults' );
function agp_seed_defaults() {
    if ( get_option( 'agp_content_seeded_v1' ) ) return;
    if ( ! function_exists( 'rwmb_meta' ) ) return; // wait until Meta Box is active

    $existing = get_option( AGP_SETTINGS_PAGE, array() );
    if ( ! is_array( $existing ) ) $existing = array();
    update_option( AGP_SETTINGS_PAGE, array_merge( agp_defaults(), $existing ) );
    update_option( 'agp_content_seeded_v1', 1 );
}
