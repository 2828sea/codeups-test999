<?php get_header(); ?>

<main>


  <section class="l-single-blog p-single">
    <?php get_template_part('parts', 'breadcrumbs'); ?>
    <div class="p-single__inner">
      <h2 class="p-single__title">タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。タイトルが入ります。</h2>
      <div class="p-single__info">
        <time class="p-single__date"><?php echo get_the_date('Y.m.d'); ?></time>
        <div class="p-single__category">
          <?php $terms = get_the_terms($post->ID, 'blog_category'); ?>
          <?php if ($terms) { ?>
            <?php foreach ($terms as $term) {
              echo $term->name;
            } ?>
          <?php } ?>
        </div>
      </div>
      <div class="p-single__box">
        <?php the_content(); ?>
      </div>

    </div>
    <div class="l-inner">

      <div class="p-single__button">
        <a href="<?php echo get_post_type_archive_link('blog_post') ?>" class="c-button">関連記事</a>
      </div>


      <div class="p-single__cards p-connection-cards">
        <?php
        global $post;
        $args = array(
          'numberposts' => 4, //８件表示(デフォルトは５件)
          'post_type' => 'blog_post', //カスタム投稿タイプ名
          'taxonomy' => 'blog_category', //タクソノミー名 ←ここが追加
          'orderby' => 'rand', //ランダム表示
          'post__not_in' => array($post->ID) //表示中の記事を除外 
        );
        ?>
        <?php $myPosts = get_posts($args);
        if ($myPosts) : ?>
          <?php foreach ($myPosts as $post) : setup_postdata($post); ?>
            <a href="<?php the_permalink(); ?>" class="p-connection-cards__card p-card">
              <figure class="p-card__img">
                <?php if (has_post_thumbnail()) { ?>
                  <?php the_post_thumbnail(); ?>
                <?php } else { ?>
                  <img src="<?php echo esc_url(get_theme_file_uri('./images/common/blog-img1.jpg')); ?>" alt="">
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
          <?php endforeach; ?>
        <?php else : ?>
          <p>関連アイテムはまだありません。</p>
        <?php endif;
        wp_reset_postdata(); ?>



      </div>
    </div>
  </section>

  <?php get_template_part('parts', 'contact'); ?>

</main>

<?php get_footer(); ?>