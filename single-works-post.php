<?php get_header(); ?>

<main>

  <section class="l-works-single p-works-single">
    <?php get_template_part('parts', 'breadcrumbs'); ?>
    <div class="p-works-single__inner">
      <div class="p-works-single__box">
        <h2 class="p-works-single__title"><?php the_title(); ?> 制作実績</h2>
        <div class="p-works-single__info">
          <time class="p-works-single__date"><?php echo get_the_date('Y.m.d'); ?></time>
          <div class="p-works-single__category">
            <?php $terms = get_the_terms($post->ID, 'works_category'); ?>
            <?php if ($terms) { ?>
              <?php foreach ($terms as $term) {
                echo $term->name;
              } ?>
            <?php } ?>
          </div>
        </div>

        <div class="p-works-single__gallery p-gallerys">
          <div class="p-gallerys__items p-gallery swiper">
            <!-- メイン -->
            <div class="p-gallery__wrapper swiper-wrapper">

              <?php
              $works_images = SCF::get('works_images');
              foreach ($works_images as $images) {
                // $imgurl = wp_get_attachment_image_src($images['works_image'], 'large');
              ?>
                <div class="p-gallery__slide swiper-slide"><?php echo var_dump($images); ?>
                  <?php
                  $image = get_post_meta($post->ID, 'works_image', true);
                  echo wp_get_attachment_image($images['works_image'], 'full');
                  ?>
                </div>

              <?php } ?>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <!-- サムネイル -->
            <div class="p-gallerys__items p-thumbs swiper">
              <div class="p-thumbs__wrapper swiper-wrapper">
                <?php
                $works_images = SCF::get('works_images');
                foreach ($works_images as $images) {
                  // $imgurl = wp_get_attachment_image_src($images['works_image'], 'large');
                ?>
                  <div class="p-thumbs__slide swiper-slide">
                    <?php
                    $image = get_post_meta($post->ID, 'works_image', true);
                    echo wp_get_attachment_image($images['works_image'], 'full');
                    ?>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>

          <div class="p-works-single__items">
            <?php
            $works_contents = SCF::get('works_contents');
            foreach ($works_contents as $contents) {
            ?>
              <div class="p-works-single__item p-point">
                <h3 class="p-point__title"><?php echo $contents['works_title']; ?></h3>
                <p class="p-point__text"><?php echo $contents['works_text']; ?></p>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="l-pagenavi p-pagenavi">
        <div class="p-pagenavi__prev">
          <?php previous_post_link('%link', 'PREV'); ?>
        </div>
        <div class="p-pagenavi__archive">
          <a href="<?php echo get_post_type_archive_link('works-post') ?>">一覧</a>
        </div>
        <div class="p-pagenavi__next">
          <div class="next"><?php next_post_link('%link', 'NEXT'); ?>
          </div>
        </div>
      </div>
      <div class="p-works-single__button">
        <a href="<?php echo get_post_type_archive_link('works-post') ?>" class="c-button">関連記事</a>
      </div>
      <div class="p-single__cards p-connection-cards">
        <?php
        global $post;
        $args = array(
          'numberposts' => 4, //８件表示(デフォルトは５件)
          'post_type' => 'works-post', //カスタム投稿タイプ名
          'taxonomy' => 'works_category', //タクソノミー名 ←ここが追加
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
                  <?php $terms = get_the_terms($post->ID, 'works_category'); ?>
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