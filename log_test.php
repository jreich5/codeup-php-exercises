<?php 

require_once 'log.php';

$logMessageTest = new Log();
$logMessageTest->filename = "log-" . date("Y-m-d");
$logMessageTest->logMessage('Warning', 'LogMessage test...');
$logMessageTest->logError('logError test....');
$logMessageTest->logInfo('logInfo test....');