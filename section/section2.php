<?php

/**
 * REDIRECT IF NOT CORE
 */
if (!defined('CORE')) {
  header('Location: ../');
  exit;
}
?>
<div id="section2" class="section">
  <div class="section_content">
    <div class="section_title">
      <h2 class="section_title_txt">
        <span class="number">02</span>
        <span class="txt">オススメのポイント</span>
      </h2>
    </div>
    <div class="groups">
      <div class="item">
        <div class="item_detail">
          <span class="txt_yellow">来店は不要、</span>お申し込みはや手続きは<br>
          <span class="txt_yellow">当サイトのみのWeb完結</span>でOK
        </div>
        <div class="item_bg">
          <?php the_image('section2_item_bg.webp', 'オススメのポイント'); ?>
        </div>
      </div>
      <div class="item">

        <div class="item_detail">
          スマホ一つで誰でも<span class="txt_yellow">簡単お申し込み</span><br>
          <span class="txt_yellow">高額買取査定＆即日買取</span>を実現
        </div>
        <div class="item_bg">
          <?php the_image('section2_item_bg.webp', 'オススメのポイント'); ?>
        </div>
      </div>
      <div class="item">

        <div class="item_detail">
          面倒な審査や手続きなど<span class="txt_yellow">一切無し</span><br>
          査定～お振込みまで<span class="txt_yellow">最短5分も可能</span>
        </div>
        <div class="item_bg">
          <?php the_image('section2_item_bg.webp', 'オススメのポイント'); ?>
        </div>
      </div>
      <div class="item">

        <div class="item_detail">
          お時間が無い方も<span class="txt_yellow">商品写真を送って査定</span><br>
          商品は<span class="txt_yellow">後日のタイミングで送ってもOK</span>
        </div>
        <div class="item_bg">
          <?php the_image('section2_item_bg.webp', 'オススメのポイント'); ?>
        </div>
      </div>
    </div>
  </div>
</div>