<?php
class Chess
{
	public function Chessing($input)
	{
		require('SecondReader.php');
		$FigurePlace = ReadFromConsole($input);
		if (($FigurePlace[0] == $FigurePlace[2]) || ($FigurePlace[1] == $FigurePlace[3]))
		{
			return 'ДА';
		}
		else
		{
			return 'НЕТ';
		}
	}
}
$Chess = new Chess();
$Chess->Chessing();