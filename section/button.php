<?php

/**
 * REDIRECT IF NOT CORE
 */
if (!defined('CORE')) {
  header('Location: ../');
  exit;
}
?>
<a class="button" href="<?php lp_home_url('application'); ?>">
  <span class="button_wrap">
    <span>
      お申し込みは数分で可能！<br>
      <strong>買取依頼はこちらから</strong>
    </span>
  </span>
</a>