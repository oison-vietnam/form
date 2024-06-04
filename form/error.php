<?php
if(!defined('CORE'))
header('Location: ../form/');

global $robots;
$robots = 'noindex';
require_once(__DIR__ . "/../functions.php"); ?>
<?php section('head'); ?><title>メッセージの送信に失敗しました ｜買取フランク</title>
<?php endsection(); ?>
<?php section('after_head'); ?>
<style>
  .page_404_content{
    text-align: center;
    padding: 5rem 0;
  }
</style>
<?php endsection(); ?>
<?php section('content'); ?>
<main>
  <div class="section privacy_section">
    <div class="container">
      <div class="page_404_content">
        <h1 class="comn-title">メッセージの送信に失敗しました</h1>
        <div class="content">
          <p>
            誠に申し訳ございません<br>
            フォームの送信中にエラーが発生いたしました。<br>
            通信環境をご確認の上、時間をおいて<br>
            再度フォームから送信をお願い申し上げます。
          </p>
          <p class="back_to_top">
            <a href="../form/">フォームへ移動する</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</main>
<?php endsection(); ?>
<?php require_once(__DIR__ . "/../master.php"); ?>