<footer class="l-footer p-footer">
    <div class="p-footer__inner">
      <a href="<?php echo esc_url(home_url('/'));?>" class="p-footer__logo">
        <img src="<?php echo esc_url(get_theme_file_uri('./images/common/logo.svg')); ?>" alt="codeups">
      </a>


      <?php
      $defaults = array(
        'theme_location'  => 'footer',
        'container'       => 'nav',
        'container_class' => '',
        'menu_class'      => 'p-footer__items',
        'add_li_class'    => 'p-footer__item' // liタグへclass追加
        // 'add_a_class'     => 'nav-link text-white' // aタグへclass追加
      );
      wp_nav_menu($defaults);
      ?>


<!-- 
      <ul class="p-footer__items">
        <li class="p-footer__item">
          <a href="<?php echo esc_url(home_url('/'));?>">トップ</a>
        </li>
        <li class="p-footer__item">
          <a href="<?php echo esc_url(home_url('/news'));?>">お知らせ</a>
        </li>
        <li class="p-footer__item">
          <a href="<?php echo esc_url(home_url('/content'));?>">事業内容</a>
        </li>
        <li class="p-footer__item">
          <a href="<?php echo esc_url(home_url('/overview'));?>">企業概要</a>
        </li>
        <li class="p-footer__item">
          <a href="<?php echo esc_url(home_url('/blog'));?>">ブログ</a>
        </li>
        <li class="p-footer__item">
          <a href="<?php echo esc_url(home_url('/contact'));?>">お問い合わせ</a>
        </li>
      </ul> -->
    </div>
    <p class="p-footer__copy">&copy; <?php echo date('Y');?> <?php bloginfo('name');?> Inc.</p>
  </footer>
  <div class="p-page-top pagetop"><span></span></div>
  <?php wp_footer(); ?>
</body>

</html>