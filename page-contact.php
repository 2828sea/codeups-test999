<?php get_header(); ?>
<main>
<div class="p-eye-catch">
    <picture class="p-eye-catch__img">
      <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri('./images/common/eye-catch-contact-pc.jpg')); ?>">
      <img src="<?php echo esc_url(get_theme_file_uri('./images/common/eye-catch-contact-sp.jpg')); ?>" alt="">
    </picture>
    <div class="p-eye-catch__title"><?php the_title(); ?></div>
  </div>
  <?php get_template_part('parts', 'breadcrumbs'); ?>


  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>