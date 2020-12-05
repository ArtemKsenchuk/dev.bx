<?php
require_once 'SecondReader.php';
require_once 'SecondChess.php';



function ChessTesting()
{
    $Chess = new Chess();

	$result = $Chess->Chessing(array(1,2,3,4));
    echo 'Результат после ввода 1,2,3,4 : '. $result . ($result === 'НЕТ' ? ' passed' : ' failed').PHP_EOL;

    $result = $Chess->Chessing(array (2,6,3,6));
	echo 'Vertical Test : '. $result . ($result === 'ДА' ? ' passed' : ' failed').PHP_EOL;

    $result = $Chess->Chessing(array (2,6,3,6));
    echo 'Horizontal Test : '. $result . ($result === 'ДА' ? ' passed' : ' failed').PHP_EOL;

    $result = $Chess->Chessing(array (1,1,5,5));
    echo 'Diagonal Test : '. $result . ($result === 'НЕТ' ? ' passed' : ' failed').PHP_EOL;
}
ChessTesting();


