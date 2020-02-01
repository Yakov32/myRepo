<?php
	include_once("includes/autoload.php");
	
	//Чтобы сделать новый класс животного, просто создайте его в папке classes и опишите.

	$Stable = new Stable();


	//По условию в хлеву изначально 20 куриц и 10 коров.
	for($i = 0;$i < 20;$i++){
		$Stable->addAnimal(new Chiken);
	}

	for($i = 0;$i < 10;$i++){
		$Stable->addAnimal(new Cow);
	}

	//Ранее тут было так:"$stable->addAnimal('ship')". С передачей строки очень много проблем, лучше передавать сам обьект.
	//Добавляем овец
	$Stable->addAnimal(new Ship);
	$Stable->addAnimal(new Ship);
	$Stable->addAnimal(new Ship);
	$Stable->addAnimal(new Ship);
	$Stable->addAnimal(new Ship);

	//Добавляем пчел
	$Stable->addAnimal(new Bee);
	$Stable->addAnimal(new Bee);
	$Stable->addAnimal(new Bee);

	//Смотрим на животных.
	print_r($Stable->animals);

	//Метод сбора урожая с животных
	$Stable->serveAnimals();

	echo "Собранный урожай с животных\n";
	$Stable->yieldDisplay();
?>