<?php get_header(); ?>

<?php
$home = esc_url(home_url('/'));
$news = esc_url(home_url('/news'));
$content = esc_url(home_url('/content'));
$works = esc_url(home_url('/works'));
$overview = esc_url(home_url('/overview'));
$blog = esc_url(home_url('/blog'));
$contact = esc_url(home_url('/contact'));
?>

<main>
  <div class="swiper l-mv p-mv">
    <div class="swiper-wrapper p-mv__wrapper">
      <div class="swiper-slide">
        <div class="p-mv__img"></div>
      </div>
      <div class="swiper-slide">
        <div class="p-mv__img p-mv__img2"></div>
      </div>
      <div class="swiper-slide">
        <div class="p-mv__img p-mv__img3"></div>
      </div>
    </div>
    <div class="p-mv__content">
      <div class="p-mv__title"><?php bloginfo('name'); ?></div>
      <div class="p-mv__sub-title"><?php bloginfo('description'); ?></div>
    </div>
    <!-- /.mv__content -->
  </div>
  <!-- /.mv -->

  <div class="l-news p-news js-news">
    <div class="p-news__inner">

      <?php
      $news_query = new WP_Query(
        array(
          'post_type'      => 'post',
          'category_name' => 'news-cate',
          'posts_per_page' => 3,
        )
      );
      ?>
      <?php if ($news_query->have_posts()) : ?>
        <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
          <div class="p-news__contents">
            <div class="p-news__content">
              <time class="p-news__date"><?php echo get_the_date('Y.m.d'); ?></time>
              <div class="p-news__label"><?php the_category(); ?></div>
            </div>
            <a href="<?php the_permalink(); ?>" class="p-news__text"><?php the_title(); ?></a>
          </div>
          <!-- /.p-news__contents -->
        <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>
      <div class="p-news__button">
        <a href="<?php echo $news ?>" class="c-button c-button--black"><span>すべて見る</span></a>
      </div>
    </div>
    <!-- /.p-news__inner -->
  </div>
  <!-- /.l-news -->

  <section class="l-content p-content">
    <div class="c-section-header">
      <h2 class="c-section-header__engtitle">Content</h2>
      <p class="c-section-header__jatitle">事業内容</p>
    </div>
    <div class="p-content__box">
      <div class="p-content__item">
        <div class="p-content__img p-content__img1">
          <a href="<?php echo esc_url(home_url('/content')); ?>" class="p-content__text"><span>経営理念ページへ</span></a>
        </div>
      </div>
      <div class="p-content__item">
        <div class="p-content__img p-content__img2">
          <a href="<?php echo $content ?>" class="p-content__text"><span>理念1へ</span></a>
        </div>
      </div>
      <div class="p-content__item">
        <div class="p-content__img p-content__img3">
          <a href="<?php echo $content ?>" class="p-content__text"><span>理念2へ</span></a>
        </div>
      </div>
      <div class="p-content__item">
        <div class="p-content__img p-content__img4">
          <a href="<?php echo $content ?>" class="p-content__text"><span>理念3へ</span></a>
        </div>
      </div>
      <!-- /.p-content__box -->
  </section>
  <!-- /.l-content -->

  <section class="l-works p-works">
    <div class="c-section-header">
      <h2 class="c-section-header__engtitle c-section-header__engtitle--right">Works</h2>
      <p class="c-section-header__jatitle">制作実績</p>
    </div>
    <div class="p-works__wrapper">
      <div class="p-works__inner">
        <div class="p-works-slider swiper">
          <div class="p-works-slider__wrapper swiper-wrapper">
            <div class="p-works__img swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri('./images/common/works-img3.jpg')); ?>" alt="トップ画像１">
            </div>
            <div class="p-works__img swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri('./images/common/works-img1.jpg')); ?>" alt="トップ画像2">
            </div>
            <div class="p-works__img swiper-slide">
              <img src="<?php echo esc_url(get_theme_file_uri('./images/common/works-img2.jpg')); ?>" alt="トップ画像3">
            </div>
          </div>
          <div class="p-works-pagination swiper-pagination"></div>
        </div>
        <div class="p-works__contents">
          <div class="p-works-contents__title">メインタイトルが入ります</div>
          <div class="p-works-contents__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</div>
          <div class="p-works__button">
            <a href="<?php echo get_post_type_archive_link('works-post') ?>" class="c-button c-button--white"><span>詳しく見る</span></a>
          </div>
        </div>
        <!-- /.p-works__contents -->
      </div>
    </div>
    <!-- /.p-works__wrapper -->
  </section>
  <!-- /.l-works -->

  <section class="l-overview p-overview">
    <div class="c-section-header">
      <h2 class="c-section-header__engtitle">Overview</h2>
      <p class="c-section-header__jatitle">企業概要</p>
    </div>

    <div class="p-overview__wrapper">
      <div class="p-overview__inner">
        <div class="p-overview__img swiper-slide">
          <img src="<?php echo esc_url(get_theme_file_uri('./images/common/overview-img.jpg')); ?>" alt="トップ画像１">
        </div>
        <div class="p-overview__contents">
          <div class="p-overview-contents__title">メインタイトルが入ります</div>
          <div class="p-overview-contents__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</div>
          <div class="p-overview__button">
            <a href="<?php echo $overview ?>" class="c-button c-button--white"><span>詳しく見る</span></a>
          </div>
        </div>
        <!-- /.p-works__contents -->
      </div>
    </div>
    <!-- /.p-works__wrapper -->
  </section>
  <!-- /.l-overview -->

  <section class="l-blog p-blog">
    <div class="c-section-header">
      <h2 class="c-section-header__engtitle c-section-header__engtitle--right">Blog</h2>
      <p class="c-section-header__jatitle">ブログ</p>
    </div>
    <div class="l-inner p-blog__inner">


      <?php
      $args = array(
        'post_type' => 'blog_post',
        'posts_per_page' => '3'
      );
      $the_query = new WP_query($args);
      if ($the_query->have_posts()) :
      ?>

        <div class="p-blog__items p-card-items">


          <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

            <a href="<?php the_permalink(); ?>" class="p-card-items__item p-card p-card--new">
              <figure class="p-card__img">
                <?php if (has_post_thumbnail()) { ?>
                  <?php the_post_thumbnail(); ?>
                <?php } else { ?>
                  <img src="<?php echo esc_url(get_theme_file_uri('./images/common/overview-img.jpg')); ?>" alt="">
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


        </div>
      <?php wp_reset_postdata();
      endif; ?>





      <div class="p-blog__button">
        <a href="<?php echo get_post_type_archive_link('blog_post') ?>" class="c-button c-button--white"><span>詳しく見る</span></a>
      </div>
    </div>
    <!-- /.l-inner -->
  </section>

  <section class="l-contact p-contact">
    <div class="c-section-header">
      <h2 class="c-section-header__engtitle c-section-header__engtitle--contact">Contact</h2>
      <p class="c-section-header__jatitle">お問い合わせ</p>
    </div>
    <div class="l-inner p-contact__inner">
      <p class="p-contact__text">テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。</p>
      <div class="p-contact__button">
        <a href="<?php echo $contact ?>" class="c-button c-button--white"><span>お問い合わせへ</span></a>
      </div>
    </div>
    <!-- /.l-inner -->
  </section>
  <!-- /.l-contact -->
  </div>
</main>

<?php get_footer(); ?>