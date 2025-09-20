<?php
function mouhimen_portfolio_enqueue_scripts() {
    // Enqueue Tailwind CSS
    wp_enqueue_style('tailwind-css', get_template_directory_uri() . '/assets/css/tailwind.css');

    // Enqueue daisyUI
    wp_enqueue_style('daisyui', 'https://cdn.jsdelivr.net/npm/daisyui@5/themes.css', array(), null);

    // Enqueue main JavaScript file
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'mouhimen_portfolio_enqueue_scripts');
?>