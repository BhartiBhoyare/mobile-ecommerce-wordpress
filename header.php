<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>> 

<div class="announcement-bar">
    <span>Sign up and get 20% off to your first order.</span>
    <a href="<?php echo esc_url( get_theme_mod('signup_link') ); ?>" class="signup-link">
    <?php echo esc_html( get_theme_mod('signup_text', 'Sign Up Now') ); ?>
</a>
</div>


<header class="mobile-header">
  <div class="header-left">
    
    <div class="header-icons left">
        <?php if ( get_theme_mod('hamburger_icon') ): ?>
            <img src="<?php echo esc_url(get_theme_mod('hamburger_icon')); ?>" class="icon">
        <?php endif; ?>
    </div>

    <div class="logo">
        <?php 
        if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
        }
        ?>
    </div>
  </div>

    <div class="header-icons right">
        <?php if ( get_theme_mod('search_icon') ): ?>
            <img src="<?php echo esc_url(get_theme_mod('search_icon')); ?>" class="icon">
        <?php endif; ?>

        <?php if ( get_theme_mod('profile_icon') ): ?>
            <img src="<?php echo esc_url(get_theme_mod('profile_icon')); ?>" class="icon">
        <?php endif; ?>

        <?php if ( get_theme_mod('cart_icon') ): ?>
            <img src="<?php echo esc_url(get_theme_mod('cart_icon')); ?>" class="icon">
        <?php endif; ?>
    </div>

</header>

