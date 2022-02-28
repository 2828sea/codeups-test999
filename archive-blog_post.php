<?php get_header(); ?>

<main>
<div class="p-eye-catch">
    <picture class="p-eye-catch__img">
      <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri('./images/common/eye-catch-blog-pc.jpg')); ?>">
      <img src="<?php echo esc_url(get_theme_file_uri('./images/common/eye-catch-blog-sp.jpg')); ?>" alt="">
    </picture>
    <div class="p-eye-catch__title"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></div>
  </div>
  <?php get_template_part('parts', 'breadcrumbs'); ?>

  <section class="l-sub-blog p-sub-blog">
    <div class="p-sub-blog__wrapper p-tab-wrapper">
      <div class="p-sub-blog__inner l-inner">
        <ul class="p-tab-wrapper__items">
          <li class="p-tab-wrapper__item js-tab-wrapper__item current"><a href="<?php echo esc_url(home_url('/blog_post')); ?>">ALL</a></li>
          <?php
          $args = [
            'taxonomy' => 'blog_category'
          ];
          $terms = get_terms($args);
          foreach ($terms as $term) {
            echo '<li class="p-tab-wrapper__item"><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
          }
          ?>
        </ul>
        <div class="p-tab-wrapper__contents p-tab-contents p-tab-contents--all show">




          <div class="p-tab-wrapper__cards p-card-items">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="p-card-items__item p-card<?php
                  //7日以内の記事にnewを付与
                  $days = 7;
                  $today = date_i18n('U');
                  $entry_day = get_the_time('U');
                  $dif = date('U', ($today - $entry_day)) / 86400;
                  ?>
                <?php if ($days > $dif) : echo " p-card--new";
                endif; ?>">

                  <figure class="p-card__img">
                    <?php if (has_post_thumbnail()) { ?>
                      <?php the_post_thumbnail(); ?>
                    <?php } else { ?>
                      <img src="<?php echo esc_url(get_theme_file_uri('./images/common/content-img1.jpg')); ?>" alt="">
                    <?php } ?>
                  </figure>
                  <div class="p-card__body">
                    <h3 class="p-card__title"><?php the_title(); ?></h3>
                    <p class="p-card__text"><?php the_excerpt(); ?></p>
                  </div>
                  <div class="p-card__info">
                    <div class="p-card__category">
                      <?php $terms = get_the_terms($post->ID, 'blog_category'); ?>
                      <?php if ($terms) { ?>
                        <?php foreach ($terms as $term) {
                          echo $term->name;
                        } ?>
                      <?php } ?>
                    </div>
                    <time class="p-card__date"><?php echo get_the_date('Y.m.d'); ?></time>
                  </div>
                </a>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
          </a>
        </div>
      </div>
    </div>
    </div>
    <div class="l-pagenavi">
      <?php wp_pagenavi(); ?>
    </div>
    </div>
  </section>



  <?php get_template_part('parts', 'contact'); ?>



</main>

<?php get_footer(); ?>