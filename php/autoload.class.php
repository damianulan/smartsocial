<?php

spl_autoload_register("myAutoLoader");

function myAutoLoader($className) {
	$path = 'php/';
	$extension = '.class.php';
	$filename = $path.$className.$extension;

	if(!file_exists($filename)){
		return false;
	}

	include_once $path.$className.$extension;
}