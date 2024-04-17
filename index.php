<?php require_once __DIR__ . "/functions.php";
global $is_front_page;
$is_front_page = true; ?>
<?php section('head'); ?>
<title>ARUTEMISU -アルテミス-｜商品券とギフト券を高額買取＆最速5分でお振込み！</title>
<meta name="description" content="ARUTEMISU（アルテミス）は商品券＆ギフト券の買取専門店です。最速！高額！簡単！の3拍子で満足度No.1！お申し込みから手続きまで、全てWEB上で可能ですので、お手元に売りたい商品がございましたら、ぜひご相談くださいませ。">
<meta property="og:title" content="ARUTEMISU -アルテミス-｜商品券とギフト券を高額買取＆最速5分でお振込み！">
<meta property="og:description" content="ARUTEMISU（アルテミス）は商品券＆ギフト券の買取専門店です。最速！高額！簡単！の3拍子で満足度No.1！お申し込みから手続きまで、全てWEB上で可能ですので、お手元に売りたい商品がございましたら、ぜひご相談くださいませ。">
<?php endsection(); ?>
<?php section('stylesheet'); ?>
<?php if (is_not_test_speed()) : ?>
  <link rel="stylesheet" href="<?php asset('css/fonts.css') ?>">
<?php endif; ?>
<link rel="stylesheet" href="<?php asset('css/top.css') ?>">
<link rel="stylesheet" href="<?php asset('libs/aos/aos.css') ?>">
<?php if (is_test_speed()) : ?>
  <!-- Preload the LCP image with a high fetchpriority so it starts loading with the stylesheet. -->
<?php endif; ?>
<?php endsection(); ?>
<?php section('after_head'); ?>
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "name": "SITE_NAME",
      "item": "<?php lp_home_url(); ?>"
    }]
  }
</script>
<?php endsection(); ?>
<?php section('content'); ?>
<main>
  <?php require_once __DIR__ . "/section/main.php"; ?>
  <?php require_once __DIR__ . "/section/section1.php"; ?>
  <?php require_once __DIR__ . "/section/section2.php"; ?>
  <?php require_once __DIR__ . "/section/section3.php"; ?>
  <?php require_once __DIR__ . "/section/section4.php"; ?>
  <?php require_once __DIR__ . "/section/section5.php"; ?>
  <?php require_once __DIR__ . "/section/faq.php"; ?>
  </div>
</main>
<div id="button_fixed">
  <?php include __DIR__ . "/section/button.php"; ?>
</div>
<?php endsection(); ?>
<?php section('script'); ?>
<?php endsection(); ?>
<?php require_once __DIR__ . "/master.php"; ?>