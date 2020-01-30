<?php

	spl_autoload_register('autoload');

	
	function autoload($className){

		$path   =   "classes/";
		$format = ".php";
		$fullPath = $path . $className . $format;
		

		include_once $fullPath;
	} 
 ?>