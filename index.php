<?php

// ----------------------------------------------------------------------------------------------------- first

$ua = strtolower($_SERVER["HTTP_USER_AGENT"]);
$isMob = is_numeric(strpos($ua, "mobile"));
$isTab = is_numeric(strpos($ua, "tablet"));
$isDes = !$isMob && !$isTab;
$isWin = is_numeric(strpos($ua, "windows"));
$isMac = is_numeric(strpos($ua, "macintosh"));
$isamigaos = is_numeric(strpos($ua, "amigaos"));
$isUnix = is_numeric(strpos($ua, "unix"));
$isAnd = is_numeric(strpos($ua, "android"));
$isIph = is_numeric(strpos($ua, "iphone"));
$isIpa = is_numeric(strpos($ua, "ipad"));

if ($isWin != "windows" && $isMac != "Mac" && $isAmigaOS != "AmigaOS" && $isUnix != "Unix") {
    echo "Mob";
} else {
    echo "Deks";
}

// -------------------------------------------------------------------------------------------------------- second

// if (preg_match('/Mobile|Android|Tablet/i', $_SERVER['HTTP_USER_AGENT'])) {
//     echo "mobile";
// } else {
//     echo "not_mobile";
// }

// ------------------------------------------------------------------------------------------------------------- third

// require_once 'Mobile-Detect-master/src/MobileDetect.php';

// $detect = new \Detection\MobileDetect;
// $deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

// echo $deviceType;

// ------------------------------------------------------------------------------------------------------------- fourth associated to first

// $user_agent = $_SERVER["HTTP_USER_AGENT"];

// if (preg_match("/Linux/i", $user_agent)) {
//     echo "You are using Linux";
// } elseif (preg_match("/Mac/i", $user_agent)) {
//     echo "You are using Mac OS";
// } elseif (preg_match("/Windows|WinNT|Win95|Win98|WinME/i", $user_agent)) {
//     echo "You are using Windows";
// } elseif (preg_match("/AmigaOS/i", $user_agent)) {
//     echo "You are using AmigaOS";
// } elseif (preg_match("/Unix/i", $user_agent)) {
//     echo "You are using Unix";
// } else {
//     echo "Could not detect operating system";
// }