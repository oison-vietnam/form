<?php
if (!defined('CORE'))
  return;
require_once __DIR__ . "/functions.php"; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no, email=no, address=no">
  <meta name="robots" content="noindex,nofollow">
  <?php stack('head'); ?>
  <meta property="og:site_name" content="【SITE_NAME】">
  <meta property="og:image" content="<?php asset('images/og-image.png') ?>">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:type" content="image/jpeg">
  <meta name="twitter:card" content="summary_large_image">
  <link rel="dns-prefetch" href="//apis.google.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="dns-prefetch" href="//platform.twitter.com">
  <link rel="dns-prefetch" href="//connect.facebook.net">
  <link rel="dns-prefetch" href="//www.facebook.com">
  <link rel="dns-prefetch" href="//www.google-analytics.com">
  <link rel="icon" type="image/png" href="<?php echo BASE_URL ?>/favicon.png">
  <link rel="apple-touch-icon" href="<?php echo BASE_URL ?>/favicon.png">
  <meta name="msapplication-TileImage" content="<?php echo BASE_URL ?>/favicon.png">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  <link rel="stylesheet" href="<?php asset('css/normalize.css', true) ?>">
  <link rel="stylesheet" href="<?php asset('css/style.css', true) ?>">
  <?php stack('stylesheet'); ?>
  <?php stack('after_head'); ?>
</head>

<body>
  <?php stack('after_body'); ?>
  <header id="site_header">
    <div class="header">
      <div class="header-logo">
        <a href="<?php url() ?>">
          <picture id="logo">
            <source media="(min-width:768px)" srcset="<?php asset('images/logo.webp') ?>">
            <img src="<?php asset('images/logo.webp') ?>" alt="最短5分の最速買取" width="300" height="155">
          </picture>

        </a>
      </div>
      <div class="header-right">
        <div class="btnripple ">
          <div class="btnripple_arrow">
            <a href="<?php url('form/') ?>" class="btn_contact">
              <span>お申し込みはこちら</span>
              <span class="lg">査定依頼へ進む</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <?php stack('content'); ?>

  <footer id="site_footer">
    <div class="container">
      <div class="footer_wrap">
        
        <div class="footer_info">
          TEL：<a href="tel:000-0000-0000">000-0000-0000</a><br>
          営業時間：9時～19時（WEB査定：24時間）<br>
          定休日：年中無休
        </div>
        <p class="copyright">Copyright © 2023 SITE_NAME.</p>
      </div>
    </div>
  </footer>
  <input type="checkbox" id="overlay-input">
  <label for="overlay-input" id="overlay-button"><span></span></label>
  <div id="overlay">
    <div class="overlay_wrap">
      <img class="logo" src="<?php asset('images/logo.webp') ?>" alt="最短5分の最速買取" width="200" height="86">
      <ul>
        <li>
          <a href="<?php url() ?>">TOP</a>
        </li>
        <li>
          <a href="<?php url('privacy-policy/') ?>">プライバシーポリシー</a>
        </li>
      </ul>
      <div class="conpany_info">
        営業時間：9時～19時（WEB査定：24時間）<br>
        定休日：年中無休
      </div>
    </div>
  </div>
  <a href="<?php echo BASE_URL; ?>" id="back_to_top">
    <span class="btt-inn">
      <img src="<?php asset('images/back_to_top.svg') ?> " alt="To TOP" width="70" height="71">
    </span>
  </a>
  <?php stack('footer'); ?>
  <script src="<?php asset('libs/jquery.js'); ?>"></script>
  <script src="<?php asset('js/script.js'); ?>"></script>
  <?php stack('script'); ?>
</body>

</html>