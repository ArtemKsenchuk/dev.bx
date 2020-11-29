<?php
class Chess
{
	public function Chessing()
	{
		require('SecondReader.php');
		echo "Wite every number within 'enter'".PHP_EOL;
		$FigurePlace = ReadFromConsole();
		if (($FigurePlace[0] == $FigurePlace[2]) || ($FigurePlace[1] == $FigurePlace[3]))
		{
			echo 'true';
		}
		else
		{
			echo 'false';
		}
	}
}
$Chess = new Chess();
$Chess -> Chessing();