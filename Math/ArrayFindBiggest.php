<?php
error_reporting(E_ALL);
require('MyReadFromConsole.php');
function FindAmountOfBiggest($input,$array)
{

	$item = ReadFromConsole($input);
	if ($item != 'stop')
	{
		$array[] = $item;
		FindAmountOfBiggest($input,$array);
	}
	else
	{
		echo 'Amount of biggest numbers = '.array_count_values($array)[max($array)];
	}
}
FindAmountOfBiggest( '', []);
