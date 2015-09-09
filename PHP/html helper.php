<?php 

class HTML_Helper
{
	public function print_table($names)
	{
		echo "<table><tr>";
		foreach ($names as $key => $value) 
		{
			echo "<th>".$key."</th>";
		}
		echo "</tr><tr>";
		foreach ($names as $key => $value)
		{
			echo "<td>".$value."</td>";
		}
		echo "</table>";
	}
	public function print_select($s,$states)
	{
		echo "<form>";
		echo "<select name='".$s."'>";
		foreach ($states as $state) 
		{
			echo "<option value='".$state."'>".$state."</option>";
		}
		echo "</select>";
		echo "</form>";
	}
}

$names = array("first_name" => "Michael","last_name" => "Choi", "nick_name" => "Sensei"); 
$states = array("CA", "WA", "UT", "TX", "AZ", "NY");

$try1 = new HTML_Helper();
$try2 = new HTML_Helper();

echo $try1->print_table($names);
echo $try2->print_select("state",$states);
 ?>