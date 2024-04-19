<div class="progressbar-wrap">
  <ul class="progressbar">
    <li class="active">フォーム入力</li>
    <li>送信内容確認</li>
    <li>送信完了</li>
  </ul>
</div>
<div class=" contactform">
  <h2 class="h2-title">
    <span class="txt_grd">商品情報</span>
  </h2>
  <dl>
    <dt class="require ">
      <label for="purchase_method">買取方法を選択</label>
    </dt>
    <dd>
      <div class="form_group">
        <div class="check_group">
          <label><input type="radio" name="purchase_method" value="先払い撮影プラン（写真を送って査定）">先払い撮影プラン（写真を送って査定）</label>
          <label><input type="radio" name="purchase_method" value="後払い郵送プラン（商品を送って査定）">後払い郵送プラン（商品を送って査定）</label>
        </div>
      </div>
    </dd>
  </dl>

  <dl>
    <dt class="require">
      <label for="purchased_product1">買取商品の種類</label>
    </dt>
    <dd>
      <div class="form_group">
        <label><input type="checkbox" name="purchased_product[]" value="商品券" id="purchased_product1">商品券</label>
        <label><input type="checkbox" name="purchased_product[]" value="金券／ギフトカード">金券／ギフトカード</label>
      </div>
    </dd>
  </dl>
  <h2 class="h2-title">
    <span class="txt_grd">個人情報の画像</span>
  </h2>

  <dl>
    <dt class="require">
      <label for="file">必要書類の添付</label>
    </dt>
    <dd>
      <div class="contactform-item-data_in">
        <ul class="formFile__wrapper">
          <li class="file_wrap">
            <div class="file_label">セルフィー（自画撮り）</div>
            <div class="file__input form_group">
              <input type="file" class="contactform-input-file" id="upfile1" name="upfile1">
              <div id="upfile1_preview"></div>
            </div>
            <ul class="formTextNote">
              <li>※身分証明書をお持ちいただき、<br>ご自身が同時に写った写真をお送りください。</li>
            </ul>
          </li>
          <li class="file_wrap">
            <div class="file_label">顔写真付きの身分証明書（運転免許証など）</div>
            <div class="file_label color-r">表面の写真</div>
            <div class="file__input form_group">
              <input type="file" class="contactform-input-file" id="upfile2" name="upfile2">
              <div id="upfile2_preview"></div>
            </div>
            <div class="file_label color-r">裏面の写真</div>
            <div class="file__input form_group">
              <input type="file" class="contactform-input-file" id="upfile3" name="upfile3">
              <div id="upfile3_preview"></div>
            </div>
            <ul class="formTextNote">
              <li>※添付可能な画像のファイル形式はJPEG・PNG・GIFとなります。</li>
              <li>※添付ボタン1つにつき、添付可能な画像容量は5MBまでになります。</li>
            </ul>
          </li>
        </ul>

      </div>
    </dd>
  </dl>

  <h2 class="h2-title">
    <span class="txt_grd">個人情報をご入力</span>
  </h2>
  <dl>
    <dt class="require ">
      <label for="fullname">お名前</label>
    </dt>
    <dd>
      <div class="form_group">
        <input type="text" name="fullname" id="fullname" class="contactform-input-text" placeholder="（例）買取太郎" required="" aria-invalid="true">
      </div>
    </dd>
  </dl>

  <dl>
    <dt class="require">
      <label for="furigana">フリガナ</label>
    </dt>
    <dd>
      <div class="form_group">
        <input type="text" name="furigana" id="furigana" class="contactform-input-text" placeholder="（例）カイトリタロウ" required="">
      </div>
    </dd>
  </dl>

  <dl>
    <dt class="require">
      <label for="address">ご住所</label>
    </dt>
    <dd>
      <div class="form_group">
        <input type="text" name="address" id="address" class="contactform-input-text" placeholder="（例）東京都八王子市三崎町4-11" required="" aria-invalid="true">
      </div>
    </dd>
  </dl>

  <dl>
    <dt class="require">
      <label for="name">生年月日</label>
    </dt>
    <dd>
      <div class="form_group">
        <div class="date_group">
          <input type="text" name="year" id="year" placeholder="例：1999" maxlength="4" inputmode="numeric" required="">
          <span>年</span><br class="hide_pc">
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
        <input type="tel" name="phone" id="phone" class="contactform-input-text fix-byte fix-num" maxlength="11" pattern="\d{10,11}" title="ハイフンなしの10桁から11桁の電話番号を半角数字で入力してください。" placeholder="（例）0123456789　数字のみご入力" required="">
      </div>
    </dd>
  </dl>
  <dl>
    <dt class="require">
      <label for="email">メールアドレス</label>
    </dt>
    <dd>
      <div class="form_group">
        <input type="email" name="email" id="email" class="contactform-input-text" placeholder="（例）〇〇〇＠gmail.com" required="">
      </div>
    </dd>
  </dl>

  <dl>
    <dt class="require">
      <label for="email_confirm">メールアドレス（再確認）</label>
    </dt>
    <dd>
      <div class="form_group">
        <input type="email" name="email_confirm" id="email_confirm" class="contactform-input-text" placeholder="※入力したメールアドレスを再度ご入力" required="">
      </div>
    </dd>
  </dl>
  <dl>
    <dt class="require">
      <label for="company_name">勤務先の会社名</label>
    </dt>
    <dd>
      <div class="form_group">
        <input type="text" name="company_name" id="company_name" class="contactform-input-text" placeholder="（例）株式会社ステップ" required="" aria-invalid="true">
      </div>
    </dd>
  </dl>

  <dl>
    <dt class="require">
      <label for="company_address">勤務先のご住所</label>
    </dt>
    <dd>
      <div class="form_group">
        <input type="text" name="company_address" id="company_address" class="contactform-input-text" placeholder="（例）東京都八王子市三崎町4-11" required="" aria-invalid="true">
      </div>
    </dd>

  </dl>

  <dl>
    <dt class="require">
      <label for="contact_info">勤務先の連絡先</label>
    </dt>
    <dd>
      <div class="form_group">
        <input type="tel" name="contact_info" id="contact_info" class="contactform-input-text fix-byte fix-num" maxlength="11" pattern="\d{10,11}" title="ハイフンなしの10桁から11桁の電話番号を半角数字で入力してください。" placeholder="（例）0123456789　数字のみご入力" required="">
      </div>
    </dd>
  </dl>

  <dl>
    <dt class="require">
      <label for="monthly_income">手取り月収（平均）</label>
    </dt>
    <dd>
      <div class="form_group">
        <input type="text" name="monthly_income" id="monthly_income" class="contactform-input-text" placeholder="（例）手取り20万円" required="" aria-invalid="true">
      </div>
    </dd>
  </dl>

  <dl>
    <dt class="require">
      <label for="payday">給料日</label>
    </dt>
    <dd>
      <div class="form_group">
        <input type="text" name="payday" id="payday" class="contactform-input-text" placeholder="（例）毎月10日" required="" aria-invalid="true">
      </div>
    </dd>
  </dl>


