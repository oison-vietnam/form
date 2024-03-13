<?php
date_default_timezone_set('Asia/Tokyo');

if (file_exists(__DIR__ . "/_config.php")) :
  require_once __DIR__ . "/_config.php";
else :
  require_once __DIR__ . "/config.php";
endif;
global $logo_tag;
$logo_tag = "div";
global $title;
global $desc;
global $section;
global $top;
global $page_name;

define('CORE', true);

$title = "";
$desc = "";


function get_asset($file = false)
{
  if (!$file) return;
  $url = BASE_URL . "/assets/{$file}";
  if (defined("VERSION"))
    $url .= "?v=" . fileatime(__DIR__ . "/assets/{$file}");

  return $url;
}
function asset($file = false)
{
  echo get_asset($file);
}
function url($name = "")
{
  echo get_url($name);
}

function get_url($name = "")
{
  return BASE_URL . "/{$name}";
}
function img($path)
{
  echo get_asset("img/" . $path);
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
function is_top()
{
  global $top;
  if ($top) {
    echo 'is-top';
  }
}
function page_name()
{
  global $page_name;
  if (!empty($page_name)) {
    echo 'id="' . $page_name . '"';
  }
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
