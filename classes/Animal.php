<?php
	
	//Чтобы сделать новый класс животного, просто создайте его в папке classes и сделайте наследником Animal.
	
	abstract class Animal{
	
		public function __construct(){
			//Формируем ID: первые 2 буквы класса + число существующих у класса обьектов.
			$className = strtolower(get_class($this));
			$animalId = substr($className,0,2) . $className::$countObjects;
			//-- здесь нет, все id будут уникальные.
			$className::$countObjects++;

			$this->id = $animalId;
			$this->regInStable = true;
		} 
	}
 ?>