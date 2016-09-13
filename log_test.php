<?php 

require_once 'log.php';

$logMessageTest = new Log('cli');
$logMessageTest->logMessage('Warning', 'LogMessage test...');
$logMessageTest->logError('logError test....');
$logMessageTest->logInfo('logInfo test....');