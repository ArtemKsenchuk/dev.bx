<?php

error_reporting(E_ALL);

function ReadFromConsole($input)
{
	echo "Please type your number or 'stop': ";
	$input = trim(fgets(STDIN));

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
