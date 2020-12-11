<?php
//C:/Users/USER/server/OpenServer/domains/TestDirectory.bx
require_once 'WatchingDir.php';
$Dir = opendir('C:/Users/USER/server/OpenServer/domains/TestDirectory.bx/');
$Array = DirCheck($Dir);

function DirTest($Array)
{
	if (
		$Array['folder']['Folder1']['is_readable'] == 'true' &&
		$Array['folder']['Folder1']['is_writable'] == 'true'
	)
	{
		echo 'Folder1 - correct'.PHP_EOL;
	}
	else
	{
		echo 'Folder1 - incorrect'.PHP_EOL;
	}
	if (
		$Array['folder']['Folder2']['is_readable'] == 'true' &&
		$Array['folder']['Folder2']['is_writable'] == 'true'
	)
	{
		echo 'Folder2 - correct'.PHP_EOL;
	}
	else
	{
		echo 'Folder2 - incorrect'.PHP_EOL;
	}
	if (
		$Array['files']['Doc1.txt']['is_readable'] == 'true' &&
		$Array['files']['Doc1.txt']['is_writable'] == 'true' &&
		$Array['files']['Doc2.txt']['filesize'] == 29
	)
	{
		echo 'Doc1 - correct'.PHP_EOL;
	}
	else
	{
		echo 'Doc1 - incorrect'.PHP_EOL;
	}
	if (
		$Array['files']['Doc2.txt']['is_readable'] == 'true' &&
		$Array['files']['Doc2.txt']['is_writable'] == 'true' &&
		$Array['files']['Doc2.txt']['filesize'] == 29
	)
	{
		echo 'Doc2 - correct'.PHP_EOL;
	}
	else
	{
		echo 'Doc2 - incorrect'.PHP_EOL;
	}
}
DirTest($Array);


