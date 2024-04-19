<?php

/**
 * REDIRECT IF NOT CORE
 */
if (!defined('CORE')) {
  header('Location: ../');
  exit;
}
?>
<div id="available_product" class="section">
  <div class="section_title inview">
    <h2 class="section_title_txt">
      <span class="title_bg">
        <span class="number">01</span>
      </span>
      <span class="txt">
        <span class="title_bg">
          <span>買取可能商品</span>
        </span>
      </span>
    </h2>
  </div>
  <div class="section_desc fadeup inview">
    <p>
      当店で買取可能な商品は<br>
      商品券&金券やギフト券となります。
    </p>
  </div>
  <div class="groups">
    <div class="item ">
      <div class="txt fadeup inview">
        <p class="label">商品券</p>
        <p>
          <span>
            日本全国百貨店で<br>
            使用可能な商品券
          </span>
        </p>
      </div>
      <div class="img fadeup inview">
        <?php the_image('available_product1.webp', '商品券'); ?>
      </div>
    </div>
    <div class="item ">
      <div class="txt fadeup inview">
        <p class="label">金券・ギフト券</p>
        <p>
          <span>
            クレジットカード会社<br>
            発行のギフト券
          </span>
        </p>
      </div>
      <div class="img fadeup inview">
        <?php the_image('available_product2.webp', '商品券'); ?>
      </div>
    </div>
  </div>
</div>