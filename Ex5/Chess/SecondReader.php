<?php
function ReadFromConsole($input)
{
	$array = [];
	if (is_array($input))
	   {
	   	$array = $input;
	   	return $array;
	   }
	echo "Write every number within 'enter'".PHP_EOL;
	while (count($array) < 4)
	{
		if (!is_array($input))
		{
			$input = trim(fgets(STDIN));
		}
		if (is_numeric($input) && $input < 9 && $input > 0)
		{
			$array[] = +$input;
		}
		else
		{
			echo 'Некорректно введена координата'.PHP_EOL;
		}
	}
	return $array;
}
