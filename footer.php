<footer class="l-footer p-footer">
    <div class="p-footer__inner">
      <a href="<?php echo esc_url(home_url('/'));?>" class="p-footer__logo">
        <img src="<?php echo esc_url(get_theme_file_uri('./images/common/logo.svg'));?>" alt="codeups">
      </a>
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
      </ul>
    </div>
    <p class="p-footer__copy">&copy; <?php echo date('Y');?> <?php bloginfo('name');?> Inc.</p>
  </footer>