<?php

$A = array(2,3,'hello');

function print_list($array)
{
	for($i=0; $i<count($array); $i++)
	{
		echo "<ul><li>".$array[$i]."</li></ul>";
	}
}
print_list($A);
?>