<?php get_header(); ?>


<main>
<div class="p-eye-catch">
    <picture class="p-eye-catch__img">
      <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri('./images/common/eye-catch-news-pc.jpg')); ?>">
      <img src="<?php echo esc_url(get_theme_file_uri('./images/common/eye-catch-news-sp.jpg')); ?>" alt="">
    </picture>
    <div class="p-eye-catch__title"><?php echo get_the_title(10); ?></div>
  </div>
  <?php get_template_part('parts', 'breadcrumbs'); ?>

  <div class="l-sub-news p-news p-sub-news">
    <div class="p-news__inner">

      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

          <div class="p-news__contents p-news__contents--center">
            <div class="p-news__content">
              <time class="p-news__date"><?php echo get_the_date('Y.m.d'); ?></time>
              <div class="p-news__label"><?php the_category(); ?></div>
            </div>
            <a href="<?php the_permalink(); ?>" class="p-news__text"><?php the_title(); ?></a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>

      <!-- /.p-news__contents -->

      <div class="l-pagenavi">
        <?php wp_pagenavi(); ?>
      </div>

    </div>
    <!-- /.p-news__inner -->
  </div>
  <!-- /.l-news -->

  <?php get_template_part('parts', 'contact'); ?>

</main>
<?php get_footer(); ?>