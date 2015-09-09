<?php
function draw_stars()
{
	$x = array(4,'Tom',1,'Michael',5,7,'Jimmy Smith');
	foreach ($x as $stars) 
	{
		if(is_int($stars) == true)
		{
			for($i = 1; $i<=$stars;$i++)
			{
				echo "*";
			}
		}
		else
		{
			for($i = 1; $i <= strlen($stars); $i++)
			{
				echo str_repeat($stars[0],$i);
			}
		}
		echo "<br>";
	}
}
draw_stars();
?>