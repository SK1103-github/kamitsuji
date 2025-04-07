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
<link rel="stylesheet" type="text/css" href="assets/css/style.css" />

<!-- ▼ font -->

<!-- ▼ js -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="assets/js/function.js"></script>

<!-- ▼ ファビコン -->
<link rel="apple-touch-icon" href="images/favicon/favicon.ico">
<link rel="SHORTCUT ICON" href="images/favicon/favicon.ico">
<link rel="icon" href="images/favicon/favicon.ico">

<!-- ▼ サイトタイトル -->
<title></title>
</head>
<body>
