<?php
	//Класс курицы
	require_once ("class_chiken.php");
	
	//Класс коровы
	require_once ("class_Cow.php");
	
	//Класс Хлева
	//Метод добавления животного - addAnimal, в параметре тип животного (chiken/cow)
	//Метод показа всего собранного урожая - yieldDisplay
	//Метод обслуживания животных - serveAnimals 
	require_once ("class_Stable.php");


	$obj = new Stable();
	echo "Вас приветствует робот-собиратель дяди Боба.В хлеву 20 куриц и 10 коров. Что? Вы хотите добавить еще животных? Хорошо, сейчас.\n\n";

	echo "Добавляем 1 курицу и 1 корову.\n\n";
	
	echo $obj->addAnimal("chiken");
	echo $obj->addAnimal("cow") . "\n";

	echo "Сейчас соберем продукцию с животных.\n";
	echo $obj->serveAnimals();

	//Показываем на экран число собранной продукции.
	 echo $obj->yieldDisplay();

	
	//.............
	//Пардон за большое количество echo, просто не мог определиться, писать их в функциях, или вот здесь, выбрал все таки здесь..
	//В консоли вывод скудный, надеюсь он вас не отпугнет. Весь функционал в коде.
 ?>