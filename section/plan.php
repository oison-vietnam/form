<?php

/**
 * REDIRECT IF NOT CORE
 */
if (!defined('CORE')) {
  header('Location: ../');
  exit;
}
?>
<div id="plan">
  <div class="section_title inview">
    <h2 class="section_title_txt">
      <span class="title_bg">
        <span class="number">03</span>
      </span>
      <span class="txt">
        <span class="title_bg">
          <span>買取プランについて</span>
        </span>
      </span>
    </h2>
  </div>


  <div class="section_desc fadeup inview">
    <p>当店の買取プランは</p>
    <p class="txt_yellow">
      先払い撮影プラン［写真を送って査定］<br>
      後払い郵送プラン［商品を送って査定］
    </p>
    <p>
      の２種類がございます。<br>
      お客様の都合に合わせてお選びが可能です。
    </p>
  </div>
  <div class="groups">
    <div class="item fadeup inview">
      <div class="item_detail">
        <div class="label pink">先払い撮影プラン</div>
        <div class="content">
          <div class="arrow arrow_left">
            <span>②写真から査定～先払いでお振込み</span>
            <picture>
              <source media="(max-width: 768px)" srcset="<?php asset('images/plan_arrow11_sp.svg'); ?>">
              <img src="<?php asset('images/plan_arrow11.svg'); ?>" alt="②写真から査定～先払いでお振込み" width="390" height="50">
            </picture>
          </div>
          <div class="group">
            <div class="img">
              <?php the_image('plan_img11.webp', '先払い撮影プラン'); ?>
            </div>
            <div class="detail">
              <div class="txt_label">先払い撮影プラン</div>
              <div class="percent "><span class="txt_grd">60%</span></div>
              <div class="txt">買取率</div>
            </div>
            <div class="img">
              <?php the_image('plan_img12.webp', '先払い撮影プラン'); ?>
            </div>
          </div>
          <div class="arrow">
            <picture>
              <source media="(max-width: 768px)" srcset="<?php asset('images/plan_arrow12_sp.svg'); ?>">
              <img src="<?php asset('images/plan_arrow12.svg'); ?>" alt="①商品を撮影後、当店へ送信③入金後、後日商品を郵送" width="390" height="50">
            </picture>
            <span>
              ①商品を撮影後、当店へ送信<br>
              ③入金後、後日商品を郵送
            </span>
          </div>
        </div>
      </div>
      <div class="item_bg">
        <img src="<?php asset('images/plan_item_bg1.svg'); ?>" alt="先払い撮影プラン" width="560" height="435">
      </div>
    </div>
    <div class="item fadeup inview">

      <div class="item_detail">
        <div class="label blue">先払い撮影プラン</div>
        <div class="content">
          <div class="arrow">
            <span>①商品を指定の住所へ郵送</span>
            <picture>
              <source media="(max-width: 768px)" srcset="<?php asset('images/plan_arrow21_sp.svg'); ?>">
              <img src="<?php asset('images/plan_arrow21.svg'); ?>" alt="①商品を指定の住所へ郵送" width="390" height="50">
            </picture>

          </div>
          <div class="group">
            <div class="img">
              <?php the_image('plan_img21.webp', '後払い郵送プラン'); ?>
            </div>
            <div class="detail">
              <div class="txt_label">後払い郵送プラン</div>
              <div class="percent "><span class="txt_grd">90%</span></div>
              <div class="txt">買取率</div>
            </div>
            <div class="img">
              <?php the_image('plan_img22.webp', '後払い郵送プラン'); ?>
            </div>
          </div>
          <div class="arrow arrow_left">

            <picture>
              <source media="(max-width: 768px)" srcset="<?php asset('images/plan_arrow22_sp.svg'); ?>">
              <img src="<?php asset('images/plan_arrow22.svg'); ?>" alt="②商品到着後に査定～お振込み" width="390" height="50">
            </picture>
            <span>
              ②商品到着後に査定～お振込み
            </span>
          </div>
        </div>
      </div>
      <div class="item_bg">
        <img src="<?php asset('images/plan_item_bg2.svg'); ?>" alt="オススメのポイント" width="560" height="435">
      </div>
    </div>
  </div>
</div>