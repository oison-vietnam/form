<?php
global $robots;
$robots = 'noindex';
require_once(__DIR__ . "/../functions.php"); ?>
<?php section('head'); ?><title>404ページ ｜買取フランク</title>
<meta name="description" content="『買取フランク』の404ページ についての情報を提供、ご紹介いたします。お客様の個人情報の取り扱いについての方針や、その保護に関する取り組みをご確認ください。">
<meta property="og:title" content="404ページ ｜買取フランク">
<meta property="og:description" content="『買取フランク』の404ページ についての情報を提供、ご紹介いたします。お客様の個人情報の取り扱いについての方針や、その保護に関する取り組みをご確認ください。">
<?php endsection(); ?>
<?php section('after_head'); ?>
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "【買取フランク Kaitori Frank】",
        "item": "<?php lp_home_url(); ?>"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "404ページ",
        "item": "<?php lp_home_url('404'); ?>"
      }
    ]
  }
</script>
<style>
  .page_404_content{
    text-align: center;
    padding: 5rem 0;
  }
</style>
<?php endsection(); ?>
<?php section('content'); ?>
<main>
  <div class="section privacy_section">
    <div class="container">
      <div class="page_404_content">
        <h1 class="comn-title">404 Not Found<br>ページが見つかりません。</h1>
        <div class="content">
          <p>
            URLが正しく入力されているかお確かめください。<br>
            URLが正しく、かつブラウザで再読み込みしても表示されない場合は、<br>
            ページが移動または削除された可能性があります。
          </p>
          <p class="back_to_top">
            <a href="../">TOPに戻る</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</main>
<?php endsection(); ?>
<?php require_once(__DIR__ . "/../master.php"); ?>