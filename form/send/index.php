<?php

require_once __DIR__ . "/config.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/.mailer/mailer.php";

global  $from_email;
global  $from_name;

global $admin_email;
global $admin_bcc;
global $admin_subject;

global $customer_subject;
global $customer_reply_email;

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
