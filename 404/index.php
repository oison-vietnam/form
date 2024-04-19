<?php
global $robots;
$robots = 'noindex';
require_once(__DIR__ . "/../functions.php"); ?>
<?php section('head'); ?><title>404 NOT FOUND｜ARTEMIS -アルテミス-</title>
<meta name="description" content="お探しのページが見つかりませんでした。お客様がアクセスしようとしたページは存在しないか、移動または削除された可能性があります">
<meta property="og:title" content="404 NOT FOUND｜ARTEMIS -アルテミス-">
<meta property="og:description" content="お探しのページが見つかりませんでした。お客様がアクセスしようとしたページは存在しないか、移動または削除された可能性があります">
<?php endsection(); ?>
<?php section('after_head'); ?>
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "<?php site_name(); ?>",
        "item": "<?php lp_home_url(); ?>"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "404 NOT FOUND",
        "item": "<?php current_url(); ?>"
      }
    ]
  }
</script>
<style>
  .page_404_content {
    text-align: center;
    padding: 5rem 0;
  }
</style>
<?php endsection(); ?>
<?php section('content'); ?>
<main id="page_content">
  <div class="section privacy_section">

    <div class="breadcrumbs">
      <div class="breadcrumb">
        <span><a href="<?php lp_home_url(); ?>">
            <img src="<?php asset('images/icon-home.svg'); ?>" alt="<?php site_name(); ?>" width="50" height="50">
          </a></span>
        <span>　&gt;　</span>
        <span>404 NOT FOUND</span>
      </div>
    </div>
    <div class="container">
      <div class="page_404_content">
        <h1 class="comn-title">404 Not Found<br>ページが見つかりません。</h1>
        <div class="content">
          <p>
            URLが正しく入力されているかお確かめください。<br>
            URLが正しく、かつブラウザで再読み込みしても表示されない場合は、<br>
            ページが移動または削除された可能性があります。
          </p>
          <p class="button_back_top">
            <a class="button-neon button-neon-1" href="<?php lp_home_url(); ?>">TOPに戻る</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</main>
<?php endsection(); ?>
<?php require_once(__DIR__ . "/../master.php"); ?>