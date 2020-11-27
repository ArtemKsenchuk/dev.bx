<?php
require('SecondReader.php');
echo 'Введите каждую координату через enter'.PHP_EOL;
$FigurePlace = ReadFromConsole();
if (($FigurePlace[0] == $FigurePlace[2]) || ($FigurePlace[1] == $FigurePlace[3]))
{
	echo 'true';
}
else
{
	echo 'false';
}

