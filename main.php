<?php
	require_once("includes/autoload.php");


	$Stable = new Stable();

	//Добавляем овец
	$Stable->addAnimal("Ship");
	$Stable->addAnimal("Ship");
	$Stable->addAnimal("Ship");
	$Stable->addAnimal("SHIP");
	$Stable->addAnimal("sHiP");

	//Добавляем пчел
	$Stable->addAnimal("bee");
	$Stable->addAnimal("beE");


	$Stable->serveAnimals();

	$Stable->yieldDisplay();
	
	

	 print_r($Stable->animals);

	 print_r($Stable->yield);
	
	?>