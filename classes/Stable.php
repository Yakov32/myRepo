<?php
	class Stable{
		//Здесь вложенный массив. Пример: $animals['chikens'][и здесь елементы, тоесть обьекты]
		public $animals = array();
		
		//Массив с урожаем.
	    public $yield = array();

		//Конструктор, в нем инициализируются животные:по условию в хлеву изначально 20 куриц и 10 коров.
		public function __construct(){
			for ($i=0; $i < 20;$i++) { 
			    $this->animals['chikens'][] = new Chiken;
			}    
			for ($i=0; $i < 10;$i++) {
			    $this->animals['cows'][] = new Cow;
			}
		}

		//Метод добавления животного.
		public function addAnimal($animal){

			$animal = strtolower($animal);
			$animalsArray = $animal . "s";
			$this->animals[$animalsArray][] = new $animal;			
		}	
		
		//Функция сбора продукции с животных.
		public function serveAnimals(){
			
			foreach ($this->animals as $key => $animalsArray) {
			
				for ($i=0; $i < count($animalsArray); $i++) {

					$this->yield[$key] += $animalsArray[$i]->takeYield();	
				}
			}	
		}
		//Метод показа всего собранного  урожая.
		public function yieldDisplay(){
		 	print_r($this->yield);

		}
	} 
	
 ?>