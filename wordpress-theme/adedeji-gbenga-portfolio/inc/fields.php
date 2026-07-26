<?php
/**
 * Meta Box field registration for the "Portfolio Content" settings page.
 * All homepage + resume content is editable from wp-admin once the
 * free Meta Box plugin is active — no code edits required after setup.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

define( 'AGP_SETTINGS_PAGE', 'portfolio-content' );

add_filter( 'mb_settings_pages', 'agp_settings_page' );
function agp_settings_page( $settings_pages ) {
    $settings_pages[] = array(
        'id'         => AGP_SETTINGS_PAGE,
        'menu_title' => 'Portfolio Content',
        'page_title' => 'Portfolio Content',
        'icon_url'   => 'dashicons-id-alt',
        'position'   => 3,
        'columns'    => 1,
    );
    return $settings_pages;
}

add_filter( 'rwmb_meta_boxes', 'agp_register_fields' );
function agp_register_fields( $meta_boxes ) {

    $meta_boxes[] = array(
        'title'          => 'General',
        'id'             => 'agp-general',
        'settings_pages' => array( AGP_SETTINGS_PAGE ),
        'fields'         => array(
            array( 'id' => 'full_name', 'name' => 'Full Name', 'type' => 'text' ),
            array( 'id' => 'tagline', 'name' => 'Tagline / Role', 'type' => 'text', 'desc' => 'Shown under your name in the hero card and site logo area.' ),
            array( 'id' => 'hero_kicker', 'name' => 'Hero Badge Text', 'type' => 'text', 'desc' => 'Small pill text above the headline, e.g. "Available for freelance & contract work".' ),
            array( 'id' => 'hero_intro', 'name' => 'Hero Headline Prefix', 'type' => 'text', 'desc' => 'Text before your name in the big headline.' ),
            array( 'id' => 'hero_tags', 'name' => 'Hero Card Tags', 'type' => 'text', 'desc' => 'Comma-separated, e.g. React.js, PHP, WordPress' ),
            array( 'id' => 'profile_photo', 'name' => 'Profile Photo', 'type' => 'single_image' ),
            array( 'id' => 'about_bio', 'name' => 'About Bio', 'type' => 'wysiwyg', 'options' => array( 'media_buttons' => false, 'teeny' => true ) ),
        ),
    );

    $meta_boxes[] = array(
        'title'          => 'Hero Stats',
        'id'             => 'agp-hero-stats',
        'settings_pages' => array( AGP_SETTINGS_PAGE ),
        'fields'         => array(
            array(
                'id'          => 'hero_stats',
                'type'        => 'group',
                'clone'       => true,
                'sort_clone'  => true,
                'add_button'  => 'Add Stat',
                'desc'        => 'The 4 numbers shown in the hero section.',
                'fields'      => array(
                    array( 'id' => 'number', 'name' => 'Number', 'type' => 'text', 'width' => '30%' ),
                    array( 'id' => 'suffix', 'name' => 'Suffix', 'type' => 'text', 'width' => '20%', 'desc' => 'e.g. + or K+' ),
                    array( 'id' => 'label', 'name' => 'Label', 'type' => 'text', 'width' => '50%' ),
                ),
            ),
        ),
    );

    $meta_boxes[] = array(
        'title'          => 'About Facts',
        'id'             => 'agp-about-facts',
        'settings_pages' => array( AGP_SETTINGS_PAGE ),
        'fields'         => array(
            array(
                'id'          => 'about_facts',
                'type'        => 'group',
                'clone'       => true,
                'sort_clone'  => true,
                'add_button'  => 'Add Fact',
                'desc'        => 'The 4 fact cards shown next to the About text.',
                'fields'      => array(
                    array( 'id' => 'number', 'name' => 'Number', 'type' => 'text', 'width' => '30%' ),
                    array( 'id' => 'suffix', 'name' => 'Suffix', 'type' => 'text', 'width' => '20%', 'desc' => 'e.g. + or K+' ),
                    array( 'id' => 'label', 'name' => 'Label', 'type' => 'text', 'width' => '50%' ),
                ),
            ),
        ),
    );

    $meta_boxes[] = array(
        'title'          => 'Skills',
        'id'             => 'agp-skills',
        'settings_pages' => array( AGP_SETTINGS_PAGE ),
        'fields'         => array(
            array(
                'id'         => 'skills',
                'type'       => 'group',
                'clone'      => true,
                'sort_clone' => true,
                'add_button' => 'Add Skill Category',
                'fields'     => array(
                    array( 'id' => 'icon', 'name' => 'Icon (emoji or symbol)', 'type' => 'text', 'width' => '15%' ),
                    array( 'id' => 'title', 'name' => 'Category Title', 'type' => 'text', 'width' => '35%' ),
                    array( 'id' => 'tags', 'name' => 'Tags', 'type' => 'text', 'width' => '50%', 'desc' => 'Comma-separated' ),
                ),
            ),
        ),
    );

    $meta_boxes[] = array(
        'title'          => 'Work Experience',
        'id'             => 'agp-experience',
        'settings_pages' => array( AGP_SETTINGS_PAGE ),
        'fields'         => array(
            array(
                'id'         => 'experience',
                'type'       => 'group',
                'clone'      => true,
                'sort_clone' => true,
                'add_button' => 'Add Experience Entry',
                'fields'     => array(
                    array( 'id' => 'role', 'name' => 'Role / Title', 'type' => 'text' ),
                    array( 'id' => 'org', 'name' => 'Organization', 'type' => 'text' ),
                    array( 'id' => 'date', 'name' => 'Date Range', 'type' => 'text', 'desc' => 'e.g. Jan 2025 — Present' ),
                    array( 'id' => 'description', 'name' => 'Description', 'type' => 'textarea' ),
                ),
            ),
        ),
    );

    $meta_boxes[] = array(
        'title'          => 'Projects',
        'id'             => 'agp-projects',
        'settings_pages' => array( AGP_SETTINGS_PAGE ),
        'fields'         => array(
            array(
                'id'         => 'projects',
                'type'       => 'group',
                'clone'      => true,
                'sort_clone' => true,
                'add_button' => 'Add Project',
                'fields'     => array(
                    array( 'id' => 'icon', 'name' => 'Icon (emoji)', 'type' => 'text', 'width' => '15%' ),
                    array( 'id' => 'title', 'name' => 'Project Title', 'type' => 'text', 'width' => '35%' ),
                    array( 'id' => 'description', 'name' => 'Description', 'type' => 'textarea', 'width' => '50%' ),
                    array( 'id' => 'tags', 'name' => 'Tags', 'type' => 'text', 'desc' => 'Comma-separated' ),
                ),
            ),
        ),
    );

    $meta_boxes[] = array(
        'title'          => 'Contact Info',
        'id'             => 'agp-contact',
        'settings_pages' => array( AGP_SETTINGS_PAGE ),
        'fields'         => array(
            array( 'id' => 'contact_email', 'name' => 'Email', 'type' => 'email' ),
            array( 'id' => 'contact_whatsapp_display', 'name' => 'WhatsApp (display)', 'type' => 'text', 'desc' => 'How the number is shown, e.g. +234 813 197 7893' ),
            array( 'id' => 'contact_whatsapp_number', 'name' => 'WhatsApp (digits only)', 'type' => 'text', 'desc' => 'No + or spaces, e.g. 2348131977893. Used for the wa.me link.' ),
            array( 'id' => 'contact_github_url', 'name' => 'GitHub URL', 'type' => 'url' ),
            array( 'id' => 'contact_github_display', 'name' => 'GitHub (display text)', 'type' => 'text', 'desc' => 'e.g. github.com/yourname' ),
            array( 'id' => 'contact_linkedin_url', 'name' => 'LinkedIn URL', 'type' => 'url' ),
        ),
    );

    $meta_boxes[] = array(
        'title'          => 'Resume Page',
        'id'             => 'agp-resume',
        'settings_pages' => array( AGP_SETTINGS_PAGE ),
        'fields'         => array(
            array( 'id' => 'resume_summary', 'name' => 'Summary', 'type' => 'textarea', 'desc' => 'Shown at the top of the resume page and PDF.' ),
            array( 'id' => 'resume_achievements', 'name' => 'Key Achievements', 'type' => 'textarea', 'desc' => 'Shown at the bottom of the resume page.' ),
        ),
    );

    return $meta_boxes;
}

/**
 * Read a Portfolio Content field. Falls back to the real site content
 * (agp_defaults()) whenever Meta Box isn't active yet, or a field
 * hasn't been filled in / saved empty — the site must never render
 * blank just because the plugin/editor state isn't ready.
 */
function agp_field( $field_id ) {
    $value = '';
    if ( function_exists( 'rwmb_meta' ) ) {
        $value = rwmb_meta( $field_id, array( 'object_type' => 'setting' ), AGP_SETTINGS_PAGE );
    }
    if ( empty( $value ) ) {
        $defaults = agp_defaults();
        $value = isset( $defaults[ $field_id ] ) ? $defaults[ $field_id ] : '';
    }
    return $value;
}

function agp_tags_to_array( $csv ) {
    if ( empty( $csv ) ) return array();
    return array_filter( array_map( 'trim', explode( ',', $csv ) ) );
}
