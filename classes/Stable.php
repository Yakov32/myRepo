<?php 
	class Stable{
		//Здесь вложенный массив. Пример: $animals['chikens'][и здесь животные-обьекты]
		public $animals = [];
		
		//Массив с урожаем.
	    public $yield = [];

		//Метод добавления животного.
		public function addAnimal($animalObject){

			$class = get_class($animalObject);
			$animalsArray = $class . "s";
			$this->animals[$animalsArray][] = $animalObject;		
		}	
		
		//Функция сбора продукции с животных.
		public function serveAnimals(){
			
			foreach ($this->animals as $key => $animalsArray) {

				//Чтоб небыло ошибки
				$this->yield[$key] = 0;
			
				for ($i=0; $i < count($animalsArray); $i++) {

					$this->yield[$key] += $animalsArray[$i]->takeYield();	
				}
			}	
		}
		//Метод показа всего собранного  урожая
		public function yieldDisplay(){
		 	print_r($this->yield);
		}
	} 
 ?>