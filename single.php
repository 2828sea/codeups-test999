<?php get_header(); ?>


<main>


  <div class="l-single p-single">
    <?php get_template_part('parts', 'breadcrumbs'); ?>
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="p-single__inner">
          <h2 class="p-single__title"><?php the_title(); ?></h2>
          <div class="p-single__info">
            <time class="p-single__date"><?php the_time('Y.m.d'); ?></time>
            <div class="p-single__category"><?php the_category(); ?></div>
          </div>
          <div class="p-single__body">
            <?php the_content(); ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>


  <?php get_template_part('parts', 'contact'); ?>



</main>
<?php get_footer(); ?>