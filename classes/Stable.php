<?php
	class Stable{
		//Здесь в массиве  елемент это обьект, 1 обьект - 1 животное
		public $chikens = array();
		public $cows = array();

		//Образные хранилища в которые складываются весь собранный урожай.
	    public $countMilk;
	    private $countEggs;

		//Конструктор, в нем инициализируются животные:по условию в хлеву изначально 20 куриц и 10 коров.
		public function __construct(){
			//В параметре на 15 строке передается айди животного сформированное из $i + префикс "co" если корова, и "ch" если курица.
			for ($i=0; $i < 20;$i++) { 
			    $this->chikens[] = new Chiken($i . "ch");
			}    
			for ($i=0; $i < 10;$i++) {
			    $this->cows[] = new Cow($i . "co");
			}
		}

		//Метод добавления животного, $animalType содержит "Chiken" или "Cow", а если что-то другое, то функция не срабатывает.
		public function addAnimal($animalType){

			$animalType = strtolower($animalType);
				
				//Генерируем id животного. Если курица то к номеру приписывается префикс "ch", если корова - "co".
				switch ($animalType) {
					case 'chiken':
						$idAnimal = count($this->chikens) . "ch";
						$this->chikens[] = new Chiken($idAnimal);
						return "В хлев добавлена курица\n";
						break;
						
					case 'cow':
						$idAnimal = count($this->cows) . "ch";
						$this->cows[] = new Cow($idAnimal);
						return "В хлев добавлена корова\n";
						break;

					default:
						return "Неправильно введен тип животного";
						break;		
			}	
		}	
		//Функция сбора продукции с животных.
		public function serveAnimals(){
			
			//1 цикл это обход 1-го животного
			//Обохдим куриц
			foreach ($this->chikens as $chiken){
				//если животное зарегестрированно, то собираем с него продукцию
				if($chiken->regInStable == true){
				    $this->countEggs += $chiken->generateYield('chiken');
				}
			}
			//Обходим коров
			foreach ($this->cows as $cow){
				if($cow->regInStable == true){
				    $this->countMilk += $cow->generateYield('cow');
				}
			}
			//Проверка урожая. На яйца нету, потому что там 0 или 1, возможно все курицы дадут 0 яиц.
			if($this->countMilk >=80){
				return true;
			}
			else{
				return false;
			}
		}

		//Метод показа всего собранного  урожая.
		public function yieldDisplay(){
			return  "За заход было собрано: $this->countMilk литров молока и $this->countEggs яиц.";

		}
	} 

	/*................
	 Надеюсь код вам понравился, понимаю что где-то могут быть ошибки или неудачные методы, я всегда готов учиться новому, буду рад если вы опишите все мои ошибки в письме на почту или в ВК.
	  ...............*/
 ?>