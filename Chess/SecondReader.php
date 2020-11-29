<?php
function readFromConsole()
{
	$array = [];
	while (count($array) < 4)
	{
		$input = trim(fgets(STDIN));
		if (is_numeric($input) && $input < 9 && $input > 0)
		{
			$array[] = +$input;
		}
		else
		{
			echo 'Некорректно введена координата';
		}
	}
	return $array;
}
