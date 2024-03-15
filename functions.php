<?php
date_default_timezone_set('Asia/Tokyo');
define('CORE', true);
function get_domain_url()
{
  $lp = "";
  if(defined("LP"))
    $lp = "/".LP;
  return "https://{$_SERVER['SERVER_NAME']}{$lp}";
}
function site_url($path = "")
{
  echo get_domain_url() . "/" . $path;
}

function is_test_speed()
{
  // Không có HTTP_USER_AGENT hoặc HTTP_USER_AGENT có chứa Lighthouse thì xác định là đang test
  if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Lighthouse') !== false) {
    return true;
  }

  return false;
}
function is_not_test_speed()
{
  return !is_test_speed();
}

function stack($stack)
{
  global ${$stack};
  echo ${$stack};
}
function section($section_name)
{
  ob_start();
  global $section;
  $section = $section_name;
  global ${$section};
}
function endsection()
{
  global $section;
  global ${$section};
  ${$section} .= ob_get_contents();
  ob_end_clean();
}
