<?php
require 'ArrayFindBiggest.php';

function MathTest()
{
	$result = FindAmountOfBiggest(array (2,2,2,3,3),[]);
	echo 'Результат после ввода 2,2,2,3,3 : '. $result . ($result === 2 ? ' passed' : ' failed').PHP_EOL;

	$result = FindAmountOfBiggest('Пять',[]);
	echo 'Результат после ввода Пять : '. $result . ($result === 'Неверный ввод' ? ' passed' : ' failed'). PHP_EOL;

	$result = FindAmountOfBiggest(' ',[]);
	echo 'Результат после ввода пустого поля : '. $result . ($result === 'Неверный ввод' ? ' passed' : ' failed').PHP_EOL;

	$result = FindAmountOfBiggest(array(1,1,1,1),[]);
	echo 'Результат после ввода 1,1,1,1 : '. $result . ($result === 4 ? ' passed' : ' failed').PHP_EOL;

	$result = FindAmountOfBiggest(array(1.3,1.3,0.5,1),[]);
	echo 'Результат после ввода 1.3,1.3,0.5,1 : '. $result . ($result === 2 ? ' passed' : ' failed').PHP_EOL;

}
MathTest();