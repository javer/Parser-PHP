<?php
	

	include_once 'src/testrunner.php';
	include_once 'src/polyfills.php';


	// Installed by Composer in the vendor directory
	if (strpos(__FILE__, DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR) !== false) {
		include_once __DIR__ . '/../../autoload.php';
	}

	// Development environment
	else {
		include_once __DIR__ . '/../../vendor/autoload.php';
		include_once __DIR__ . '/../parser/bootstrap.php';
	}