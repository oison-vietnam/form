<?php

/**
 * REDIRECT IF NOT CORE
 */
if (!defined('CORE')) {
  header('Location: ../');
  exit;
}
?>
<div id="main">
  <div class="main_wrap">
    <div class="main_content">
      <div class="text">
        <p class="txt1">
          好きなタイミングで<br>簡単お申し込み・査定無料
        </p>
        <h1 class="txt2">
          <span data-text="最短5分の">最短5分の</span>
          <span data-text="スピード買取">スピード買取</span>
        </h1>

        <div>
          <p class="txt3">
            商品券＆ギフト券を高額買取<br>
            <strong>365日・24時間受付中！</strong>
          </p>
          <?php include __DIR__ . "/button.php"; ?>
        </div>
      </div>
    </div>
    <div class="main_img">
      <?php the_image('main.webp', '好きなタイミングで簡単お申し込み・査定無料'); ?>
    </div>
  </div>
</div>