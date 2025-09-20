<?php
// Theme Functions for Mouhimen Portfolio

// Add theme support for various features
function mouhimen_portfolio_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mouhimen-portfolio'),
    ));
}
add_action('after_setup_theme', 'mouhimen_portfolio_setup');

// Enqueue styles and scripts
function mouhimen_portfolio_scripts() {
    wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/assets/css/tailwind.css');
    wp_enqueue_style('daisyui-css', 'https://cdn.jsdelivr.net/npm/daisyui@5/themes.css');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'mouhimen_portfolio_scripts');

// Custom function to get skills
function get_skills() {
    $args = array(
        'post_type' => 'skills',
        'posts_per_page' => -1,
    );
    $skills = new WP_Query($args);
    return $skills;
}

// Custom function to get experience
function get_experience() {
    $args = array(
        'post_type' => 'experience',
        'posts_per_page' => -1,
    );
    $experience = new WP_Query($args);
    return $experience;
}

// Custom function to get projects
function get_projects() {
    $args = array(
        'post_type' => 'projects',
        'posts_per_page' => -1,
    );
    $projects = new WP_Query($args);
    return $projects;
}
?>