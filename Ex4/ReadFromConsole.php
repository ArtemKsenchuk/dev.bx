<?php

error_reporting(E_ALL);

function ReadOutOfConsole($input)
{
	if (!isset($input))
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
	if ($input == '!stop')
	{
		return $input = null;
	}
	else
	{
		return $input = (string)$input;
	}
}

$input = null;
var_dump(ReadFromConsole($input));