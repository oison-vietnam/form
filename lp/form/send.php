<?php

$MAILER_DIR = "/.mailer";
if (str_contains($_SERVER['REQUEST_URI'], '/thumucdemo/')) {
  $MAILER_DIR = "/thumucdemo/.mailer";
}
require_once __DIR__ . "/../functions.php";
require_once $_SERVER['DOCUMENT_ROOT'] . $MAILER_DIR . "/mailer.php";

checkPostFormWithConfirm();

$from_email = get_config('from_email');
$from_name = get_config('from_name');
$admin_email = get_config('admin_email');
$admin_bcc = get_config('admin_bcc');
$admin_subject = get_config('admin_subject');
$customer_subject = get_config('customer_subject');
$customer_reply_email = get_config('customer_reply_email');

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


$admin_emails = explode(",", $admin_email);
$main_admin = array_shift($admin_emails);
if (send_email($admin_subject, $message_admin, $main_admin,  $customer_email, $admin_bcc, $photos)) :

  foreach ($admin_emails as $sub_admin) :
    $sub_admin = trim($sub_admin);
    send_email($admin_subject, $message_admin, $sub_admin,  $customer_email, false, $photos);
  endforeach;

  send_email($customer_subject, $message_customer, $customer_email, $customer_reply_email, false, $photos);
  email_success();
  exit;

endif;

require_once __DIR__."/error.php";
exit;
