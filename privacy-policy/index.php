<?php
global $robots;
$robots = 'noindex';
require_once __DIR__ . "/../functions.php"; ?>
<?php section('head'); ?>
<title>プライバシーポリシー｜ARTEMIS -アルテミス-</title>
<meta name="description" content="ARTEMIS（アルテミス）のプライバシーポリシーについてご紹介いたします。">
<meta property="og:title" content="プライバシーポリシー｜ARTEMIS -アルテミス-">
<meta property="og:description" content="ARTEMIS（アルテミス）のプライバシーポリシーについてご紹介いたします。">

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
        "name": "プライバシーポリシー",
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
        <span>プライバシーポリシー</span>
      </div>
    </div>
    <div class="container">
      <div class="section_title inview">
        <h1 class="section_title_txt">
          <span class="title_bg">
            <span class="number">Privacy Policy</span>
          </span>
          <span class="txt">
            <span class="title_bg">
              <span>プライバシーポリシー</span>
            </span>
          </span>
        </h1>
      </div>
      <div class="privacy-content">

        <p>ARTEMIS アルテミス（以下，「当社」といいます。）は，本ウェブサイト上で提供するサービス（以下,「本サービス」といいます。）における，ユーザーの個人情報の取扱いについて，以下のとおりプライバシーポリシー（以下，「本ポリシー」といいます。）を定めます。</p>
        <h3 class="wp-block-heading">■ 第1条（個人情報）</h3>
        <p>「個人情報」とは，個人情報保護法にいう「個人情報」を指すものとし，生存する個人に関する情報であって，当該情報に含まれる氏名，生年月日，住所，電話番号，連絡先その他の記述等により特定の個人を識別できる情報及び容貌，指紋，声紋にかかるデータ，及び健康保険証の保険者番号などの当該情報単体から特定の個人を識別できる情報（個人識別情報）を指します。</p>
        <h3 class="wp-block-heading">■ 第2条（個人情報の収集方法）</h3>
        <p>当社は，ユーザーが利用登録をする際に氏名，生年月日，住所，電話番号，メールアドレス，銀行口座番号，運転免許証番号などの個人情報をお尋ねすることがあります。また、Google株式会社をはじめとする第三者から配信される広告が掲載される場合があり、これに関連して、当該第三者が、当社を訪問したユーザーのクッキー情報等を取得し、利用している場合があります。</p>
        <h3 class="wp-block-heading">＜クッキーとは＞</h3>
        <p>クッキーとは、ウェブページを利用したときに、ブラウザとサーバーとの間で送受信した利用履歴や入力内容などを、お客様のコンピュータにファイルとして保存しておく仕組みです。</p>
        <p>Google株式会社等第三者によって取得されたクッキー情報等は、当該第三者のプライバシーポリシーに従って取り扱われます。<br>ユーザーは、当該第三者のウェブサイト内に設けられたオプトアウトページにアクセスして、当該第三者によるクッキー情報等の広告配信への利用を停止することができます。</p>
        <p>また、ユーザーはブラウザ上で「クッキーを拒否する」設定を行うことも可能です。設定方法はブラウザにより異なるため、各ブラウザのヘルプをご確認ください。</p>
        <h3 class="wp-block-heading">■ 第3条（個人情報を収集・利用する目的）</h3>
        <p>当社が個人情報を収集・利用する目的は，以下のとおりです。</p>
        <ol>
          <li>当社サービスの提供・運営のため</li>
          <li>ユーザーからのお問い合わせに回答するため（本人確認を行うことを含む）</li>
          <li>ユーザーが利用中のサービスのキャンペーン等及び当社が提供する他のサービスの案内のメールを送付するため</li>
          <li>メンテナンス，重要なお知らせなど必要に応じたご連絡のため</li>
          <li>利用規約に違反したユーザーや，不正・不当な目的でサービスを利用しようとするユーザーの特定をし，ご利用をお断りするため</li>
          <li>上記の利用目的に付随する目的</li>
        </ol>
        <h3 class="wp-block-heading">■ 第4条（利用目的の変更）</h3>
        <p>当社は，利用目的が変更前と関連性を有すると合理的に認められる場合に限り，個人情報の利用目的を変更するものとします。</p>
        <p>また、利用目的の変更を行った場合には，変更後の目的について，当社所定の方法により，ユーザーに通知し，または本ウェブサイト上に公表するものとします。</p>
        <h3 class="wp-block-heading">■ 第5条（個人情報の第三者提供）</h3>
        <p>当社は，次に掲げる場合を除いて，あらかじめユーザーの同意を得ることなく，第三者に個人情報を提供することはありません。ただし，個人情報保護法その他の法令で認められる場合を除きます。</p>
        <ol>
          <li>人の生命，身体または財産の保護のために必要がある場合であって，本人の同意を得ることが困難であるとき</li>
          <li>公衆衛生の向上または児童の健全な育成の推進のために特に必要がある場合であって，本人の同意を得ることが困難であるとき</li>
          <li>国の機関もしくは地方公共団体またはその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合であって，本人の同意を得ることにより当該事務の遂行に支障を及ぼすおそれがあるとき</li>
          <li>予め次の事項を告知あるいは公表し，かつ当社が個人情報保護委員会に届出をしたとき
            <ul>
              <li>利用目的に第三者への提供を含むこと</li>
              <li>第三者に提供されるデータの項目</li>
              <li>第三者への提供の手段または方法</li>
              <li>本人の求めに応じて個人情報の第三者への提供を停止すること</li>
              <li>本人の求めを受け付ける方法</li>
            </ul>
          </li>
        </ol>
        <h3 class="wp-block-heading">■ 第6条（個人情報の開示）</h3>
        <p>当社は，本人から個人情報の開示を求められたときは，本人に対し，遅滞なくこれを開示します。第10条に定める問い合わせ窓口を設置し、適切かつ迅速な対応に尽力いたします。</p>
        <h3 class="wp-block-heading">■ 第7条（個人情報の訂正および削除）</h3>
        <p>ユーザーは，当社の保有する自己の個人情報が誤った情報である場合には，当社が定める手続きにより，当社に対して個人情報の訂正，追加または削除（以下，「訂正等」といいます。）を請求することができます。</p>
        <p>当社は，ユーザーから前項の請求を受けてその請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の訂正等を行うものとします。</p>
        <p>その際、ご本人であることが確認できない場合は、開示及び訂正等には応じません。</p>
        <h3 class="wp-block-heading">■ 第8条（個人情報の利用停止等）</h3>
        <p>当社は，本人から，個人情報が，利用目的の範囲を超えて取り扱われているという理由，または不正の手段により取得されたものであるという理由により，その利用の停止または消去（以下，「利用停止等」といいます。）を求められた場合には，遅滞なく必要な調査を行います。</p>
        <p>前項の調査結果に基づき，その請求に応じる必要があると判断した場合には，遅滞なく，当該個人情報の利用停止等を行います。</p>
        <p>また当社は，規定に基づき利用停止等を行った場合，または利用停止等を行わない旨の決定をしたときは，遅滞なく，これをユーザーに通知します。</p>
        <h3 class="wp-block-heading">■ 第9条（プライバシーポリシーの変更）</h3>
        <p>本ポリシーの内容は，法令その他本ポリシーに別段の定めのある事項を除いて，ユーザーに通知することなく，変更することができるものとします。</p>
        <p>当社が別途定める場合を除いて，変更後のプライバシーポリシーは，本ウェブサイトに掲載したときから効力を生じるものとします。</p>
        <h3 class="wp-block-heading">■ 第10条（お問い合わせ窓口）</h3>
        <p>本ポリシーに関するお問い合わせは，下記の窓口までお願いいたします。</p>
        <p>
          サイト名：ARTEMIS（アルテミス）<br>
          電話番号：<a class="txt_grd" href="tel:+000-0000-0000">000-0000-0000</a><br>
          営業時間：9時～19時<br>
          定休日：年中無休<br>
          古物商許可番号：XXXXXXXX
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