<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/functions.php"; ?>
<?php section('head'); ?>
<title>お申し込み｜買取デポ -商品券・ギフト券の買取サイト-</title>
<meta name="description" content="『買取デポ』へお申し込み希望のお客様は、こちらのフォーム入力を行い、手続きを完了してください。迅速な審査と丁寧なサポートで、ご要望に応えます。">
<meta property="og:locale" content="ja_JP">
<meta property="og:type" content="article">
<meta property="og:title" content="お申し込み｜買取デポ -商品券・ギフト券の買取サイト-">
<meta property="og:description" content="『買取デポ』へお申し込み希望のお客様は、こちらのフォーム入力を行い、手続きを完了してください。迅速な審査と丁寧なサポートで、ご要望に応えます。">
<meta property="og:url" content="<?php echo BASE_URL ?>/form/">
<link rel="canonical" href="<?php echo MAIN_URL ?>/form/">
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
        "name": "お申し込み",
        "item": "<?php echo BASE_URL; ?>form/"
      }
    ]
  }
</script>
<?php endsection(); ?>
<?php section('stylesheet'); ?>
<link rel="stylesheet" href="<?php asset('css/form.css', true) ?>">
<?php endsection(); ?>
<?php section('content'); ?>
<main>
  <section class="section">
    <div class="container">
      <h1 class="section_title section_title_img">
        買取査定お申し込み
      </h1>
      <form action="./send/" method="POST" id="applyForm" enctype="multipart/form-data">
       
        <div class="tab step2">
          <div class="progressbar-wrap">
            <ul class="progressbar">
              <li class="active">個人情報入力</li>
              <li>写真アップロード</li>
              <li>送信内容確認</li>
              <li>送信完了</li>
            </ul>
          </div>
          <h2 class="form_title">個人情報入力</h2>
          <dl>
            <dt class="require"><label for="fullname">お名前</label>
            </dt>
            <dd>
              <div class="form_group">
                <input type="text" name="fullname" id="fullname" placeholder="例：買取でぽ" required="" aria-invalid="true">
              </div>
            </dd>
          </dl>

          <dl>
            <dt class="require">
              <label for="furigana">フリガナ</label>
            </dt>
            <dd>
              <div class="form_group">
                <input type="text" name="furigana" id="furigana" placeholder="例：カイトリデポ" required="">
              </div>
            </dd>
          </dl>
          <dl>
            <dt class="require">
              <label for="address">ご住所</label>
            </dt>
            <dd>
              <div class="form_group">
                <input type="text" name="address" id="address" placeholder="例：東京都〇〇市△△町1-2-3" required="" aria-invalid="true">
              </div>
            </dd>
          </dl>
          <dl>
            <dt class="require">
              <label for="year">生年月日</label>
            </dt>
            <dd>
              <div class="form_group">
                <div class="date_group">
                  <input type="text" name="year" id="year" placeholder="例：1999" maxlength="4" inputmode="numeric" required="">
                  <span>年</span>
                  <input type="text" name="month" id="month" placeholder="例：1" maxlength="2" inputmode="numeric" required="">
                  <span>月</span>
                  <input type="text" name="day" id="day" placeholder="例：1" maxlength="2" inputmode="numeric" required="">
                  <span>日</span>
                </div>
              </div>
            </dd>
          </dl>

          <dl>
            <dt class="require">
              <label for="phone">電話番号</label>
            </dt>
            <dd>
              <div class="form_group">
                <input type="tel" name="phone" id="phone" maxlength="11" pattern="\d{10,11}" title="ハイフンなしの10桁から11桁の電話番号を半角数字で入力してください。" placeholder="例：01234567891" required="">
              </div>
            </dd>
          </dl>
          <dl>
            <dt class="require">
              <label for="email">メールアドレス</label>
            </dt>
            <dd>
              <div class="form_group">
                <input type="email" name="email" id="email" placeholder="例：mail@ds3811ds.com" required="">
              </div>
            </dd>
          </dl>

          <dl>
            <dt class="require">
              <label for="email_confirm">メールアドレス（再確認）</label>
            </dt>
            <dd>
              <div class="form_group">
                <input type="email" name="email_confirm" id="email_confirm" placeholder="※同じメールアドレスを再入力" required="">
              </div>
            </dd>
          </dl>
          <dl>
            <dt class="require">
              <label for="company_name">勤務先の会社名</label>
            </dt>
            <dd>
              <div class="form_group">
                <input type="text" name="company_name" id="company_name" placeholder="例：株式会社買取DEPO" required="" aria-invalid="true">
              </div>
            </dd>
          </dl>

          <dl>
            <dt class="require">
              <label for="company_address">勤務先のご住所</label>
            </dt>
            <dd>
              <div class="form_group">
                <input type="text" name="company_address" id="company_address" placeholder="例：東京都〇〇市△△町1-2-3" required="" aria-invalid="true">
              </div>
            </dd>

          </dl>

          <dl>
            <dt class="require">
              <label for="contact_info">勤務先の連絡先</label>
            </dt>
            <dd>
              <div class="form_group">
                <input type="tel" name="contact_info" id="contact_info" maxlength="11" pattern="\d{10,11}" title="ハイフンなしの10桁から11桁の電話番号を半角数字で入力してください。" placeholder="例：01234567891" required="">
              </div>
            </dd>
          </dl>

          <dl>
            <dt class="require">
              <label for="monthly_income">手取り月収（平均）</label>
            </dt>
            <dd>
              <div class="form_group">
                <input type="text" name="monthly_income" id="monthly_income" placeholder="例：毎月25万円" required="" aria-invalid="true">
              </div>
            </dd>
          </dl>

          <dl>
            <dt class="require">
              <label for="payday">給料日</label>
            </dt>
            <dd>
              <div class="form_group">
                <input type="text" name="payday" id="payday" placeholder="例：毎月25日" required="" aria-invalid="true">
              </div>
            </dd>
          </dl>
          <p class="note-bottom-form">
            続きまして<span class="red">身分証の写真アップロード</span>画面へ<br>
            お進みください。
          </p>
          <p class="text_center form_title">個人情報の取り扱いについて</p>
          <p class="mb-3 text_center">下記事項をご確認の上、同意していただける場合は<span class="red bold">同意する</span>にチェックを入れてください。
          </p>
          <div class="agreement">
            <div class="agreement_inner">
              <div class="agreement-area-inner">
                <div class="item-agreement">
                  <div class="text-area">
                    <p class="ttl-top">個人情報の取扱いについて</p>

                    <p class="ttl"> ■ 利用目的</p>
                    <p>この無料査定お申込みフォームでご提出いただく個人情報は、無料査定のお申込みまたはお問合せ事項に適切に対応し管理するために利用します。</p>

                    <p class="ttl"> ■ 第三者提供</p>
                    <p>法令に基づく場合を除いて、ご本人様の同意なく当個人情報を第三者に提供することはありません。</p>

                    <p class="ttl">■ 委託</p>
                    <p>当個人情報の取扱いを委託することがありますが、委託にあたっては、委託先における個人情報の安全管理が図られるよう、委託先に対する必要かつ適切な監督を行います。
                    </p>

                    <p class="ttl"> ■ 開示等のお求め</p>
                    <p>
                      当個人情報の利用目的の通知、開示、内容の訂正・追加または削除、利用の停止・消去および第三者への提供の停止（「開示等」といいます。）を受け付けております。開示等の求めは、以下の「個人情報苦情及び相談窓口」で受け付けます。
                    </p>

                    <p class="ttl"> ■ 個人情報をご入力するにあたっての注意事項</p>
                    <p>必要事項が記載されていない場合、最適なご回答ができない場合があります。</p>

                    <p class="ttl">■ 個人情報保護管理者</p>
                    <p>買取デポ</p>

                    <p class="ttl">■ 個人情報苦情及び相談窓口</p>
                    <p>
                      会社名：株式会社ステップ<br>
                      所在地：〒 192-0084 東京都八王子市三崎町4-11 トーネンビル５F<br>
                      電話番号：000-0000-0000<br>
                      営業時間：9時～19時（WEB査定：24時間）<br>
                      定休日：年中無休
                      <br>
                      上記にご同意のうえ、お問い合わせ下さい。
                    </p>
                  </div>
                  <div class="item-agreement-check-area">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="agreement_checkbox">
            <div class="form_group">
              <label for="agree">
                <input type="checkbox" name="agree" id="agree" required="required"> 「個人情報の取扱いについて」に同意する
              </label>
            </div>
          </div>
          <div class="form_action">
            <button type="button" class="btn previous">戻る</button>
            <button type="button" class="btn next">次へ進む</button>
          </div>
        </div>
        <div class="tab step3">
          <div class="progressbar-wrap">
            <ul class="progressbar">
              <li class="active">個人情報入力</li>
              <li class="active">写真アップロード</li>
              <li>送信内容確認</li>
              <li>送信完了</li>
            </ul>
          </div>
          <h2 class="form_title">売却希望の商品情報</h2>
          <dl>
            <dt class="require">
              <label for="purchase_method_1">買取方法を選択</label>
            </dt>
            <dd>
              <div class="form_group">
                <div class="check_group">
                  <label>
                    <input type="radio" name="purchase_method" id="purchase_method_1" value="フォトプラン：写真査定" required>フォトプラン：写真査定
                  </label>
                  <label>
                    <input type="radio" name="purchase_method" value="フォトプラン：郵送査定" required>フォトプラン：郵送査定
                  </label>
                </div>
              </div>
            </dd>
          </dl>
          <dl>
            <dt class="require">
              <label>買取商品の種類</label>
            </dt>
            <dd>
              <div class="form_group">
                <div class="check_group">
                  <label><input type="checkbox" name="purchased_product[]" id="purchased_product1" value="商品券" required>商品券</label>
                  <label><input type="checkbox" name="purchased_product[]" value="金券・ギフトカード" required>金券・ギフトカード</label>
                </div>
              </div>
            </dd>
          </dl>
          <h2 class="form_title">身分証の写真アップロード</h2>
          <div>
            <ul class="form_file_group">
              <li>
                <div class="label">自画撮り（セルフィー）</div>
                <div class="input form_group">
                  <input type="file" class="contactform-input-file" id="upfile1" name="upfile1">
                  <div id="upfile1_preview"></div>
                </div>
                <ul class="form_file_note">
                  <li>
                    ※身分証明書とご自身が<br>
                    一緒に写った写真
                  </li>
                </ul>
              </li>
              <li>
                <div class="label group">顔写真付き身分証明書</div>
                <div class="input group">
                  <div class="group_item">
                    <span class="item_label red bold">表面</span>
                    <div class="input form_group">
                      <input type="file" class="contactform-input-file" id="upfile2" name="upfile2">

                      <div id="upfile2_preview"></div>
                    </div>
                  </div>
                  <div class="group_item">
                    <span class="item_label red bold">裏面</span>
                    <div class="input form_group">
                      <input type="file" class="contactform-input-file" id="upfile3" name="upfile3">
                      <div id="upfile3_preview"></div>
                    </div>
                  </div>
                </div>
                <ul class="form_file_note">
                  <li>
                    ※マイナンバーカードや<br>
                    運転免許証など等
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="form_file_note">
              <li>※添付可能な画像のファイル形式はJPEG・PNG・GIFとなります。</li>
              <li>※添付ボタン1つにつき、添付可能な画像容量は5MBまでになります。</li>
            </ul>
          </div>
          <p class="note-bottom-form">最後に送信内容の確認画面へ<br>お進みください。</p>
          <div class="form_action">
            <button type="button" class="btn previous">戻る</button>
            <button type="button" class="btn next">入力内容の確認へ</button>
          </div>
        </div>
        <div class="tab">
          <div class="progressbar-wrap">
            <ul class="progressbar">
              <li class="active">個人情報入力</li>
              <li class="active">写真アップロード</li>
              <li class="active">送信内容確認</li>
              <li>送信完了</li>
            </ul>
          </div>
          <div class="note-top-form">
            <p class="note-top-form__ttl">送信内容確認</p>
            <p>
              以下の内容でよろしければ、ページ下の<br>
              <span class="red">送信する</span>ボタンをクリックしてください。
            </p>
          </div>
          <h2 class="form_title">個人情報</h2>
          <dl>
            <dt>お名前</dt>
            <dd>
              <span id="confirm_fullname"></span>
            </dd>
          </dl>
          <dl>
            <dt>フリガナ</dt>
            <dd>
              <span id="confirm_furigana"></span>
            </dd>
          </dl>
          <dl>
            <dt>ご住所</dt>
            <dd>
              <span id="confirm_address"></span>
            </dd>
          </dl>
          <dl>
            <dt>生年月日</dt>
            <dd>
              <span id="confirm_year"></span>年<span id="confirm_month"></span>月<span id="confirm_day"></span>日
            </dd>
          </dl>
          <dl>
            <dt>電話番号</dt>
            <dd>
              <span id="confirm_phone"></span>
            </dd>
          </dl>
          <dl>
            <dt>メールアドレス</dt>
            <dd>
              <span id="confirm_email"></span>
            </dd>
          </dl>
          <dl>
            <dt>勤務先の会社名</dt>
            <dd>
              <span id="confirm_company_name"></span>
            </dd>
          </dl>
          <dl>
            <dt>勤務先のご住所</dt>
            <dd>
              <span id="confirm_company_address"></span>
            </dd>
          </dl>
          <dl>
            <dt>勤務先の連絡先</dt>
            <dd>
              <span id="confirm_contact_info"></span>
            </dd>
          </dl>
          <dl>
            <dt>手取り月収（平均）</dt>
            <dd>
              <span id="confirm_monthly_income"></span>
            </dd>
          </dl>
          <dl>
            <dt>給料日</dt>
            <dd>
              <span id="confirm_payday"></span>
            </dd>
          </dl>

          <h2 class="form_title">売却希望の商品</h2>

          <dl>
            <dt>買取方法を選択</dt>
            <dd>
              <span id="confirm_purchase_method"></span>
            </dd>
          </dl>
          <dl>
            <dt>買取商品の種類</dt>
            <dd>
              <span id="confirm_purchased_product"></span>
            </dd>
          </dl>

          <h2 class="form_title">身分証の写真</h2>
          <dl>
            <dt>必要書類の添付</dt>
            <dd>
              <ul class="form_file_group">
                <li>
                  <div class="label">セルフィー（自画撮り）</div>
                  <div class="input form_group">
                    <div id="upfile1_confirm"></div>
                  </div>
                </li>
                <li>
                  <div class="label group">顔写真付きの身分証明書<br>（運転免許証など）</div>
                  <div class="input group">
                    <div class="group_item">
                      <span class="item_label red bold">表面の写真</span>
                      <div class="input form_group">
                        <div id="upfile2_confirm"></div>
                      </div>
                    </div>
                    <div class="group_item">
                      <span class="item_label red bold">裏面の写真</span>
                      <div class="input form_group">
                        <div id="upfile3_confirm"></div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </dd>
          </dl>
          <div class="form_action">
            <button type="button" class="btn previous">戻る</button>
            <button type="submit" name="action" value="send" class="btn  apply_link disabled"> 送信する</button>
          </div>
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
<?php require_once $_SERVER['DOCUMENT_ROOT'] . "/master.php"; ?>