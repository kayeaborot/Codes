<?php

$sample = array(135, 2.4, 2.67, 1.23, 332, 2, 1.02);
function get_max_and_min($sample)
{
	$output = array();
	$max = 0;
	$min = 0;
	foreach ($sample as $key) 
	{
		if($key > $max)
		{
			$max = $key;
			$output['max'] = $max;
		}
		else if($key < $max)
		{
			$min = $key;
			$output['min'] = $min;
		}
	}
	var_dump($output);
}
get_max_and_min($sample);
?>