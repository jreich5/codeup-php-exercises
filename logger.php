<?php

function logMessage($logLevel, $message)
{
    if (isset($logLevel) && isset($message)) {
        date_default_timezone_set('America/Chicago');
        $filename = "log-" . date("Y-m-d");
        $handle = fopen($filename, 'a');
        fwrite($handle, date("Y-m-d h:m:s") . " " . $logLevel . " " . $message);
        // echo date("Y-m-d h:m:s") . " " . $logLevel . " " . $message . PHP_EOL;

        // if (filesize($filename) == 0 ) { 
        // }
        // echo $filename; 

    } else {
        echo 'File arguments missing. Please enter log level and message.';
        die;
    }
}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");


// date("h:m:sa")