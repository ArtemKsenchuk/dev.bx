<?php
error_reporting();
//C:\Users\USER\server\OpenServer\domains\TestDirectory.bx
//C:\Users\USER\server\OpenServer\domains\dev.bx
function WatchingDir($element)
{
	$currentDir = opendir(trim(fgets(STDIN)));
	$list = [
		'dirs' => [],
		'folder' => [],
		'files' => []
	];
	while ($element = readdir($currentDir))
	{
		if (in_array($element, ['.', '..']))
		{
			continue;
		}
		if (is_dir($element))
		{
			$list['dirs'][] = $element;
		}
		if (is_file($element))
		{
			$list['files'][] = $element;
			$list['files']["$element"]['filesize'] = filesize($element);

			if (is_readable($element))
			{
				$list['files']["$element"]['is_readable'] = 'true';
			}
			if (is_writable($element))
			{
				$list['files']["$element"]['is_writable'] = 'true';
			}

		}
		else
		{
			$list['folder'][] = $element;
			if (is_readable($element))
			{
				$list['folder']["$element"]['is_readable'] = 'true';
			}
			if (is_writable($element))
			{
				$list['folder']["$element"]['is_writable'] = 'true';
			}

		}
	}
	closedir($currentDir);
	print_r($list);
}
WatchingDir($element);