<?php

/**
 * REDIRECT IF NOT CORE
 */
if (!defined('CORE')) {
  header('Location: ../');
  exit;
}
?>
<div id="progress">
  <div class="section_title inview">
    <h2 class="section_title_txt">
      <span class="title_bg">
        <span class="number">04</span>
      </span>
      <span class="txt">
        <span class="title_bg">
          <span>手続きの流れ</span>
        </span>
      </span>
    </h2>
  </div>


  <div class="progress_wrap">
    <h3 class="progress_title fadeup inview">
      <span><span class="txt_grd">先払い撮影プランの場合</span></span>
    </h3>

    <div class="progress_group">
      <div class="progress fadeup inview">
        <div class="step">
          <span>STEP 01</span>
          <svg width="36" height="102" viewBox="0 0 36 102" fill="none">
            <path d="M-164 1H1.36443L33.7082 50.5L1.36443 100H-164V1Z" stroke="#FF00E5" stroke-width="3" />
          </svg>
        </div>
        <div class="txt">
          当サイトのお申し込みフォームへ進みご依頼ください。<br>
          お申し込み内容確認後、当店スタッフから返答いたします。
        </div>
        <div class="icon">
          <img src="<?php asset('images/progress_icon_computer.svg'); ?>" alt="STEP 01" width="50" height="50">
        </div>
      </div>
      <div class="progress progress_left1 fadeup inview">
        <div class="step">
          <span>STEP 02</span>
          <svg width="36" height="102" viewBox="0 0 36 102" fill="none">
            <path d="M-164 1H1.36443L33.7082 50.5L1.36443 100H-164V1Z" stroke="#FF00E5" stroke-width="3" />
          </svg>
        </div>
        <div class="txt">
          当店スタッフの案内に沿って、買取商品を撮影しお送りください。<br>
          お客様情報と商品の写真から査定を行います。
        </div>
        <div class="icon">
          <img src="<?php asset('images/progress_icon_phone.svg'); ?>" alt="STEP 02" width="50" height="50">
        </div>
      </div>
      <div class="progress progress_left2 fadeup inview">
        <div class="step">
          <span>STEP 03</span>
          <svg width="36" height="102" viewBox="0 0 36 102" fill="none">
            <path d="M-164 1H1.36443L33.7082 50.5L1.36443 100H-164V1Z" stroke="#FF00E5" stroke-width="3" />
          </svg>
        </div>
        <div class="txt">
          査定は数分で完了します。査定後、査定価格をお客様にお伝えし、査定価格にご納得いただけましたら即座にお客様の口座へご入金いたします。
        </div>
        <div class="icon">
          <img src="<?php asset('images/progress_icon_search.svg'); ?>" alt="STEP 03" width="50" height="50">
        </div>
      </div>
      <div class="progress progress_left3 fadeup inview">
        <div class="step">
          <span>STEP 04</span>
          <svg width="36" height="102" viewBox="0 0 36 102" fill="none">
            <path d="M-164 1H1.36443L33.7082 50.5L1.36443 100H-164V1Z" stroke="#FF00E5" stroke-width="3" />
          </svg>
        </div>
        <div class="txt">
          先払い撮影プランをご利用の場合、ご入金後、最長で30日以内に商品の郵送手続きをお願いします。商品が無事到着後、全ての取引は完了となります。
        </div>
        <div class="icon">
          <img src="<?php asset('images/progress_icon_car.svg'); ?>" alt="STEP 04" width="50" height="50">
        </div>
      </div>
    </div>
  </div>
  <div class="progress_wrap progress_wrap_2">
    <h3 class="progress_title">
      <span><span class="txt_grd">後払い郵送プランの場合</span></span>
    </h3>

    <div class="progress_group">
      <div class="progress progress_left3 fadeup inview">
        <div class="step">
          <span>STEP 01</span>
          <svg width="36" height="102" viewBox="0 0 36 102" fill="none">
            <path d="M-164 1H1.36443L33.7082 50.5L1.36443 100H-164V1Z" stroke="#FF00E5" stroke-width="3" />
          </svg>
        </div>
        <div class="txt">
          当サイトのお申し込みフォームへ進みご依頼ください。<br>
          お申し込み内容確認後、当店スタッフから返答いたします。
        </div>
        <div class="icon">
          <img src="<?php asset('images/progress_icon_computer.svg'); ?>" alt="STEP 01" width="50" height="50">
        </div>
      </div>
      <div class="progress progress_left2 fadeup inview">
        <div class="step">
          <span>STEP 02</span>
          <svg width="36" height="102" viewBox="0 0 36 102" fill="none">
            <path d="M-164 1H1.36443L33.7082 50.5L1.36443 100H-164V1Z" stroke="#FF00E5" stroke-width="3" />
          </svg>
        </div>
        <div class="txt">
          当店スタッフの案内に沿って、買取希望の商品を指定の住所へお送りください。商品到着後、お客様情報と実物の商品から査定を行います。
        </div>
        <div class="icon">
          <img src="<?php asset('images/progress_icon_car.svg'); ?>" alt="STEP 02" width="50" height="50">
        </div>
      </div>
      <div class="progress progress_left1 fadeup inview">
        <div class="step">
          <span>STEP 03</span>
          <svg width="36" height="102" viewBox="0 0 36 102" fill="none">
            <path d="M-164 1H1.36443L33.7082 50.5L1.36443 100H-164V1Z" stroke="#FF00E5" stroke-width="3" />
          </svg>
        </div>
        <div class="txt">
          査定は数分で完了します。査定後、査定価格をお客様にお伝えし、<br>
          査定価格にご納得いただけましたら即座にお客様の口座へご入金いたします。
        </div>
        <div class="icon">
          <img src="<?php asset('images/progress_icon_search.svg'); ?>" alt="STEP 03" width="50" height="50">
        </div>
      </div>
      <div class="progress fadeup inview">
        <div class="step">
          <span>STEP 04</span>
          <svg width="36" height="102" viewBox="0 0 36 102" fill="none">
            <path d="M-164 1H1.36443L33.7082 50.5L1.36443 100H-164V1Z" stroke="#FF00E5" stroke-width="3" />
          </svg>
        </div>
        <div class="txt">
          お客様の口座へお振込みが完了しましたら、全ての取引は完了となります。
        </div>
        <div class="icon">
          <img src="<?php asset('images/progress_icon_phone.svg'); ?>" alt="STEP 04" width="50" height="50">
        </div>
      </div>
    </div>
  </div>
</div>