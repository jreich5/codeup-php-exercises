<?php

function logMessage($logLevel, $message)
{
    if (isset($logLevel) && isset($message)) {
        date_default_timezone_set('America/Chicago');
        $filename = "log-" . date("Y-m-d");
        $handle = fopen($filename, 'a');
        fwrite($handle, date("Y-m-d h:m:s") . " " . "[" . $logLevel . "]" . " " . $message . PHP_EOL);
        fclose($handle);
    } else {
        echo 'File arguments missing. Please enter log level and message.';
        die;
    }
}

function logError($message) 
{
    logMessage('ERROR', $message);
}

function logInfo($message) 
{
    logMessage("INFO", $message);
}

logError('Fatal error.');
logInfo('This is an extra message.');

