<?php

function logMessage($logLevel, $message)
{
    if (isset($logLevel) && isset($message)) {
        date_default_timezone_set('America/Chicago');
        $filename = "log-" . date("Y-m-d");
        $handle = fopen($filename, 'a');
        fwrite($handle, date("Y-m-d h:m:s") . " " . "[" . $logLevel . "]" . " " . $message . PHP_EOL);
    } else {
        echo 'File arguments missing. Please enter log level and message.';
        die;
    }
}

function logError($error) 
{
    logMessage($error, "This is an info message.");
}

function logInfo($message) 
{
    logMessage("ERROR", $message);
}


logError('FATAL');
logInfo('This is an extra message.');


// date("h:m:sa")