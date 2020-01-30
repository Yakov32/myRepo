<?php

	spl_autoload_register('autoload');

	
	function autoload($className){
		$path   =   "classes/";
		$class  = "$className";
		$format =       ".php";
		$fullPath = $path . $class . $format;

		include_once $fullPath;
	} 
 ?>