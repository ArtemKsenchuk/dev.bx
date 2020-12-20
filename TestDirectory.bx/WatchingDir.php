<?php
error_reporting();
//C:\Users\USER\server\OpenServer\domains\TestDirectory.bx

//$currentDir = 'C:\Users\USER\server\OpenServer\domains\TestDirectory.bx';
function DirCheck($currentDir)
{
	if (!isset($currentDir))
	{
		$currentDir = opendir(trim(fgets(STDIN)));
	}else
	{
		$currentDir = opendir($currentDir);
	}
	$list = [
		'folder' => [],
		'files' => []
	];
	while ($element = readdir($currentDir))
	{
		if (in_array($element, ['.', '..']))
		{
			continue;
		}
		if (is_file($element))
		{
            $list['files'][$element]['filesize'] = filesize($element);
        }
		if (is_readable($element))
		{
			$list['files'][$element]['is_readable'] = true;
		}
		if (is_writable($element))
		{
			$list['files'][$element]['is_writable'] = true;
		}
		else
        {
            $list['folder'][] = $element;
        }
		if (is_readable($element))
		{
			$list['folder'][$element]['is_readable'] = true;
		}
		if (is_writable($element))
		{
			$list['folder'][$element]['is_writable'] = true;
		}

	}
    closedir($currentDir);
    return ($list);
}

var_export(DirCheck($currentDir));