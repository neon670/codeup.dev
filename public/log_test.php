<?php
require_once 'Log.php';

$newLog = new Log();
$newLog->filename = "log" . date('Y-m-d') . "txt";
$newLog->logInfo("Message info");
$newLog->logError("Message error");





?>