<?php

class Log
{
	public $fileName;
	public $message;
	public function info($message, $fileName)
	{
		$this->logMessage( $message, $fileName, 'INFO');
	}
	public function error($message, $fileName)
	{
		$this->logMessage($message, $fileName, 'ERROR');
	}
	public  function logMessage($message, $fileName, $logLevel)
    {   
    	var_dump($logLevel);
    	var_dump($message);
    	var_dump($fileName);
        $message = date("h:i:s ") . "[$logLevel] ". $message . PHP_EOL;
        var_dump($message);
        append($fileName, $message);
    }

}


