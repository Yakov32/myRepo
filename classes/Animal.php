<?php
	//Класс Chiken и Cow наследники этого класса.
	class Animal{

		public function generateYield($animal){
			switch ($animal) {
				
				case 'chiken':
					$egg = rand(0,1);
					return $egg;
					break;

				case 'cow':
					$milk = rand(8,12);
					return $milk;
					break;	
				
				default:
					return false;
					break;
			}
		}
	}
	//Вообще я думал как лучше: сделать общий метод, или метод генерации урожая в каждом классе животного свой. Пришел к 1-му варианту, хотел показать что знаю как делать наследование. Если все же говнокод - я исправлю.
 ?>