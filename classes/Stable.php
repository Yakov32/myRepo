<?php
	class Stable{
		//Здесь вложенный массив. Пример: $animals['chikens'][и здесь животные-обьекты]
		public $animals = array();
		
		//Массив с урожаем.
	    public $yield = array();

		//Метод добавления животного.
		public function addAnimal($animal){

			$animal = strtolower($animal);
			$animalsArray = $animal . "s";
			$this->animals[$animalsArray][] = new $animal;			
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