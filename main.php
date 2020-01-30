<?php
	include_once("includes/autoload.php");
	
	//Чтобы сделать новый класс животного, просто создайте его в папке classes и опишите.

	$Stable = new stable();

	//По условию в хлеву изначально 20 куриц и 10 коров.
	for($i = 0;$i < 20;$i++){
		$Stable->addAnimal('Chiken');
	}

	for($i = 0;$i < 10;$i++){
		$Stable->addAnimal('cow');
	}

	
	//Добавляем овец
	$Stable->addAnimal("Ship");
	$Stable->addAnimal("Ship");
	$Stable->addAnimal("Ship");
	$Stable->addAnimal("SHIP");
	$Stable->addAnimal("sHiP");

	//Добавляем пчел
	$Stable->addAnimal("bee");
	$Stable->addAnimal("beE");

	//Смотрим на животных.
	print_r($Stable->animals);

	//Метод сбора урожая с животных
	$Stable->serveAnimals();

	echo "Собранный урожай с животных\n";
	$Stable->yieldDisplay();
?>