<?php


function send_email($subject, $body, $to, $reply = null, $bcc = null, $photos = [])
{
  global  $from_email;
  global  $from_name;

  $jp_subject = "=?iso-2022-jp?B?".base64_encode(mb_convert_encoding($subject,"ISO-2022-JP", "AUTO"))."?=";
  $jp_from_name = "=?iso-2022-jp?B?".base64_encode(mb_convert_encoding($from_name,"ISO-2022-JP", "AUTO"))."?=";
/* 
  $jp_subject = mb_convert_encoding($subject, "ISO-2022-JP", "AUTO");
  $jp_subject = mb_encode_mimeheader($jp_subject);
 */
  // Boundary  

  $headers  = "MIME-Version: 1.0 \n";
  $headers .= "From: {$jp_from_name}<{$from_email}> \n";

  if ($bcc)
    $headers .= "Bcc: {$bcc} \n";

  if ($reply)
    $headers .= "Reply-To:  {$jp_from_name}<{$reply}> \n";

  $sendmail_params  = "-f$from_email";

  // Boundary  
  $semi_rand = md5(time());
  $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

  // Headers for attachment  
  $headers .= "MIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";

  // Multipart boundary  
  $message = "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"UTF-8\"\n" .
    "Content-Transfer-Encoding: 7bit\n\n" . $body . "\n\n";
  // Preparing attachment 
  if (!empty($photos)) :
    foreach ($photos as $photo) :
      if (!$photo) continue;
      $message .= "--{$mime_boundary}\n";
      $fp =    @fopen($photo, "rb");
      $data =  @fread($fp, filesize($photo));

      @fclose($fp);
      $data = chunk_split(base64_encode($data));
      $message .= "Content-Type: application/octet-stream; name=\"" . basename($photo) . "\"\n" .
        "Content-Description: " . basename($photo) . "\n" .
        "Content-Disposition: attachment;\n" . " filename=\"" . basename($photo) . "\"; size=" . filesize($photo) . ";\n" .
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
    endforeach;
  endif;

  $message .= "--{$mime_boundary}--";


  return mail($to, $jp_subject, $message, $headers, $sendmail_params);
}

function uploadFile($field)
{
  if (empty($_FILES[$field]["name"]))
    return false;

  $upload_time = date("Ymd__His");
  $upload_dir = __DIR__ . "/uploads";

  if (!file_exists($upload_dir))
    mkdir($upload_dir);

  $upload_folder_name = date('Y-m');
  $upload_folder = "{$upload_dir}/{$upload_folder_name}";

  if (!file_exists($upload_folder))
    mkdir($upload_folder);

  $filename = $_FILES[$field]['name'];

  $upload_time = date("Ymd__His");
  $photoname = getPhotoName($field);
  $file_basename = $upload_time . "_" . $photoname;
  $file_ext = substr($filename, strripos($filename, '.')); // get file ext

  $file_ext = strtolower(trim(substr($filename, strrpos($filename, ".") + 1, strlen($filename))));


  $newfile = "{$upload_folder}/{$file_basename}.{$file_ext}";
  $check = 0;
  while (file_exists($newfile)) {
    $check++;
    $newfile = "{$upload_folder}/{$file_basename}_{$check}.{$file_ext}";
  }
  move_uploaded_file($_FILES[$field]['tmp_name'], $newfile);
  return $newfile;
}
function getPhotoName($field)
{
  switch ($field) {
    case 'upfile1':
      return 'ID_selfie';
    case 'upfile2':
      return 'ID_hyo';
    case 'upfile3':
      return 'ID_ura';

    default:
      return $field;
  }
}

function get_message_admin($msg_folder = __DIR__)
{
  $message = file_get_contents($msg_folder . '/message_admin.txt');
  foreach ($_POST as $key => $value) {
    $message  = preg_replace("/\[{$key}\]/", $value, $message);
  }
  return $message;
}


function get_message_customer($msg_folder = __DIR__)
{
  $message = file_get_contents($msg_folder . '/message_customer.txt');
  foreach ($_POST as $key => $value) {
    $message  = preg_replace("/\[{$key}\]/", $value, $message);
  }
  return $message;
}


function email_success()
{
?>
  <form id="redirectThanks" action="../../thanks/" method="POST">
    <input type="hidden" name="token" value="eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9">
  </form>
  <script type="text/javascript">
    document.getElementById('redirectThanks').submit();
  </script>
<?php
}

function email_failer()
{
?>
  <p>お問い合わせ内容を送信できませんでした。</p>
  <p>しばらくたってから、もう一度お試しください。</p>
<?php
  exit;
}
