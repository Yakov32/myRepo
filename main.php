<?php
	//
	require_once("classes/Animal.php");
	//Класс курицы,наследник класса Animal
	require_once ("classes/Chiken.php");
	
	//Класс коровы,наследник класса Animal
	require_once ("classes/Cow.php");
	
	//Класс Хлева
	//Метод добавления животного - addAnimal, в параметре тип животного (chiken/cow)
	//Метод показа всего собранного урожая - yieldDisplay
	//Метод обслуживания животных - serveAnimals 
	require_once ("classes/Stable.php");


	$objStable = new Stable();
	echo "Вас приветствует робот-собиратель дяди Боба.В хлеву 20 куриц и 10 коров. Что? Вы хотите добавить еще животных? Хорошо, сейчас.\n\n";

	echo "Добавляем 1 курицу и 1 корову.\n\n";
	
	echo $objStable->addAnimal("chiken");
	echo $objStable->addAnimal("cow") . "\n";

	echo "Сейчас соберем продукцию с животных.\n";
	
	$serveResult = $objStable->serveAnimals();
	if($serveResult === true){
		echo "Продукция собрана успешно.\n\n";
	}
	else{
		echo "Что-то пошло не так.\n";
	}

	//Показываем на экран число собранной продукции.
	 echo $objStable->yieldDisplay() ."\n";

	 
	
	//.............
	//Пардон за большое количество echo, просто не мог определиться, писать их в функциях, или вот здесь, выбрал все таки здесь..
	//В консоли вывод скудный, надеюсь он вас не отпугнет. Весь функционал в коде.
 ?>