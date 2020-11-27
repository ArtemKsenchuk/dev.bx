<?php
function readFromConsole()
{
	$array = [];
	while (count($array) < 4)
	{
		$input = trim(fgets(STDIN));
		if (is_numeric($input))
		{
			$array[] = +$input;
		}
	}
	return $array;
}
