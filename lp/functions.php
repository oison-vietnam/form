<?php
date_default_timezone_set('Asia/Tokyo');
define('CORE', true);
define('LP', "lp");
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

function get_home_url($path = "")
{
  $domain = get_domain();
  $domain .= "/" . (LP ?  LP . "/" : "");
  $path =  $path ? $path . "/" : "";
  return $domain . $path;
}
function home_url($path = "")
{
  echo get_home_url($path);
}
function get_domain()
{
  $protocol = get_protocol();
  $server_name = $_SERVER['SERVER_NAME'];
  return $protocol . $server_name;
}
function get_protocol()
{
  if (
    isset($_SERVER['HTTPS']) &&
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
    isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
    $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'
  ) {
    $protocol = 'https://';
  } else {
    $protocol = 'http://';
  }
  return $protocol;
}
function get_current_url()
{
  $domain = get_domain();
  $uri = $_SERVER['REQUEST_URI'];
  return $domain . $uri;
}
function current_url()
{
  echo get_current_url();
}
function get_current_canonical()
{
  $current_url = get_current_url();
  //remove lp
  if(LP)
    return str_replace("/" . LP."/", "/", $current_url);
  return $current_url;
}
function current_canonical()
{
  echo get_current_canonical();
}

function asset($file){
  echo get_home_url()."assets/".$file;
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
