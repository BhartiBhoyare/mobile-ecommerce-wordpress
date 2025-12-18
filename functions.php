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
