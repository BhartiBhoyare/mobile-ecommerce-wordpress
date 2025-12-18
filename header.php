<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>> 
    

<?php
$home_id = get_option('page_on_front');

$announcement_text     = get_field('announcement_text', $home_id);
$announcement_btn_text = get_field('announcement_button_text', $home_id);
$announcement_btn_link = get_field('announcement_button_link', $home_id);
?>

<?php if (!empty($announcement_text)): ?>
  <div class="announcement-bar">
    <span><?php echo esc_html($announcement_text); ?></span>

    <?php if (!empty($announcement_btn_text)): ?>
      <a 
        href="<?php echo !empty($announcement_btn_link) ? esc_url($announcement_btn_link) : '#'; ?>" 
        class="signup-link"
      >
        <?php echo esc_html($announcement_btn_text); ?>
      </a>
    <?php endif; ?>
  </div>
<?php endif; ?>




<?php
$header_logo     = get_field('logo');
$hamburger_icon  = get_field('menu');
$search_icon     = get_field('search');
$profile_icon    = get_field('profile');
$cart_icon       = get_field('cart');
?>

<header class="mobile-header">
  <div class="header-left">
    
    <div class="header-icons left">
        <?php if ($hamburger_icon): ?>
            <img src="<?php echo esc_url($hamburger_icon['url']); ?>" class="icon" alt="Menu">
        <?php endif; ?>
    </div>

    <div class="logo">
        <?php if ($header_logo): ?>
            <img src="<?php echo esc_url($header_logo['url']); ?>" 
                 alt="<?php echo esc_attr($header_logo['alt']); ?>">
        <?php endif; ?>
    </div>
  </div>

  <div class="header-icons right">
        <?php if ($search_icon): ?>
            <img src="<?php echo esc_url($search_icon['url']); ?>" class="icon" alt="Search">
        <?php endif; ?>

        <?php if ($profile_icon): ?>
            <img src="<?php echo esc_url($profile_icon['url']); ?>" class="icon" alt="Profile">
        <?php endif; ?>

        <?php if ($cart_icon): ?>
            <img src="<?php echo esc_url($cart_icon['url']); ?>" class="icon" alt="Cart">
        <?php endif; ?>
  </div>
</header>


