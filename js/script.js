
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $('.pagetop');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });

  // ボタンをクリックしたらスクロールして上に戻る
  topBtn.click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 300, 'swing');
    return false;
  });


  //ドロワーメニュー
  $(".js-drawer-menu").click(function () {
    // $(".l-drawer-menu").toggleClass("is-show");
    // $(".p-drawer-menu").toggleClass("is-show");
    $(".js-drawer-menu").toggleClass("open");
    $(".js-nav").toggleClass("open");
    $("html").toggleClass("is-fixed");
  });

  $(".js-nav").click(function () {
    // $(".l-drawer-menu").toggleClass("is-show");
    // $(".p-drawer-menu").toggleClass("is-show");
    $(".js-drawer-menu").removeClass("open");
    $(".js-nav").removeClass("open");
    $("html").removeClass("is-fixed");
  });

  $(".js-header__logo").click(function () {
    // $(".l-drawer-menu").toggleClass("is-show");
    // $(".p-drawer-menu").toggleClass("is-show");
    $(".js-drawer-menu").removeClass("open");
    $(".js-nav").removeClass("open");
    $("html").removeClass("is-fixed");
  });



  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });


  // TOPスライダー
  const swiper = new Swiper('.p-mv', {
    // Optional parameters
    // direction: 'vertical',
    loop: true,
    effect:'fade',
    speed:2000,
    autoplay: {
      delay:4000,
      disableOnInteraction: false,
    },
  });

  // TOPスライダー
  const swiper1 = new Swiper('.p-works-slider', {
    // Optional parameters
    // direction: 'vertical',
    loop: true,
    effect:'slide',
    speed:2000,
    autoplay: {
      delay:4000,
      disableOnInteraction: false,
    },
    pagination: {
      el:'.swiper-pagination',
      clickable:true
    },
  });

  //MV以下ヘッダー
  const target = $('.js-news').offset();
  $(window).scroll(function() {
    if($(this).scrollTop() > target.top) {
      $('.js-header').addClass('p-header--color');
    } else {
      $('.js-header').removeClass('p-header--color');
    }
  });


  //(jQuery)で特定のliタグにだけclass「current」をつける
  href = location.href;

  var links = jQuery(".p-tab-wrapper__items > .p-tab-wrapper__item > a");
  
  links.each(function (index, value) {
    if (value.href == href) {
      jQuery(".p-tab-wrapper__items").children(".p-tab-wrapper__item").eq(index).addClass("current");
    }
  });

  $('.p-tab-wrapper__item').click(function(){
		$('.current').removeClass('current');
		$(this).addClass('current');
	});

    //メイン
    var smartImage = $(".p-gallery__wrapper > div").length;
    var slider = new Swiper ('.p-gallery', {
    slidesPerView: 1,
    centeredSlides: true,
    loop: true,
    loopedSlides: smartImage, //スライドの枚数と同じ値を指定
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
  });

  //サムネイル
  var thumbs = new Swiper ('.p-thumbs', {
    slidesPerView: 'auto',
    spaceBetween: 10,
    centeredSlides: true,
    loop: true,
    slideToClickedSlide: true,
  });

      //4系～
      //メインとサムネイルを紐づける
      slider.controller.control = thumbs;
      thumbs.controller.control = slider;

});


