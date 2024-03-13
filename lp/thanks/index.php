<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/functions.php"; ?>
<?php section('head'); ?>
<title>送信完了｜買取デポ -商品券・ギフト券の買取サイト-</title>
<meta name="description" content="『買取デポ』へのお申し込みが正常に送信されました。手続きが完了したことをお知らせします。詳細な内容については、ご入力いただいたメールアドレスに確認メールをお送りしています。">
<meta property="og:locale" content="ja_JP">
<meta property="og:type" content="article">
<meta property="og:title" content="送信完了｜買取デポ -商品券・ギフト券の買取サイト-">
<meta property="og:description" content="『買取デポ』へのお申し込みが正常に送信されました。手続きが完了したことをお知らせします。詳細な内容については、ご入力いただいたメールアドレスに確認メールをお送りしています。">
<meta property="og:url" content="<?php echo BASE_URL ?>/thanks/">
<link rel="canonical" href="<?php echo MAIN_URL ?>/thanks/">

<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [{
        "@type": "ListItem",
        "position": 1,
        "name": "【SITE_NAME】",
        "item": "<?php echo BASE_URL; ?>/"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "送信完了",
        "item": "<?php echo BASE_URL; ?>/thanks/"
      }
    ]
  }
</script>
<?php
//Nếu có tracking trong head thì tạo file tracking_head.php trong thư mục thanks trên hosting
//Dev trên localhost thì ko cần thêm để tránh test và upload code không bị ghi đè
 if(file_exists( __DIR__ . "/tracking_head.php")) require_once __DIR__ . "/tracking_head.php"; ?>

<?php endsection(); ?>
<?php section('stylesheet'); ?>
<link rel="stylesheet" href="<?php asset('css/form.css', true) ?>">
<?php endsection(); ?>
<?php section('after_body'); ?>
<?php 
//Nếu có tracking trong body thì tạo file tracking_body.php trong thư mục thanks trên hosting
//Dev trên localhost thì ko cần thêm để tránh test và upload code không bị ghi đè
if(file_exists( __DIR__ . "/tracking_body.php")) require_once __DIR__ . "/tracking_body.php"; ?>
<?php endsection(); ?>
<?php section('content'); ?>

<main>
  <section class="section">
    <div class="container">
      <h1 class="section_title section_title_img">
        <img src="<?php asset('images/title_thanks.webp', true) ?>" alt="送信完了" width="930" height="210">
      </h1>
      <div class="thanks-content">
        <p>お問い合わせ頂き、<br class="hide-pc">誠にありがとうございます。</p>
        <p>
          この度は弊社の買取査定サービスへ<br class="hide-pc">お申込みをいただき<br>
          誠にありがとうございます。<br>
          買取サービスのご利用方法や手続きについては<br>
          以下の公式LINEアカウントをご登録いただくと<br class="hide-pc">便利ですので是非ご活用ください。
        </p>
        <a href="https://lin.ee/XXXXXX" target="_blank" class="line">
          <span class="strong">［公式LINE］</span><br>
          <hr class="line1">
          下記のURLより、公式LINEアカウントを<br class="hide-pc">登録することができます。<br>
          <br>
          公式アカウント<br>
          https://lin.ee/XXXXXX<br>
          <hr class="line1">
        </a>
        <p>
          ※確認のためお客様へ自動返信メールを<br class="hide-pc">お送りさせて頂きました。<br>
          万が一、自動返信メールが届いてない場合は<br>
          お手数ですが、<br class="hide-pc">再度ご連絡くださいますようお願い致します。
        </p>
        <p class="back_to_top">
          <a href="<?php echo BASE_URL ?>/">TOPに戻る</a>
        </p>
      </div>
    </div>
  </section>
</main>

<?php endsection(); ?>
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/master.php"; ?>