<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="”icon”" href="" />

  <!-- GoogleFont -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;700&display=swap" rel="stylesheet">
  <!-- swiper -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!-- css -->
  <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('./css/styles.css')); ?>">
  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <!-- swiper -->
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <!-- JavaScript -->
  <script defer src="<?php echo esc_url(get_theme_file_uri('./js/script.js')); ?>"></script>
  <?php wp_head(); ?>
</head>

<header class="l-header p-header js-header">
  <div class="p-header__inner">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__logo js-header__logo">
      <img src="<?php echo esc_url(get_theme_file_uri('./images/common/logo.svg')); ?>" alt="codeups">
    </a>
    <nav class="p-nav js-nav">
      <ul class="p-nav__items">
        <li class="p-nav__item"><a href="<?php echo esc_url(home_url('/')) ?>">トップ</a></li>
        <li class="p-nav__item"><a href="<?php echo esc_url(home_url('/news')) ?>">お知らせ</a></li>
        <li class="p-nav__item"><a href="<?php echo esc_url(home_url('/content')) ?>">事業内容</a></li>
        <li class="p-nav__item"><a href="<?php echo esc_url(home_url('/works')) ?>">制作実績</a></li>
        <li class="p-nav__item"><a href="<?php echo esc_url(home_url('/overview')) ?>">企業概要</a></li>
        <li class="p-nav__item"><a href="<?php echo esc_url(home_url('/blog')) ?>">ブログ</a></li>
        <li class="p-nav__item p-nav__item--contact"><a href="<?php echo esc_url(home_url('/contact')) ?>">お問い合わせ</a></li>
      </ul>
      <!-- /.nav__list -->
    </nav>
    <div class="c-burger-menu">
      <div class="c-burger-btn js-drawer-menu">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- /.header__inner -->
</header>