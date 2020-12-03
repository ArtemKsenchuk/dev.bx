<?php
error_reporting(E_ALL);
require('MyReadFromConsole.php');

function FindAmountOfBiggest($input,$array)
{
	$item = ReadFromConsole($input);
	if (!is_array($item) && !is_numeric($item) && $item !== 'stop')
	{
		return 'Неверный ввод';
	}
	$counter = 1;
	$biggest = -INF;
	if ($item !== 'stop' && (!is_array($item)))
	{
		$array[] = $item;
		return FindAmountOfBiggest($input, $array);
	}
	elseif (is_array($item))
	{
		$array = $item;
	}
	foreach ($array as $value)
	{
		if ($value == $biggest)
		{
			$counter++;
		}
		if ($value > $biggest)
		{
			$biggest = $value;
			$counter = 1;
		}
	}
	return $counter;
}
var_dump(FindAmountOfBiggest('',[]));
