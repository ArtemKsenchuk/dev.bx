<?php
require 'read1.php';

function ReadTest()
{
	$result = ReadFromConsole2('true');
	echo 'Результат после ввода true : '. $result . ($result === true ? ' passed' : ' failed'). PHP_EOL.PHP_EOL;

	$result = ReadFromConsole2('false');
	echo 'Результат после ввода false : '. $result . ($result === false ? ' passed' : ' failed'). PHP_EOL.PHP_EOL;

	$result = ReadFromConsole2('1.3');
	echo 'Результат после ввода 1.3 : '. $result . ($result === 1.3 ? ' passed' : ' failed'). PHP_EOL.PHP_EOL;

	$result = ReadFromConsole2('1');
	echo 'Результат после ввода 1 : '. $result . ($result === 1 ? ' passed' : ' failed'). PHP_EOL.PHP_EOL;

	$result = ReadFromConsole2('test');
	echo 'Результат после ввода test : '. $result . ($result === 'test' ? ' passed' : ' failed'). PHP_EOL.PHP_EOL;

	$result = ReadFromConsole2('1');
	echo 'Результат после ввода 1 : '. $result . ($result === 1 ? ' passed' : ' failed'). PHP_EOL.PHP_EOL;

	$result = ReadFromConsole2('!stop');
	echo 'Результат после ввода !stop : '. $result . ($result === null ? ' passed' : ' failed'). PHP_EOL.PHP_EOL;
}

/*
 *readFromConsole('', 'true') - true;
 *readFromConsole('', 'false') - false;
 *readFromConsole('', '!stop') - null;
 *readFromConsole('', '1.3') - 1.3;
 *readFromConsole('', '1') - 1;
 *readFromConsole('', 'test') = 'test;
 *
 */

ReadTest();