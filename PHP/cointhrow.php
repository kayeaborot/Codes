<?php
$attempt = 1;
$head = 0;
$tail = 0;

for($attempt = 1; $attempt<=5000;$attempt++)
{
	$coin = rand(0,1);
	if($coin == true)
	{
		$head++;
		echo "Attempt #".$attempt.": Throwing a coin... It's a head!... 
		Got ".$head." head(s) so far and " .$tail." tail(s) so far <br/>" ;
	}
	else if($coin == false)
	{
		$tail++;
		echo "Attempt #".$attempt.": Throwing a coin... It's a tail!... 
		Got ".$head." head(s) so far and ".$tail." tail(s) so far <br/>" ;	
	}
}
echo "Ending the program - thank you! <br/>";
?>