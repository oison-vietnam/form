<?php
global $robots;
$robots = 'noindex';
require_once __DIR__ . "/../functions.php"; ?>
<?php section('head'); ?>
<title>送信完了｜ARTEMIS -アルテミス-</title>
<meta name="description" content="ARTEMIS（アルテミス）へのお申し込みが正常に受け付けられました。お申し込みいただき、誠にありがとうございました。">
<meta property="og:title" content="送信完了｜ARTEMIS -アルテミス-">
<meta property="og:description" content="ARTEMIS（アルテミス）へのお申し込みが正常に受け付けられました。お申し込みいただき、誠にありがとうございました。">

<?php
//Nếu có tracking trong head thì tạo file tracking_head.php trong thư mục thanks trên hosting
//Dev trên localhost thì ko cần thêm để tránh test và upload code không bị ghi đè
if (file_exists(__DIR__ . "/tracking_head.php")) require_once __DIR__ . "/tracking_head.php"; ?>
<?php endsection(); ?>
<?php section('stylesheet'); ?>
<link rel="stylesheet" href="<?php asset('css/thanks.css', true) ?>">
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
        "name": "送信完了",
        "item": "<?php current_url(); ?>"
      }
    ]
  }
</script>
<?php endsection(); ?>
<?php section('after_body'); ?>
<?php
//Nếu có tracking trong body thì tạo file tracking_body.php trong thư mục thanks trên hosting
//Dev trên localhost thì ko cần thêm để tránh test và upload code không bị ghi đè
if (file_exists(__DIR__ . "/tracking_body.php")) require_once __DIR__ . "/tracking_body.php"; ?>
<?php endsection(); ?>
<?php section('content'); ?>

<main id="page_content">
  <section class="section">
    <div class="breadcrumbs">
      <div class="breadcrumb">
        <span><a href="<?php lp_home_url(); ?>">
            <img src="<?php asset('images/icon-home.svg'); ?>" alt="<?php site_name(); ?>" width="50" height="50">
          </a></span>
        <span>　&gt;　</span>
        <span>送信完了</span>
      </div>
    </div>
    <div class="container">
      <div class="section_title inview">
        <h1 class="section_title_txt">
          <span class="title_bg">
            <span class="number">Thanks</span>
          </span>
          <span class="txt">
            <span class="title_bg">
              <span>送信完了</span>
            </span>
          </span>
        </h1>
      </div>
      <div class="thanks-content">
        <p>お問い合わせ頂き、<br class="hide_pc">誠にありがとうございます。</p>
        <p>
          この度は弊社の買取査定サービスへ<br class="hide_pc">お申込みをいただき<br>
          誠にありがとうございます。<br>
          買取サービスのご利用方法や手続きについては<br>
          以下の公式LINEアカウントをご登録いただくと<br class="hide_pc">便利ですので是非ご活用ください。
        </p>
        <div class="line_wrap">
          <div class="line_content">
            <a href="https://lin.ee/XXXXXX" target="_blank" class="line">
              <span class="strong">［公式LINE］</span><br>
              <hr class="line1">
              下記のURLより、公式LINEアカウントを<br class="hide_pc">登録することができます。<br>
              <br>
              公式アカウント<br>
              https://lin.ee/XXXXXX<br>
              <hr class="line1">
            </a>
          </div>
          <div class="line_bg">
            <img src="<?php asset('images/thank_bg.webp'); ?>" alt="［公式LINE］" width="786" height="540">
          </div>
        </div>

        <p>
          ※確認のためお客様へ自動返信メールを<br class="hide_pc">お送りさせて頂きました。<br>
          万が一、自動返信メールが届いてない場合は<br>
          お手数ですが、<br class="hide_pc">再度ご連絡くださいますようお願い致します。
        </p>
        <p class="button_back_top">
          <a class="button-neon button-neon-1" href="<?php lp_home_url(); ?>">TOPに戻る</a>
        </p>

      </div>
    </div>
  </section>
</main>

<?php endsection(); ?>
<?php require_once __DIR__ . "/../master.php"; ?>