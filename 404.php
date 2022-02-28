<?php get_header(); ?>

  <main>
    <div class="l-404 p-404">
      <div class="l-inner">
        <div class="p-404__title">404 Not Found</div>
        <p class="p-404__text">
          お探しのページは<br>見つかりませんでした。
        </p>
        <div class="p-404__button u-desktop">
          <a href="<?php echo esc_url(home_url('/')); ?>" class="c-button">TOPヘ</a>
        </div>
      </div>
    </div>
  </main>

  <?php get_footer(); ?>