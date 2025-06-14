/*========================================================
  ロード画面
========================================================*/
$(function () {
  // ローダー終了
  function end_loader() {
    $('#loader').fadeOut(800);
  }
  // テキスト表示
  function show_txt() {
    $('#loader .loader-img').addClass('fade-in');
  }
  // テキスト非表示
  function hide_txt() {
    $('#loader .loader-img').fadeOut(400);
  }

  // タイマー処理
  $(window).on('load', function () {
    // 処理①
    setTimeout(function () {
      show_txt();
    }, 500)
    // 処理②
    setTimeout(function () {
      hide_txt();
    }, 3000)
    // 処理③
    setTimeout(function () {
      end_loader();
    }, 2000)
  })
})
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
  文字スクロールアニメーション
========================================================*/
$(window).on("scroll", function () {
  var scrollAmount = $(window).scrollTop(); // スクロール量取得
  $(".js-scroll__txt").css("left", -scrollAmount + "px"); // 左方向に移動
});

/*========================================================
  フェードアニメーション
========================================================*/
/**
  要素が見えたらフェードイン
**/
$(window).on("scroll", function () {
  $(".js-fade").each(function () {
    var elementTop = $(this).offset().top; // 要素の上端の位置
    var windowTop = $(window).scrollTop(); // 画面のスクロール位置

    if (windowTop + $(window).height() > elementTop + -10) { // 頭が見えたら
      $(this).addClass("fade-in");
    }
  });
});

/**
  要素を遅らせてフェードイン
**/
$(window).on("scroll", function () {
  $(".js-fade__delay").each(function () {
    var elementTop = $(this).offset().top; // 要素の上端の位置
    var windowTop = $(window).scrollTop(); // 画面のスクロール位置

    if (windowTop + $(window).height() > elementTop + 50) { // 頭が見えたら
      // 3秒後に "delay" クラスを追加
      setTimeout(() => {
        $(this).addClass("fade-in");
      }, 500);
    }
  });
});

$(window).on('load', function () {
  // ローディング終了後に次の処理を発火
  setTimeout(function () {
  /**
    ページタイトル日文
  **/
  $(".js-page__ttl-sub").each(function () {
    var elementTop = $(this).offset().top; // 要素の上端の位置
    var windowTop = $(window).scrollTop(); // 画面のスクロール位置

    if (windowTop + $(window).height() > elementTop + 50) { // 頭が見えたら
      // 3秒後に "delay" クラスを追加
      setTimeout(() => {
        $(this).addClass("fade-in");
      }, 1300);
    }
  });
  }, 2500); // ローディング終了後の遅延時間を設定
});

/**
  セクションタイトル日文
**/
$(window).on("scroll", function () {
  $(".js-fade__sec").each(function () {
    var elementTop = $(this).offset().top; // 要素の上端の位置
    var windowTop = $(window).scrollTop(); // 画面のスクロール位置

    if (windowTop + $(window).height() > elementTop + 0) { // 頭が見えたら
      // 3秒後に "delay" クラスを追加
      setTimeout(() => {
        $(this).addClass("fade-in");
      }, 1000);
    }
  });
});


/*========================================================
  FVタイトルアニメーション
========================================================*/
$(window).on('load', function () {
  // ローディング終了後に次の処理を発火
  setTimeout(function () {
    const textWrappers01 = document.querySelectorAll('.fv-text__fade');

    // .fv-text__fadeに対して文字をspanタグで包む処理を実行
    textWrappers01.forEach(textWrapper => {
      textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='fade-text'>$&</span>");
    });

    // .fade-textに対してアニメーションを適用
    textWrappers01.forEach(() => {
      anime.timeline({ loop: false })
        .add({
          targets: '.fade-text',
          translateX: [0, 0],
          translateZ: 0,
          opacity: [0, 1],
          easing: "easeOutExpo",
          duration: 3000,
          delay: (el, i) => 500 + 30 * i
        });
    });
  }, 2200); // ローディング終了後の遅延時間を設定
});

/*========================================================
  セクションタイトルアニメーション
========================================================*/
document.addEventListener('DOMContentLoaded', () => {
  const textWrappers01 = document.querySelectorAll('.js-fade__content-ttl');

  // 各要素の文字を span タグで包む
  textWrappers01.forEach(textWrapper => {
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='fade-txt'>$&</span>");
  });

  // IntersectionObserver の設定
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) { // 要素が画面内に入ったかどうかを確認
        anime.timeline({ loop: false })
          .add({
            targets: entry.target.querySelectorAll('.fade-txt'),
            translateX: [0, 0],
            translateZ: 0,
            opacity: [0, 1],
            easing: "easeOutExpo",
            duration: 1000,
            delay: (el, i) => 500 + 30 * i
          });

        observer.unobserve(entry.target); // 一度アニメーションが発火したら監視を解除
      }
    });
  }, { threshold: 0.1 }); // 閾値を設定 (10%表示されたら発火)

  // 全ての要素を観察対象に追加
  textWrappers01.forEach(wrapper => observer.observe(wrapper));
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
$(window).on("scroll", function () {
  $(".js-service__fade").each(function (index) {
    var elementTop = $(this).offset().top;
    var windowLeft = $(window).scrollTop() + $(window).height();

    if (windowLeft > elementTop + 50) { // 50pxの余裕を持たせて発火
      $(this).addClass("fade-in");
    }
  });
});

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
  companyアニメーション
========================================================*/
$(window).on("scroll", function () {
  $(".js-company__fade").each(function (index) {
    var elementTop = $(this).offset().top;
    var windowLeft = $(window).scrollTop() + $(window).height();

    if (windowLeft > elementTop + 50) { // 50pxの余裕を持たせて発火
      $(this).addClass("fade-in");
    }
  });
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
      breakpoint: 1023,     // 600〜1023px
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
    },
    {
      breakpoint: 768,      // 480〜599px
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ],
});

$(window).on('resize', function() {
  if ($(window).width() > 767) {
    $('.others__slider').slick({
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
          breakpoint: 1200,     // 600〜1023px
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          }
        }
      ],
    });

  } else {

  }
}).trigger('resize');