<?php
date_default_timezone_set('Asia/Tokyo');
define('CORE', true);

function line_url()
{
  echo get_config('line_url');
}
function get_config($key)
{

  $config = file_get_contents(__DIR__ . "/config.json");
  $config = json_decode($config, true);
  return isset($config[$key]) ? $config[$key] : null;
}

function meta_robots()
{
  $meta_robots = get_config('meta_robots');
  if ($meta_robots) :
    echo "<meta name=\"robots\" content=\"{$meta_robots}\">\n";
  else :
    global $robots;
    if($robots){
      echo "<meta name=\"robots\" content=\"{$robots}\">\n";
    }else{
    echo "\n";
  }
  endif;
}

function get_lp_home_url($path = "")
{
  $lp = get_config('lp');
  $domain = get_domain();
  $domain .= "/" . ($lp ?  $lp . "/" : "");
  $path =  $path ? $path . "/" : "";
  return $domain . $path;
}
function lp_home_url($path = "")
{
  echo get_lp_home_url($path);
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
  $lp = get_config('lp');
  //remove lp
  if ($lp)
    return str_replace("/" .  $lp, "", $current_url);
  return $current_url;
}
function current_canonical()
{
  echo get_current_canonical();
}

function asset($file)
{
  echo get_lp_home_url() . "assets/" . $file;
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
function get_image($img, $alt)
{
  $img_path = "assets/images/{$img}";
  list($width, $height) = getimagesize(__DIR__ . "/{$img_path}");
  $src = get_lp_home_url() . $img_path;
  return "<img src=\"{$src}\" alt=\"{$alt}\" width=\"{$width}\" height=\"{$height}\">";
}
function the_image($img, $alt)
{
  echo get_image($img, $alt);
}
