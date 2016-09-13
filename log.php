<?php 

class Log 
{
    public $filename;
    public function logMessage($logLevel, $message)
    {
        if (isset($logLevel) && isset($message)) {
            $handle = fopen($this->filename, 'a');
            fwrite($handle, date("Y-m-d h:m:s") . " " . "[" . $logLevel . "]" . " " . $message . PHP_EOL);
            fclose($handle);
        } else {
            echo 'File arguments missing. Please enter log level and message.';
            die;
        }
    }
    public function logError($message) 
    {
        $this->logMessage('ERROR', $message);
    } 
    public function logInfo($message) 
    {
        $this->logMessage("INFO", $message);
    }
}



