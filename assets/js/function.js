/*========================================================
  アコーディオン
========================================================*/
// メインナビゲーションの開閉
$('.js-nav__btn').on('click', function() {
  $('.l-header__nav').toggleClass('open');
  $(this).toggleClass('opened');
});

// サブナビゲーションの開閉
$('.js-nav__sub-btn').on('click', function() {
  $(this).next('.l-header__sub-item').slideToggle();
  $(this).toggleClass('opened');
});

/*========================================================
  文字アニメーション
========================================================*/
$(window).on("scroll", function () {
  var scrollAmount = $(window).scrollTop(); // スクロール量取得
  $(".js-scroll__txt").css("left", -scrollAmount + "px"); // 左方向に移動
});

/*========================================================
  FVアニメーション
========================================================*/
document.addEventListener('DOMContentLoaded', () => {
  var textWrapper01 = document.querySelector('.fv__text-wrapper-01');
  var textWrapper02 = document.querySelector('.fv__text-wrapper-02');
  textWrapper01.innerHTML = textWrapper01.textContent.replace(/\S/g, "<span class='fv__text-01'>$&</span>");
  textWrapper02.innerHTML = textWrapper02.textContent.replace(/\S/g, "<span class='fv__text-02'>$&</span>");

  anime.timeline({loop: false})
    .add({
      targets: '.fv__text .fv__text-01',
      translateX: [20,0],
      translateZ: 0,
      opacity: [0,1],
      easing: "easeOutExpo",
      duration: 3000,
      delay: (el, i) => 500 + 30 * i
    })/* .add({
      targets: '.fv__text',
      opacity: 0,
      duration: 1000,
      easing: "easeOutExpo",
      delay: 1000
  }); */
  anime.timeline({loop: false})
    .add({
      targets: '.fv__text .fv__text-02',
      translateX: [20,0],
      translateZ: 0,
      opacity: [0,1],
      easing: "easeOutExpo",
      duration: 3000,
      delay: (el, i) => 500 + 30 * i
    })/* .add({
      targets: '.fv__text',
      opacity: 0,
      duration: 1000,
      easing: "easeOutExpo",
      delay: 1000
  }); */

});

/*========================================================
  aboutアニメーション
========================================================*/
$(window).on("scroll", function () {
  $(".js-fade__bottom").each(function (index) {
    var elementTop = $(this).offset().top;
    var windowBottom = $(window).scrollTop() + $(window).height();

    if (windowBottom > elementTop + 50) { // 50pxの余裕を持たせて発火
      setTimeout(() => {
        $(this).addClass("fade-in");
      }, index * 300); // 1秒ずつ遅延してクラス追加
    }
  });
});

/*========================================================
  serviceアニメーション
========================================================*/
$(document).ready(function () {

  $(".flexitem__list").hover(
    function () {
      $(this).find(".flexitem__list-txt").addClass("fade-in"); // 表示
    },
    function () {
      $(this).find(".flexitem__list-txt").removeClass("fade-in"); // 非表示
    }
  );
});

/*========================================================
  slider
========================================================*/
$('.column__slider').slick({
  // 自動再生するか [初期値:false]
  autoplay: true,
  // 自動再生で切り替えする時間(ミリ秒) [初期値:3000]
  autoplaySpeed: 4000,
  // 前次ボタンを表示するか [初期値:true]
  arrows: true,
  // 表示させるスライド数 [初期値:1]
  slidesToShow: 3,
  // スライド/フェードさせるスピード（ミリ秒） [初期値:300]
  speed: 1000,
  // 前ボタンの要素を変更 [初期値:'<button type="button" class="slick-prev">Previous</button>']
  prevArrow: '<div class="slider-arrow slick-prev --prev"><span class="arrow --prev"></span></div>',
  // 次ボタンの要素を変更 [初期値:'<button type="button" class="slick-next">Next</button>']
  nextArrow: '<div class="slider-arrow slick-next --next"><span class="arrow --next"></span></div>',

  // レスポンシブ設定
  responsive: [
    {
      breakpoint: 1024,     // 600〜1023px
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,      // 480〜599px
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 480,      // 〜479px
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ],
});