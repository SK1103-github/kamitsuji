<!DOCTYPE html>
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

<![endif]-->
<!--[if lt IE 9]>
  <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
<html lang="ja">
<head>
<meta charset="UTF-8">
<!-- ▼ デバイス認識 -->
<?php
  global $ua, $sp, $pad;
  $ua = $_SERVER['HTTP_USER_AGENT'];
  $sp = ((strpos($ua,'iPhone')==true)||(strpos($ua,'iPod')==true)||(strpos($ua,'Android')==true));
  $ipad = ((strpos($ua,'iPhone')==true)||(strpos($ua,'iPod')==true)||(strpos($ua,'Android')==true)||(strpos($ua,'iPad')==true));
?>

<?php if($sp): //スマホの場合?>
  <!--========== ▼ sp_header ==========-->

  <!--========== ▲ sp_header ==========-->
<?php else: //PCの場合?>
  <!--========== ▼ pc_header ==========-->

  <!--========== ▲ pc_header ==========-->
<?php endif; ?>

<!-- ▼ ビューポート -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta name="format-detection" content="telephone=no" />

<!-- ▼ スタイルシート -->
<link rel="stylesheet" type="text/css" href="assets/css/reset.css" />
<link rel="stylesheet" type="text/css" href="assets/js/slick/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="assets/js/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="assets/css/style.css" />

<!-- ▼ font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Zen+Kaku+Gothic+New&display=swap" rel="stylesheet">

<!-- ▼ ファビコン -->
<link rel="apple-touch-icon" href="images/favicon/favicon.ico">
<link rel="SHORTCUT ICON" href="images/favicon/favicon.ico">
<link rel="icon" href="images/favicon/favicon.ico">

<!-- ▼ サイトタイトル -->
<title></title>
</head>
<body>

<header class="l-header">
  <div class="l-header__inner">
    <div class="l-header__btn-group">
      <div class="l-header__mail">
        <a href="">
        <img src="assets/images/common/icon_mail.svg" alt="mail" width="28" height="18">
        </a>
      </div>

      <div class="l-header__info">
        <img src="assets/images/common/icon_phone.svg" alt="tel" width="24" height="24">
        <div class="l-header__info-text">
          <p class="l-header__info-phone">
            <a href="tel:0643034877" aria-label="電話番号に電話する">06-4303-4877</a></p>
          <p class="l-header__info-hours">営業時間 / 平日9:00〜17:00</p>
        </div>
      </div>

      <div class="l-header__nav-btn js-nav__btn">
        <span></span>
        <span></span>
        <span></span>
      </div>

      <nav class="l-header__nav">
        <ul class="l-header__list">
          <li class="l-header__list-item">
            <a href="" class="l-header__list-link">トップ</a>
          </li>
          <li class="l-header__list-item">
            <a href="" class="l-header__list-link">お知らせ</a>
          </li>
          <li class="l-header__list-item">
            <a href="" class="l-header__list-link">上辻会計事務所について</a>
          </li>
          <li class="l-header__list-item">
            <div class="l-header__sub-nav js-nav__sub-btn">サービス内容</div>
            <div class="l-header__sub-item">
              <a href="" class="l-header__sub-link">- サービス内容一覧</a>
              <a href="" class="l-header__sub-link">- 税務会計顧問</a>
              <a href="" class="l-header__sub-link">- 財務デューデリジェンス</a>
              <a href="" class="l-header__sub-link">- 会社設立支援</a>
              <a href="" class="l-header__sub-link">- その他</a>
            </div>
          </li>
          <li class="l-header__list-item">
            <a href="" class="l-header__list-link">料金表</a>
          </li>
          <li class="l-header__list-item">
            <a href="" class="l-header__list-link">コラム</a>
          </li>
          <li class="l-header__list-item">
            <a href="" class="l-header__list-link">事務所概要</a>
          </li>
          <li class="l-header__list-item">
            <a href="" class="l-header__list-link">採用情報</a>
          </li>
          <li class="l-header__list-item">
            <a href="" class="l-header__list-link">お問い合わせ</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>