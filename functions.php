<?php
// Theme setup
function mouhimen_portfolio_setup() {
    // Add support for automatic feed links
    add_theme_support('automatic-feed-links');

    // Add support for title tag
    add_theme_support('title-tag');

    // Add support for post thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mouhimen-portfolio'),
    ));
}

// Enqueue styles and scripts
function mouhimen_portfolio_enqueue_scripts() {
    // Enqueue Tailwind CSS
    wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/assets/css/tailwind.css');

    // Enqueue daisyUI
    wp_enqueue_style('daisyui', 'https://cdn.jsdelivr.net/npm/daisyui@5/themes.css');

    // Enqueue main JavaScript file
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}

// Hooking up the functions
add_action('after_setup_theme', 'mouhimen_portfolio_setup');
add_action('wp_enqueue_scripts', 'mouhimen_portfolio_enqueue_scripts');

// Register Custom Post Types for Skills, Experience, and Projects

function mouhimen_register_custom_post_types() {
    // Skills Post Type
    $labels = array(
        'name'                  => _x('Skills', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Skill', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Skills', 'text_domain'),
        'name_admin_bar'        => __('Skill', 'text_domain'),
        'archives'              => __('Skill Archives', 'text_domain'),
        'attributes'            => __('Skill Attributes', 'text_domain'),
        'parent_item_colon'     => __('Parent Skill:', 'text_domain'),
        'all_items'             => __('All Skills', 'text_domain'),
        'add_new_item'          => __('Add New Skill', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'new_item'              => __('New Skill', 'text_domain'),
        'edit_item'             => __('Edit Skill', 'text_domain'),
        'update_item'           => __('Update Skill', 'text_domain'),
        'view_item'             => __('View Skill', 'text_domain'),
        'view_items'            => __('View Skills', 'text_domain'),
        'search_items'          => __('Search Skills', 'text_domain'),
        'not_found'             => __('Not found', 'text_domain'),
        'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
    );

    $args = array(
        'label'                 => __('Skill', 'text_domain'),
        'description'           => __('Post Type for Skills', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );

    register_post_type('skills', $args);

    // Experience Post Type
    $labels = array(
        'name'                  => _x('Experience', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Experience', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Experience', 'text_domain'),
        'name_admin_bar'        => __('Experience', 'text_domain'),
        'archives'              => __('Experience Archives', 'text_domain'),
        'attributes'            => __('Experience Attributes', 'text_domain'),
        'parent_item_colon'     => __('Parent Experience:', 'text_domain'),
        'all_items'             => __('All Experience', 'text_domain'),
        'add_new_item'          => __('Add New Experience', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'new_item'              => __('New Experience', 'text_domain'),
        'edit_item'             => __('Edit Experience', 'text_domain'),
        'update_item'           => __('Update Experience', 'text_domain'),
        'view_item'             => __('View Experience', 'text_domain'),
        'view_items'            => __('View Experience', 'text_domain'),
        'search_items'          => __('Search Experience', 'text_domain'),
        'not_found'             => __('Not found', 'text_domain'),
        'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
    );

    $args = array(
        'label'                 => __('Experience', 'text_domain'),
        'description'           => __('Post Type for Experience', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );

   register_post_type('experience', $args);

    // Projects Post Type
    $labels = array(
        'name'                  => _x('Projects', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Project', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Projects', 'text_domain'),
        'name_admin_bar'        => __('Project', 'text_domain'),
        'archives'              => __('Project Archives', 'text_domain'),
        'attributes'            => __('Project Attributes', 'text_domain'),
        'parent_item_colon'     => __('Parent Project:', 'text_domain'),
        'all_items'             => __('All Projects', 'text_domain'),
        'add_new_item'          => __('Add New Project', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'new_item'              => __('New Project', 'text_domain'),
        'edit_item'             => __('Edit Project', 'text_domain'),
        'update_item'           => __('Update Project', 'text_domain'),
        'view_item'             => __('View Project', 'text_domain'),
        'view_items'            => __('View Projects', 'text_domain'),
        'search_items'          => __('Search Projects', 'text_domain'),
        'not_found'             => __('Not found', 'text_domain'),
        'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
    );

    $args = array(
        'label'                 => __('Project', 'text_domain'),
        'description'           => __('Post Type for Projects', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );

    register_post_type('projects', $args);
}

add_action('init', 'mouhimen_register_custom_post_types');
require_once 'inc/customize_theme_functions.php';
?>