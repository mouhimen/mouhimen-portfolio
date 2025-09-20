<?php
function mpw_customize_register($wp_customize) {
    // === Colors ===
    $colors = [
        'header_bg_color' => 'Header Background Color',
        'footer_bg_color' => 'Footer Background Color',
        'body_color' => 'Body Color',
        'container_color' => 'Container Color'
    ];
    foreach ($colors as $key => $label) {
        $wp_customize->add_setting("mpw_{$key}", [
            'default' => '',
            'sanitize_callback' => 'sanitize_hex_color',
        ]);
        $wp_customize->add_control(new WP_Customize_Color_Control(
            $wp_customize,
            "mpw_{$key}",
            [
                'label' => $label,
                'section' => 'colors',
                'settings' => "mpw_{$key}",
            ]
        ));
    }

    // === Social Media URLs ===
    $socials = [
        'facebook' => 'Facebook URL',
        'twitter' => 'Twitter URL',
        'linkedin' => 'LinkedIn URL',
        'github' => 'GitHub URL',
        'instagram' => 'Instagram URL'
    ];
    $wp_customize->add_section('mpw_social_section', [
        'title' => 'Social Media Links',
        'priority' => 160,
    ]);
    foreach ($socials as $key => $label) {
        $wp_customize->add_setting("mpw_social_{$key}", [
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control(
            "mpw_social_{$key}",
            [
                'label' => $label,
                'section' => 'mpw_social_section',
                'type' => 'url',
            ]
        );
    }

    // === Sender URL ===
    $sender = [
        'Sender_URL' => 'Sender URL'
    ];
    $wp_customize->add_section('mpw_sender_url', [
        'title' => 'Contact Form Sender URL',
       'priority' => 100,
    ]);
    foreach ($sender as $key => $label) {
        $wp_customize->add_setting("mpw_{$key}", [
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control(
            "mpw_{$key}",
            [
                'label' => $label,
                'section' => 'mpw_sender_url',
                'type' => 'url',
            ]
        );
    }
}

function mpw_background_customize_register($wp_customize) {
    // === Background Images ===
    $sections = [
        'hero' => 'Hero Section',
        'skills' => 'Skills Section',
        'experience' => 'Experience Section',
        'project' => 'Project Section',
        'blog' => 'Blog Section',
        'contact' => 'Contact Section'
    ];

    // Add the section ONCE, outside the loop
    $wp_customize->add_section('mpw_background_section', [
        'title' => 'Background Images',
        'priority' => 120,
    ]);
    foreach ($sections as $key => $label) {
        $wp_customize->add_setting("mpw_bg_{$key}_image", [
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ]);
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            "mpw_bg_{$key}_image",
            [
                'label' => "$label Background Image",
                'section' => 'mpw_background_section', // Use your custom section
                'settings' => "mpw_bg_{$key}_image",
            ]
        ));
    }
}
add_action('customize_register', 'mpw_customize_register');
add_action('customize_register', 'mpw_background_customize_register');