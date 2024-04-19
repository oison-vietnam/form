<?php

require_once __DIR__ . "/../functions.php";
$MAILER_DIR = "/.mailer";
if (str_contains($_SERVER['REQUEST_URI'], FOLDER_TEST)) {
  $MAILER_DIR = "/" . FOLDER_TEST . "/.mailer";
}
require_once $_SERVER['DOCUMENT_ROOT'] . $MAILER_DIR . "/mailer.php";

checkPostFormWithConfirm();

$from_email = get_config('from_email');
$from_name = get_config('from_name');
$admin_email = get_config('admin_email');
$admin_bcc = get_config('admin_bcc');
$admin_subject = get_config('admin_subject');
$customer_subject = get_config('customer_subject');
$customer_reply_email = get_config('customer_reply_email');


$_POST['purchased_products'] = implode(", ", $_POST['purchased_product'] ?: []);
if (isset($_POST['purchased_product']))
  unset($_POST['purchased_product']);


$_POST['birthday'] = getData('year') . "年" . getData('month') . "月" . getData('day') . "日";

$message_admin = get_message_admin(__DIR__);
$message_customer = get_message_customer(__DIR__);
$customer_email = $_POST['email'];

$photos = [];
$photos['upfile1'] = uploadFile('upfile1');
$photos['upfile2'] = uploadFile('upfile2');
$photos['upfile3'] = uploadFile('upfile3');


if (send_email($admin_subject, $message_admin, $admin_email,  $customer_email, $admin_bcc, $photos)) :
  send_email($customer_subject, $message_customer, $customer_email, $customer_reply_email, false, $photos);
  email_success();
  exit;
endif;
email_failer();
