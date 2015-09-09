<?php
$A = [1,2,5,10,255,3];
$i = 0;
$sum = 0;
for($i=0;$i<count($A);$i++)
{
	$sum+=$A[$i];
}
echo "The sum is: ".$sum;
?>