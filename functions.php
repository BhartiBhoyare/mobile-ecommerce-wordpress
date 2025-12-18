<?php
add_theme_support('post-thumbnails');

function mobile_theme_assets() {
  wp_enqueue_style(
    'mobile-style',
    get_stylesheet_uri(),
    [],
    wp_get_theme()->get('Version')
  );
}
add_action('wp_enqueue_scripts', 'mobile_theme_assets');


function announcement_signup_customizer($wp_customize) {

    $wp_customize->add_section('announcement_bar', [
        'title' => 'Announcement Bar',
    ]);

    $wp_customize->add_setting('signup_text', [
        'default' => 'Sign Up Now',
        'transport' => 'refresh'
    ]);

    $wp_customize->add_setting('signup_link', [
        'default' => '',
        'transport' => 'refresh'
    ]);

    $wp_customize->add_control('signup_text', [
        'label' => 'Signup Text',
        'section' => 'announcement_bar',
        'type' => 'text',
    ]);

    $wp_customize->add_control('signup_link', [
        'label' => 'Signup Link',
        'section' => 'announcement_bar',
        'type' => 'url',
    ]);
}
add_action('customize_register', 'announcement_signup_customizer');


function header_icons_customizer($wp_customize) {

    $wp_customize->add_section('header_icons_section', [
        'title' => 'Header Icons',
    ]);

    $icons = ['hamburger_icon','cart_icon','search_icon','profile_icon'];

    foreach ($icons as $icon) {
        $wp_customize->add_setting($icon, [
            'default' => '',
            'transport' => 'refresh'
        ]);

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
                $wp_customize,
                $icon,
                [
                    'label' => ucwords(str_replace('_',' ', $icon)),
                    'section' => 'header_icons_section',
                ]
            )
        );
    }
}
add_action('customize_register', 'header_icons_customizer');
