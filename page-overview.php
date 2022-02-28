<?php get_header(); ?>

<main>
<div class="p-eye-catch">
    <picture class="p-eye-catch__img">
      <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri('./images/common/eye-catch-overview-pc.jpg')); ?>">
      <img src="<?php echo esc_url(get_theme_file_uri('./images/common/eye-catch-overview-sp.jpg')); ?>" alt="">
    </picture>
    <div class="p-eye-catch__title"><?php the_title(); ?></div>
  </div>
  <?php get_template_part('parts', 'breadcrumbs'); ?>

  <div class="l-sub-overview p-sub-overview">
    <div class="p-sub-overview__inner l-inner">
      <dl class="p-overview__info p-explain">
        <?php
        $overview_info = SCF::get('overview_info');
        foreach ($overview_info as $fields) {
        ?>
          <div class="p-explain__block">
            <dt class="p-explain__header"><?php echo $fields['title']; ?></dt>
            <dd class="p-explain__description"><?php echo $fields['text']; ?></dd>
          </div>

        <?php } ?>
      </dl>

    </div>
    <div class="l-map p-map">
      <div class="p-map__iframe">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.4880141904196!2d139.69838261525905!3d35.689606680192334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cd0d6b1ba1f%3A0x1c32a1f1ecacfdd5!2z5paw5a6_6aeF!5e0!3m2!1sja!2sjp!4v1643401018822!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>

  <?php get_template_part('parts', 'contact'); ?>


</main>

<?php get_footer(); ?>