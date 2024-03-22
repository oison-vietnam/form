<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/.mailer/mailer.php";
$from_email = '';
$from_name = '';
$admin_email = '';
$admin_bcc =  false;
$admin_subject = '';
$customer_subject = '';
$customer_reply_email = false;

$config = file_get_contents(__DIR__."/config.json");
$config = json_decode($config,true);
extract($config);

$_POST['purchased_products'] = implode(", ", $_POST['purchased_product']?:[]);
if(isset($_POST['purchased_product']))
unset($_POST['purchased_product']);

$message_admin = get_message_admin(__DIR__);
$message_customer = get_message_customer(__DIR__);
$customer_email = $_POST['email'];

$photos = [];
$photos['upfile1'] = uploadFile('upfile1');
$photos['upfile2'] = uploadFile('upfile2');
$photos['upfile3'] = uploadFile('upfile3');


if (send_email($admin_subject, $message_admin, $admin_email,  $customer_email, $admin_bcc, $photos)) :
  send_email($customer_subject, $message_customer, $customer_email, $customer_reply_email);
  email_success();
  exit;
endif;
email_failer();
