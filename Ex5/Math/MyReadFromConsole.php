<?php

error_reporting(E_ALL);
echo "Please type your number or 'stop': ".PHP_EOL;

function ReadFromConsole($input)
{
	if ($input == '')
	{
		$input = trim(fgets(STDIN));
	}
	if ($input == 'true')
	{
		return $input = true;
	}
	if ($input == 'false')
	{
		return $input = false;
	}
	if (is_numeric($input))
	{
		return $input = +$input;
	}
	if (is_float($input))
	{
		return $input = +$input;
	}
	if (is_array($input))
	{
		return $input;
	}
	else
	{
		return $input = (string)$input;
	}

}