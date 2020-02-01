<?php
	abstract class idGenerator{

		public static  function generateId($obj){
			
			$className = get_class($obj);
			$animalId = substr($className,0,2) . $className::$countObjects;
			$className::$countObjects++;
			return $animalId;
		}
	} 
 ?>