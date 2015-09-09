<?php

$users['first_name'] = "Michael";
$users['last_name'] = "Choi";
$keyname = [];

function print_users($users,$keyname)
{
	foreach (array_keys($users) as $key)
	{
		$keyname[] = $key;
	}
	echo "There are ".count($users)." keys in this array: ".$keyname[0].", ".$keyname[1].".<br>";
	echo "The value in the key '".$keyname[0]."' is '".$users['first_name']."'.<br>";
	echo "The value in the key '".$keyname[1]."' is '".$users['last_name']."'.<br>";
}
echo print_users($users,$keyname);
?>

