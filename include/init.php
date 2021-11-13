<?php

	defined('DS') 		 ? null : define('DS', DIRECTORY_SEPARATOR);
	defined('BASE_DIR') ? null : define('BASE_DIR', 'http://localhost:8081/ecommerce/eshopper');
	defined('LIB_PATH')	 ? null : define('LIB_PATH',BASE_DIR.DS.'include');



	//include all the required files
	require_once("config.php");
	require_once("database.php");
	require_once("url_helper.php");
	require_once("functions.php");
	require_once("core.php");
	//require_once("controller/shop.php");

?>