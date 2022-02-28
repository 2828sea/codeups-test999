<?php get_header(); ?>

<main>
<div class="p-eye-catch">
    <picture class="p-eye-catch__img">
      <source media="(min-width: 768px)" srcset="<?php echo esc_url(get_theme_file_uri('./images/common/eye-catch-works-pc.jpg')); ?>">
      <img src="<?php echo esc_url(get_theme_file_uri('./images/common/eye-catch-works-sp.jpg')); ?>" alt="">
    </picture>
    <div class="p-eye-catch__title"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></div>
  </div>
<?php get_template_part('parts','breadcrumbs'); ?>


  <section class="l-sub-works p-sub-works">
    <div class="p-sub-works__wrapper p-tab-wrapper">
      <div class="p-sub-works__inner l-inner">
        <ul class="p-tab-wrapper__items">
          <li class="p-tab-wrapper__item js-p-tab-wrapper__item current"><a href="<?php echo esc_url(home_url('/works-post')); ?>">ALL</a></li>
          <!-- //カスタム投稿内のターム一覧を表示 -->
          <?php
          $args = [
            'taxonomy' => 'works_category'
          ];
          $terms = get_terms($args);
          foreach ($terms as $term) {
            echo '<li class="p-tab-wrapper__item"><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
          }
          ?>
        </ul>

        <div class="p-tab-wrapper__contents p-tab-contents p-tab-contents--all show">
          <div class="p-tab-contents__box">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="p-tab-contents__item p-tab-content">
                  <div class="p-tab-content__img">
                    <?php if (has_post_thumbnail()) { ?>
                      <?php the_post_thumbnail(); ?>
                      <?php }else { ?>
                    <img src="<?php echo esc_url(get_theme_file_uri('./images/common/works-sub-img1-sp.jpg')); ?>" alt="<?php the_title(); ?>">
                    <?php } ?>
                  </div>
                  <h2 class="p-tab-content__title"><?php the_title(); ?></h2>
                  <div class="p-tab-content__label">
                    <?php $terms = get_the_terms($post->ID, 'works_category'); ?>
                    <?php if ($terms) { ?>
                      <?php foreach ($terms as $term) {
                        echo $term->name;
                      } ?>
                    <?php } ?>
                  </div>
                </a>
              <?php endwhile; ?>
            <?php endif; ?>


          </div>
          <div class="l-pagenavi">
            <?php wp_pagenavi(); ?>
          </div>
        </div>


      </div>
    </div>
  </section>
  </div>
  </div>
  </div>
  </section>



  <?php get_template_part('parts','contact'); ?>



</main>

<?php get_footer(); ?>