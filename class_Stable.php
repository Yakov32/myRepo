<?php
	class Stable{
		//Здесь в массиве  елемент это обьект, 1 обьект - 1 животное
		public $chikens = array();
		public $cows = array();

		//Образные хранилища в которые складываются весь собранный урожай.
	    private $countMilk;
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

			if($animalType == "chiken" || $animalType == "cow"){

				//Генерируем id, или же номер животного. Если курица то к номеру приписывается префикс "ch", если корова - "co".
				if($animalType == "chiken"){
				$idAnimal = count($this->chikens) . "ch";
				$this->chikens[] = new Chiken($idAnimal);
				return "В хлев добавлена курица\n";
				}

				if($animalType == "cow"){
				$idAnimal = count($this->chikens) . "co";
				$this->cows[] = new Cow($idAnimal);
				return"В хлев добавлена корова\n";
				}	
			}
			else{
				return "Неправильно введен тип животного\n";
			}
		}	
		//
		public function serveAnimals(){
			
			//Собираем урожай с животных
			//1 цикл это обход 1-го животного

			//Обохдим куриц
			foreach ($this->chikens as $value){
				//если животное зарегестрированно, то собираем с него продукцию
				if($value->regInStable == true)
				    $this->countEggs += $value->ChikensEgg();
			}
			//Обходим коров
			foreach ($this->cows as $value){
				if($value->regInStable == true)
				    $this->countMilk += $value->cowsMilk();
			}
			//Проверка. На яйца нету, потому что там 0 или 1, возможно все курицы дадут 0 яиц.
			if($this->countMilk >=80)
				return "Продукция успешно собрана.\n\n";
		}

		//Метод показа всего собранного  урожая.
		public function yieldDisplay(){
			return  "За заход было собрано: $this->countMilk литров молока и $this->countEggs яиц";
		}
	} 


	/*................
	 Надеюсь код вам понравился, понимаю что где-то могут быть ошибки или неудачные методы, я всегда готов учиться новому, буду рад если вы опишите все мои ошибки в письме на почту.
	 Так же понимаю что возможно слишком много комментариев, я просто хотел чтоб все было придельно понятно.
	 Здесь небыло наследования, я знаю что одинаковые методы у классов желательно выносить в базовый класс, а эти делать наследниками, просто здесь это казалось не особо удачным, так как метод должен считать индивидуальные значения.
	  ...............*/
	  
 ?>