<?php
/*
function intvalDeep($value)
{
	if (is_array($value))
	{
		foreach ($value as $k => $v)
		{
			$result[$k] = intvalDeep($v);
		}
	}
	else
	{
		$result = intval($value);
	}
	return $result;
}
*/
$our_boi = 6;

function WhoDatBoi($value)
{
	if (is_array($value))
	{
		foreach ($value as $v)
		{
		WhoDatBoi($v);
		}

	}else{

		if ($value == $our_boi)
		{
			return 'True';
		}

		}
}
	var_dump( WhoDatBoi( [1, [2,3], [4, [5, [6]]]]));
