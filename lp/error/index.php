<?php
global $robots;
$robots = 'noindex';
require_once(__DIR__ . "/../functions.php"); ?>
<?php section('head'); ?><title>メッセージの送信に失敗しました ｜買取フランク</title>
<meta name="description" content="『買取フランク』のメッセージの送信に失敗しました についての情報を提供、ご紹介いたします。お客様の個人情報の取り扱いについての方針や、その保護に関する取り組みをご確認ください。">
<meta property="og:title" content="メッセージの送信に失敗しました ｜買取フランク">
<meta property="og:description" content="『買取フランク』のメッセージの送信に失敗しました についての情報を提供、ご紹介いたします。お客様の個人情報の取り扱いについての方針や、その保護に関する取り組みをご確認ください。">
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
        "name": "メッセージの送信に失敗しました",
        "item": "<?php current_url(); ?>"
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
        <h1 class="comn-title">メッセージの送信に失敗しました</h1>
        <div class="content">
          <p>
            誠に申し訳ございません<br>
            フォームの送信中にエラーが発生いたしました。<br>
            通信環境をご確認の上、時間をおいて<br>
            再度フォームから送信をお願い申し上げます。
          </p>
          <p class="back_to_top">
            <a href="../form/">フォームへ移動する</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</main>
<?php endsection(); ?>
<?php require_once(__DIR__ . "/../master.php"); ?>