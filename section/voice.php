<?php

/**
 * REDIRECT IF NOT CORE
 */
if (!defined('CORE')) {
  header('Location: ../');
  exit;
}
?>
<div id="voice">
  <div class="section_title inview">
    <h2 class="section_title_txt">
      <span class="title_bg">
        <span class="number">05</span>
      </span>
      <span class="txt">
        <span class="title_bg">
          <span>お客様の声</span>
        </span>
      </span>
    </h2>
  </div>


  <div class="voices">
    <div class="voice fadeup inview">
      <div class="voice_inn">
        <div class="info">
          <div class="name">ケース01　20代男性</div>
          <div class="avatar">
            <?php the_image('voice1.webp', '20代男性のシルエット'); ?>
          </div>
        </div>
        <div class="detail ">
          <p class="txt_grd"><span>今回、余っていた商品券やギフト券の売却をお願いしたくアルテミスさんに依頼してみました。初めてでしたが手続きはスムーズで、振り込みも早く大変満足しています。特に買取額も期待以上で、満足のいく取引ができました。また利用したいと思います。</span></p>
        </div>
      </div>
    </div>
    <div class="voice fadeup inview">
      <div class="voice_inn">
        <div class="info">
          <div class="name">ケース02　20代男性</div>
          <div class="avatar">
            <?php the_image('voice2.webp', '20代男性のシルエット'); ?>
          </div>
        </div>
        <div class="detail ">
          <p class="txt_grd">
            <span>商品券やギフト券の売却を検討していたところ、このサイトを見つけました。仕事が忙しくいつも後回しにしてたのですが、WEB完結で手続きが可能という点に惹かれ、利用してみることにしました。結果として、買取金額も高く非常に満足しています。とても信頼できると思いましたので、今後も利用したいと考えています。</span>
          </p>
        </div>
      </div>
    </div>
    <div class="voice fadeup inview">
      <div class="voice_inn">
        <div class="info">
          <div class="name">ケース03　30代男性</div>
          <div class="avatar">
            <?php the_image('voice3.webp', '30代男性のシルエット'); ?>
          </div>
        </div>
        <div class="detail ">
          <p class="txt_grd">
            <span>手に入れた商品券やギフト券を買い取ってほしい時は、いつもアルテミスさんにお願いしています。手続きも簡単で、スタッフの方も丁寧、親切なのでいつも安心してできます。今後も自信を持って知り合いにオススメできるいいお店だと思います。</span>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>