<?php
get_header();
?>

<?php

$heading = get_field('heading');
$subheading = get_field('subheading');
$button_text = get_field('button_text');
$button_link = get_field('button_link');
$hero_image = get_field('hero_image');
$text_200 = get_field('text_200');
$subtext_200 = get_field('subtext_200');
$text_2000 = get_field('text_2000');
$subtext_2000 = get_field('subtext_2000');
$text_30000 = get_field('text_30000');
$subtext_30000 = get_field('subtext_30000');
$bigstar = get_field('bigstar');
$smallstar = get_field('smallstar');
?>

<section class="hero-section">
  <div class="container">
    <div class="hero-content">
      <h1><?php echo esc_html($heading); ?></h1>
      <p><?php echo esc_html($subheading); ?></p>
      <a href="<?php echo esc_url($button_link); ?>" class="hero-btn"><?php echo esc_html($button_text); ?></a>
      
      <div class="hero-stats">
        <div class="state1">
          <div class="stat">
            <h3><?php echo esc_html($text_200); ?></h3>
            <p><?php echo esc_html($subtext_200); ?></p>
          </div>
          <div class="line"></div>
          <div class="stat">
            <h3><?php echo esc_html($text_2000); ?></h3>
            <p><?php echo esc_html($subtext_2000); ?></p>
            </div>
          </div>
          <div class="stat">
            <h3><?php echo esc_html($text_30000); ?></h3>
        <p><?php echo esc_html($subtext_30000); ?></p>
      </div>
    </div>
  </div>
</div>

<div class="hero-image">
  <?php if( $bigstar ): ?>
    <img src="<?php echo esc_url($bigstar['url']); ?>" alt="<?php echo esc_attr($bigstar['alt']); ?>" class="star-big" />
  <?php endif; ?>
  <?php if( $smallstar ): ?>
    <img src="<?php echo esc_url($smallstar['url']); ?>" alt="<?php echo esc_attr($smallstar['alt']); ?>" class="star-small" />
  <?php endif; ?>
    <img src="<?php echo esc_url($hero_image['url']); ?>" alt="<?php echo esc_attr($hero_image['alt']); ?>" class="image" />
  </div>
</section>


<section class="brand-logos-section">
    <div class="cont1">
      <?php $logo1 = get_field('versace'); ?>
      <?php if ($logo1): ?>
        <div class="brand-logo">
          <img src="<?php echo esc_url($logo1['url']); ?>" alt="<?php echo esc_attr($logo1['alt']); ?>">
        </div>
      <?php endif; ?>
  
      <?php $logo2 = get_field('zara'); ?>
      <?php if ($logo2): ?>
        <div class="brand-logo">
          <img src="<?php echo esc_url($logo2['url']); ?>" alt="<?php echo esc_attr($logo2['alt']); ?>">
        </div>
      <?php endif; ?>
  
      <?php $logo3 = get_field('gucci'); ?>
      <?php if ($logo3): ?>
        <div class="brand-logo">
          <img src="<?php echo esc_url($logo3['url']); ?>" alt="<?php echo esc_attr($logo3['alt']); ?>">
        </div>
      <?php endif; ?>
    </div>

    <div class="cont1">
      <?php $logo4 = get_field('prada'); ?>
      <?php if ($logo4): ?>
        <div class="brand-logo">
          <img src="<?php echo esc_url($logo4['url']); ?>" alt="<?php echo esc_attr($logo4['alt']); ?>">
        </div>
      <?php endif; ?>
  
      <?php $logo5 = get_field('calvin_klein'); ?>
      <?php if ($logo5): ?>
        <div class="brand-logo">
          <img src="<?php echo esc_url($logo5['url']); ?>" alt="<?php echo esc_attr($logo5['alt']); ?>">
        </div>
      <?php endif; ?>
    </div>
</section>

<!-- New Arrivel -->

<?php
$category = get_field('product_category');

if (is_array($category)) {
  $term_ids = wp_list_pluck($category, 'term_id');
} elseif (is_object($category)) {
  $term_ids = $category->term_id;
} else {
  $term_ids = $category;
}

if ($category) :
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />

<section class="new-arrivals-section">
  <h2 class="section-title">NEW ARRIVALS</h2>

  <div class="products-wrapper swiper new-arrivals-swiper">
    <div class="swiper-wrapper">

    <?php
    $args = [
      'post_type'      => 'product',
      'posts_per_page' => 4,
      'post_status'    => 'publish',
    ];

    $query = new WP_Query($args);

    if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post();
        global $product;

        $gallery_ids = $product->get_gallery_image_ids();
        $featured_id = $product->get_image_id();

        $image_ids = [];
        if ($featured_id) $image_ids[] = $featured_id;
        if (!empty($gallery_ids)) $image_ids = array_merge($image_ids, $gallery_ids);
    ?>

      <div class="swiper-slide">
        <div class="product-card">

          <div class="swiper product-image-swiper">
            <div class="swiper-wrapper">

              <?php foreach ($image_ids as $image_id) : ?>
                <div class="swiper-slide">
                  <?php echo wp_get_attachment_image($image_id, 'medium'); ?>
                </div>
              <?php endforeach; ?>

            </div>
            <div class="swiper-pagination"></div>
          </div>

          <h3 class="product-title"><?php the_title(); ?></h3>

          <?php if ($product->get_average_rating() > 0) : ?>
            <div class="custom-rating">
              <?php echo wc_get_rating_html($product->get_average_rating()); ?>
            </div>
          <?php endif; ?>

          <div class="sale_price">
            <?php
              $regular_price = (float) get_post_meta(get_the_ID(), '_regular_price', true);
              $sale_price    = (float) get_post_meta(get_the_ID(), '_sale_price', true);
            ?>

            <?php if ($regular_price > 0 && $sale_price > 0) :
              $discount_amt = $regular_price - $sale_price;
            ?>
              <div class="price">
                <span class="sale_price">$<?php echo $sale_price; ?></span>
                <span class="regular_price">$<?php echo $regular_price; ?></span>
                <span class="sale-badge">-$<?php echo $discount_amt; ?></span>
              </div>
            <?php else : ?>
              <span class="sale_price">$<?php echo $regular_price; ?></span>
            <?php endif; ?>
          </div>

        </div>
      </div>

    <?php endwhile; wp_reset_postdata(); endif; ?>

    </div>
  </div>

  <div class="view-all-btn">
    <a href="<?php echo get_term_link($term_ids); ?>" class="btn">View All</a>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {

  new Swiper('.new-arrivals-swiper', {
    slidesPerView: 2.1,
    spaceBetween: 12,
    grabCursor: true,
    loop: true,
    loopedSlides: 2,
  watchSlidesProgress: true,
  });

  document.querySelectorAll('.product-image-swiper').forEach(swiperEl => {
    new Swiper(swiperEl, {
      slidesPerView: 1,
      loop: true,
      pagination: {
        el: swiperEl.querySelector('.swiper-pagination'),
        clickable: true,
      },
    });
  });

});
</script>

<?php endif; ?>

<?php get_footer(); ?>