</div>
<p class="text_center form_title">個人情報の取り扱いについて</p>
<p class="mb-3 text_center">下記事項をご確認の上、同意していただける場合は<span class="red bold">同意する</span>にチェックを入れてください。
</p>
<div class="agreement">
  <div class="agreement_inner">
    <div class="agreement-area-inner">
      <div class="item-agreement">
        <div class="text-area">
          <p class="ttl-top">
            <span class="txt_grd">個人情報の取扱いについて</span>
          </p>

          <p class="ttl"><span class="txt_grd">■ 利用目的</span></p>
          <p>この無料査定お申込みフォームでご提出いただく個人情報は、無料査定のお申込みまたはお問合せ事項に適切に対応し管理するために利用します。</p>

          <p class="ttl"><span class="txt_grd">■ 第三者提供</span></p>
          <p>法令に基づく場合を除いて、ご本人様の同意なく当個人情報を第三者に提供することはありません。</p>

          <p class="ttl"><span class="txt_grd">■ 委託</p>
          <p>当個人情報の取扱いを委託することがありますが、委託にあたっては、委託先における個人情報の安全管理が図られるよう、委託先に対する必要かつ適切な監督を行います。
          </p>

          <p class="ttl"><span class="txt_grd">■ 開示等のお求め</span></p>
          <p>
            当個人情報の利用目的の通知、開示、内容の訂正・追加または削除、利用の停止・消去および第三者への提供の停止（「開示等」といいます。）を受け付けております。開示等の求めは、以下の「個人情報苦情及び相談窓口」で受け付けます。
          </p>

          <p class="ttl"><span class="txt_grd">■ 個人情報をご入力するにあたっての注意事項</span></p>
          <p>必要事項が記載されていない場合、最適なご回答ができない場合があります。</p>

          <p class="ttl"><span class="txt_grd">■ 個人情報保護管理者</p>
          <p>買取デポ</p>

          <p class="ttl"><span class="txt_grd">■ 個人情報苦情及び相談窓口</p>
          <p>
            サイト名：ARUTEMISU（アルテミス）<br>
            電話番号：<a class="txt_grd" href="tel:+000-0000-0000">000-0000-0000</a><br>
            営業時間：9時～19時<br>
            定休日：年中無休<br>
            古物商許可番号：XXXXXXXX
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

<div class="button_back_top">
  <button type="button" class="button-neon button-neon-1 next">送信する</button>
</div>