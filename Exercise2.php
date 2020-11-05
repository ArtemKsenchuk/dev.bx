<?php
error_reporting(E_ALL);

require 'read.php';
$sum = 0;

echo 'Введите числа, которые хотите сложить через запятую: ';
$input = trim(fgets(STDIN));
$input = explode(",", $input);
foreach ($input as $value)
{
	$value = readFromConsole($value);
	$sum = $sum + $value;
}
echo $sum;