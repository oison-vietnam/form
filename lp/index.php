<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/functions.php";
global $is_front_page;
$is_front_page = true; ?>
<?php section('head'); ?>
<title>TOP_TITLE</title>
<meta name="description" content="TOP_DESCRIPTION">
<meta property="og:locale" content="ja_JP">
<meta property="og:type" content="website">
<meta property="og:title" content="TOP_TITLE">
<meta property="og:description" content="TOP_DESCRIPTION">
<meta property="og:url" content="<?php echo BASE_URL ?>/">
<link rel="canonical" href="<?php echo MAIN_URL ?>/">
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "name": "SITE_NAME",
      "item": "<?php echo BASE_URL; ?>/"
    }]
  }
</script>
<?php endsection(); ?>
<?php section('stylesheet'); ?>
<?php if (is_not_test_speed()) : ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@900&display=swap" rel="stylesheet">

<?php endif; ?>
<link rel="stylesheet" href="<?php asset('libs//aos/aos.css') ?>">

<?php if (is_test_speed()) : ?>
  <!-- Preload the LCP image with a high fetchpriority so it starts loading with the stylesheet. -->
<?php endif; ?>
<?php endsection(); ?>
<?php section('content'); ?>
<main>
  
<?php endsection(); ?>
<?php section('script'); ?>
<?php endsection(); ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/master.php"; ?>