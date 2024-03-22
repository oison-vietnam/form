<?php require_once __DIR__. "/functions.php";
global $is_front_page;
$is_front_page = true; ?>
<?php section('head'); ?>
<title>TOP_TITLE</title>
<meta name="description" content="TOP_DESCRIPTION">
<meta property="og:locale" content="ja_JP">
<meta property="og:type" content="website">
<meta property="og:title" content="TOP_TITLE">
<meta property="og:description" content="TOP_DESCRIPTION">
<meta property="og:url" content="<?php home_url(); ?>">
<link rel="canonical" href="<?php home_url(); ?>">
<?php endsection(); ?>
<?php section('stylesheet'); ?>
<?php if (is_not_test_speed()) : ?>
<?php endif; ?>
<link rel="stylesheet" href="<?php asset('libs//aos/aos.css') ?>">
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
        "item": "<?php home_url(); ?>"
      }]
    }
  </script>
<?php endsection(); ?>
<?php section('content'); ?>
<main>
  
<?php endsection(); ?>
<?php section('script'); ?>
<?php endsection(); ?>
<?php require_once __DIR__ . "/master.php"; ?>