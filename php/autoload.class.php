<?php
// Enables error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Automatically includes files containning classes that maches syntax below
// Example:
// $x = X();
spl_autoload_register("myAutoLoader");

function myAutoLoader($className) { // Class name must be the same as file name
	$path = 'php/'; // And in the same folder
	$extension = '.class.php'; // Class name must be the same as file name
	$filename = $path.$className.$extension;

	if(!file_exists($filename)){
		return false;
	}

	include_once $path.$className.$extension;
}
// Variable responsible for period of time after which session will be destroyed
$GLOBALS['time'] = 1800; // Expressed in numerical value of seconds, 30 min
