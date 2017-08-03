<?php
	require_once "Log.php";
	require_once "lib.php";

	$log = new Log;

	$log->fileName = "log-" . date("Y-m-d") . ".log";

	$log->message = "A thing Happened!";

	$log->info($log->message, $log->fileName);
	$log->error($log->message, $log->fileName);


	// var_dump($log);




