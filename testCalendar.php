<?php
include_once 'LogSystem.php';
$log = new LogSystem();
$log->writeLog("ASDASDASD", "clase1");
$log->writeLog("ASDASDASDasdasd", "clase1");
//date_default_timezone_set("America/Santiago");
//echo "<pre>";
//print_r($_SERVER);
/*
echo "</pre>";
echo "<br>" . date("d//m//Y_H:m:s:m");
echo "<br>" . date("r") . "<br>";
echo "path general: " .  PATH_BASE_PROJECT . "<br>";
echo "path base del proyecto: " . PATH_TO_LOG . "<br>";
echo "zona de time por defecto: " . DEFAULT_TIME_ZONE . "<br>";
 * 
 */