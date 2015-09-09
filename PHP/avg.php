<?php
$A = [1,2,5,10,255,3];
$i = 0;
$sum = 0;
$avg = 0;
for($i=0;$i<count($A);$i++)
{
	$sum+=$A[$i];
	$avg= $sum / count($A);
}
echo "The average is: ".$avg;
?>