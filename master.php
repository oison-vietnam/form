<?php
if (!defined('CORE'))
  return;
global $is_front_page;
require_once __DIR__ . "/functions.php"; ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no, email=no, address=no">
  <?php meta_robots(); ?>
  <?php stack('head'); ?>
  <meta property="og:locale" content="ja_JP">
  <meta property="og:type" content="<?php $is_front_page ? 'website' : 'article'; ?>">
  <meta property="og:site_name" content="<?php site_name(); ?>">
  <meta property="og:image" content="<?php asset('images/og-image.png') ?>">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:type" content="image/jpeg">
  <meta name="twitter:card" content="summary_large_image">
  <link rel="icon" type="image/png" href="<?php lp_home_url(); ?>favicon.png">
  <link rel="apple-touch-icon" href="<?php lp_home_url(); ?>favicon.png">
  <meta name="msapplication-TileImage" content="<?php lp_home_url(); ?>favicon.png">
  <meta property="og:url" content="<?php echo get_current_canonical(); ?>">
  <link rel="canonical" href="<?php echo get_current_canonical(); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php if (is_not_test_speed()) : ?>
    <link href="https://fonts.googleapis.com/css2?family=DotGothic16&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <?php endif; ?>
  <link rel="stylesheet" href="<?php asset('css/normalize.css', true) ?>">
  <link rel="stylesheet" href="<?php asset('css/style.css', true) ?>">
  <?php stack('stylesheet'); ?>
  <?php stack('after_head'); ?>
</head>

<body class="<?php echo $is_front_page ? "top" : "page"; ?>">
  <?php stack('after_body'); ?>
  <header id="site_header">
    <div class="header_logo">
      <a href="<?php lp_home_url() ?>">
        <img class="logo" src="<?php asset('images/logo.webp') ?>" alt="<?php site_name(); ?>" width="241" height="82">
      </a>
    </div>
  </header>
  <div id="header_fixed">
    <div class="container">
      <div class="application_btn">
        <a class="button-neon button-neon-1" href="<?php lp_home_url('application'); ?>">買取依頼はこちら</a>
      </div>
      <a href="#menu" role="button" class="menu_toggle">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
      </a>
    </div>
  </div>
  <div id="menu">
    <div class="menu_wrap">
      <div class="menu_logo">
        <a href="<?php lp_home_url() ?>">
          <img class="logo" src="<?php asset('images/logo.webp') ?>" alt="<?php site_name(); ?>" width="241" height="82">
        </a>
      </div>
      <div class="application_btn">
        <a class="button-neon button-neon-1" href="<?php lp_home_url('application'); ?>">買取依頼はこちら</a>
      </div>
      <div class="menu_nav">
        <ul>
          <li>
            <a class="txt_grd" href="<?php lp_home_url() ?>">
              TOP
            </a>
          </li>
          <li>
            <a class="txt_grd" href="<?php lp_home_url('privacy-policy'); ?>">プライバシーポリシー</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <?php stack('content'); ?>
  <footer id="site_footer">
    <div class="container">
      <div class="footer_wrap">
        <div class="footer-logo">
          <a href="<?php lp_home_url() ?>">
            <img class="logo" src="<?php asset('images/logo-footer.svg') ?>" alt="<?php site_name(); ?>" width="274" height="78">
          </a>
        </div>
        <ul class="menu_footer">
          <li>
            <a class="txt_grd" href="<?php lp_home_url('privacy-policy'); ?>">プライバシーポリシー</a>
          </li>
        </ul>
        <p class="copyright">
          <span>Copyright © 2024 アルテミス Corporation.</span>
        </p>
      </div>
    </div>
  </footer>
  <a href="<?php lp_home_url(); ?>" id="back_to_top">
    <span class="inn">
      <img src="<?php asset('images/icon_to_top.svg') ?> " alt="TOPへ戻る" width="70" height="71">
    </span>
  </a>
  <?php stack('footer'); ?>
  <script src="<?php asset('libs/jquery.js'); ?>"></script>
  <script src="<?php asset('libs/jquery.inview.min.js'); ?>"></script>
  <script src="<?php asset('js/script.js'); ?>"></script>
  <?php stack('script'); ?>
</body>

</html>