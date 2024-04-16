<?php

/**
 * REDIRECT IF NOT CORE
 */
if (!defined('CORE')) {
  header('Location: ../');
  exit;
}
?>
<div id="section1" class="section">
  <div class="section_title">
    <h2 class="section_title_txt">
      <span class="number">01</span>
      <span class="txt">買取可能商品</span>
    </h2>
  </div>
  <div class="section_desc">
    <p>
      当店で買取可能な商品は<br>
      商品券&金券やギフト券となります。
    </p>
  </div>
  <div class="groups">
    <div class="item">
      <div class="txt">
        <p class="label">商品券</p>
        <p>日本全国百貨店で<br>使用可能な商品券</p>
      </div>
      <div class="img">
        <?php the_image('section1_img1.webp', '商品券'); ?>
      </div>
    </div>
    <div class="item">
      <div class="txt">
        <p class="label">金券・ギフト券</p>
        <p>クレジットカード会社<br>発行のギフト券</p>
      </div>
      <div class="img">
        <?php the_image('section1_img2.webp', '商品券'); ?>
      </div>
    </div>
  </div>
</div>