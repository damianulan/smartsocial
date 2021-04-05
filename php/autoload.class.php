<?php

spl_autoload_register("myAutoLoader");

function myAutoLoader($className) {
	$extension = '.class.php';
	$filename = $className.$extension;

	if(!file_exists($filename)){
		return false;
	}

	include_once $className.$extension;
}