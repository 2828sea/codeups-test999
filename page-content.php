<?php get_header(); ?>
<main>
<div class="p-eye-catch">
    <picture class="p-eye-catch__img">
      <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri('./images/common/eye-catch-content-pc.jpg')); ?>">
      <img src="<?php echo esc_url(get_theme_file_uri('./images/common/eye-catch-content-sp.jpg')); ?>" alt="">
    </picture>
    <div class="p-eye-catch__title"><?php the_title(); ?></div>
  </div>
  <?php get_template_part('parts', 'breadcrumbs'); ?>

  <section class="l-sub-content p-sub-content">
    <div class="p-sub-content__inner l-inner">
      <h2 class="p-sub-content__title"><?php the_title(); ?></h2>
      <p class="p-sub-content__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      <div class="p-sub-content__items p-groups">
        <div class="p-groups__item p-group" id="content2">
          <div class="p-group__img">
            <!-- <img src="<?php echo esc_url(get_theme_file_uri('./images/common/sub-content-img1-sp.jpg')); ?>" alt=""> -->
            <img src="<?php the_field('content-img1'); ?>" alt="<?php the_title(); ?>">
          </div>
          <div class="p-group__body">
            <h3 class="p-group__title"><?php the_field('content-title1'); ?></h3>
            <p class="p-group__text"><?php the_field('content-text1'); ?></p>
          </div>
        </div>
        <div class="p-groups__item p-group" id="content3">
          <div class="p-group__img">
            <!-- <img src="<?php echo esc_url(get_theme_file_uri('./images/common/sub-content-img2-sp.jpg')); ?>" alt=""> -->
            <img src="<?php the_field('content-img2'); ?>" alt="<?php the_title(); ?>">
          </div>
          <div class="p-group__body">
            <h3 class="p-group__title"><?php the_field('content-title2'); ?></h3>
            <p class="p-group__text"><?php the_field('content-text2'); ?></p>
          </div>
        </div>
        <div class="p-groups__item p-group" id="content4">
          <div class="p-group__img">
            <!-- <img src="<?php echo esc_url(get_theme_file_uri('./images/common/sub-content-img3-sp.jpg')); ?>" alt=""> -->
            <img src="<?php the_field('content-img3'); ?>" alt="<?php the_title(); ?>">
          </div>
          <div class="p-group__body">
            <h3 class="p-group__title"><?php the_field('content-title3'); ?></h3>
            <p class="p-group__text"><?php the_field('content-text3'); ?></p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php get_template_part('parts', 'contact'); ?>


</main>

<?php get_footer(); ?>