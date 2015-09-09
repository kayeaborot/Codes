<?php
$states = array("CA",'WA','VA','UT','AZ');

echo "<select>";
for($i=0; $i < count($states); $i++)
{
	echo "<option>".$states[$i]."</option>";
}
echo "</select><br/>
	  <select>";
foreach ($states as $key)
{
	echo "<option>".$key."</option>";
}
echo "</select><br/>";

array_push($states, 'NJ', 'NY', 'DE');
echo "<select>";
for($i=0; $i< count($states); $i++)
{
	echo "<option>".$states[$i]."</option>";
}
echo "</select>";
?>