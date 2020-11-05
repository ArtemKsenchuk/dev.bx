<?php
error_reporting(E_ALL);

function readFromConsole($input)
{

	if ($input == 'true')
	{
		$input = true;
	}
	else if ($input == 'false')
	{
		$input = false;
	}
	else if (is_numeric($input))
	{
		$input = +$input;
	}
	else
	{
		$input = (string)$input;
	}

	return $input;
}
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