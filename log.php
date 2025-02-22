<?php
// Log Pengunjung
$logFile = "log.txt";
$ip = $_SERVER['REMOTE_ADDR'];
$time = date("Y-m-d H:i:s");
$browser = $_SERVER['HTTP_USER_AGENT'];
$logEntry = "IP: $ip | TIME: $time | BROWSER: $browser\n";
file_put_contents($logFile, htmlspecialchars($logEntry, ENT_QUOTES, 'UTF-8'), FILE_APPEND | LOCK_EX);
?>