<?php

$array = array(2,4,10,16);

function multiply($array,$num)
{
	$result = array();
	foreach ($array as $key) 
	{
		$product = $key * $num;
		array_push($result, $product);
	}
	var_dump($result);
}
multiply($array, 5);  
?>