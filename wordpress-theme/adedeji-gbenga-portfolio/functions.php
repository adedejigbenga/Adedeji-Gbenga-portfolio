<?php
if ( ! defined( 'ABSPATH' ) ) exit;

require_once get_template_directory() . '/inc/defaults.php';
require_once get_template_directory() . '/inc/fields.php';
require_once get_template_directory() . '/inc/seed-defaults.php';

function agp_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption' ) );
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'adedeji-portfolio' ),
    ) );
}
add_action( 'after_setup_theme', 'agp_setup' );

function agp_scripts() {
    wp_enqueue_style( 'agp-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap', array(), null );
    wp_enqueue_style( 'agp-style', get_stylesheet_uri(), array( 'agp-google-fonts' ), '1.0' );
    wp_enqueue_script( 'agp-script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true );
    wp_localize_script( 'agp-script', 'AGP_DATA', array(
        'contactEmail' => agp_field( 'contact_email' ) ?: 'Adedejigbenga56@gmail.com',
    ) );
}
add_action( 'wp_enqueue_scripts', 'agp_scripts' );

/**
 * Resolve the published "Resume" page, if one exists.
 * Create a Page with slug "resume" and assign the "Resume Page" template
 * to power the Resume links in the nav and footer.
 */
function agp_resume_page() {
    static $page = null;
    if ( $page === null ) {
        $page = get_page_by_path( 'resume' );
        if ( ! $page ) $page = false;
    }
    return $page;
}

add_action( 'admin_notices', 'agp_meta_box_notice' );
function agp_meta_box_notice() {
    if ( function_exists( 'rwmb_meta' ) ) return;
    if ( ! current_user_can( 'activate_plugins' ) ) return;
    echo '<div class="notice notice-warning"><p><strong>Portfolio theme:</strong> activate the <strong>Meta Box</strong> plugin (Plugins → Installed Plugins) to unlock the "Portfolio Content" editor in the sidebar.</p></div>';
}
