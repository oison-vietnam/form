<?php require_once __DIR__ . "/../functions.php"; ?>
<?php section('head'); ?>
<title>買取査定お申し込み｜ARTEMIS -アルテミス-</title>
<meta name="description" content="ARTEMIS（アルテミス）の買取査定お申し込みのフォームページになります。お申し込み希望の方は必要事項を入力し、送信ボタンをクリックしてください。">
<meta property="og:title" content="買取査定お申し込み｜ARTEMIS -アルテミス-">
<meta property="og:description" content="ARTEMIS（アルテミス）の買取査定お申し込みのフォームページになります。お申し込み希望の方は必要事項を入力し、送信ボタンをクリックしてください。">
<?php endsection(); ?>
<?php section('stylesheet'); ?>
<link rel="stylesheet" href="<?php asset('css/form.css', true) ?>">
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
        "name": "買取査定お申し込み",
        "item": "<?php current_url(); ?>"
      }
    ]
  }
</script>
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
        <span>買取査定お申し込み</span>
      </div>
    </div>
    <div class="container">
      <div class="section_title inview">
        <h1 class="section_title_txt">
          <span class="title_bg">
            <span class="number">Application</span>
          </span>
          <span class="txt">
            <span class="title_bg">
              <span>買取査定お申し込み</span>
            </span>
          </span>
        </h1>
      </div>
      <form action="./send.php" method="POST" id="applyForm" enctype="multipart/form-data">
        <div class="tab step1">
          <?php require_once __DIR__ . "/step_input.php"; ?>
        </div>
        <div class="tab step2">
          <?php require_once __DIR__ . "/step_confirm.php"; ?>
        </div>

      </form>
    </div>
  </section>
</main>
<?php endsection(); ?>
<?php section('script'); ?>
<script src="<?php asset('libs/kana_text.js'); ?>"></script>
<script src="<?php asset('libs/jquery.jpostal.js'); ?>"></script>
<script src="<?php asset('libs/jquery.validate.min.js'); ?>"></script>
<script src="<?php asset('libs/multi-form.js'); ?>"></script>
<script src="<?php asset('js/form.js', true); ?>"></script>
<?php endsection(); ?>
<?php require_once __DIR__ . "/../master.php"; ?>