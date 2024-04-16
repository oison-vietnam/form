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
  <meta property="og:site_name" content="【ARUTEMISU アルテミス】">
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
  <link href="https://fonts.googleapis.com/css2?family=DotGothic16&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php asset('css/normalize.css', true) ?>">
  <link rel="stylesheet" href="<?php asset('css/style.css', true) ?>">
  <?php stack('stylesheet'); ?>
  <?php stack('after_head'); ?>
</head>

<body>
  <?php stack('after_body'); ?>
  <header id="site_header">
    <div class="header_logo">
      <a href="<?php lp_home_url() ?>">
        <img class="logo" src="<?php asset('images/logo.webp') ?>" alt="<?php site_name(); ?>" width="241" height="82">
      </a>
    </div>
  </header>
  <?php stack('content'); ?>
  <footer id="site_footer">
    <div class="container">
      <div class="footer_wrap">
        <div class="footer-logo">
          <a href="<?php lp_home_url() ?>">
            <img class="logo" src="<?php asset('images/logo-footer.svg') ?>" alt="<?php site_name(); ?>" width="274" height="78">
          </a>
        </div>
        <p class="copyright">
          <span class="txt_grd">Copyright © 2024 アルテミス Corporation.</span>
        </p>
      </div>
    </div>
  </footer>
  <a href="<?php lp_home_url(); ?>" id="back_to_top">
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