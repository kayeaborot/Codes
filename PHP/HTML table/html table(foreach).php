<?php 
$users = array( 
   array('user_#'=>1,'first_name' => 'Michael', 'last_name' => 'Choi'),
   array('user_#'=>2,'first_name' => 'John', 'last_name' => 'Supsupin'),
   array('user_#'=>3,'first_name' => 'Mark', 'last_name' => 'Guillen'),
   array('user_#'=>4,'first_name' => 'KB', 'last_name' => 'Tonel'),
   array('user_#'=>5,'first_name' => 'asd', 'last_name' => 'Guillen'),
   array('user_#'=>6,'first_name' => 'KB', 'last_name' => 'Tonel'),
   )
?>
<!DOCTYPE html>
<head>
	<title>HTML Table</title>
	<style>
		table, th, td {
		    border: 1px solid black;
		}
		th, td {
		    padding: 15px;
		}
		.trblack{
			background-color: black;
			color: white;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>User #</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Full Name</th>
			<th>Full Name in Uppercase</th>
			<th>Length of full name (without spaces)</th>
		</tr>
			<?php 
				foreach ($users as $user) 
				{
					$full_name = $user['first_name']."". $user['last_name'];
					if($user['user_#'] % 5 == 0)
					{
						echo "<tr class='trblack'>";
					}
					else
					{
						echo "<tr>";	
					}
					echo "<td>".$user['user_#']."</td>";
					echo "<td>".$user['first_name']."</td>";
					echo "<td>".$user['last_name']."</td>";
					echo "<td>".$full_name."</td>";
					echo "<td>".strtoupper($user['first_name'])." ".strtoupper($user['last_name'])."</td>";
					echo "<td>".strlen(trim($full_name))."</td>";
					echo "</tr>";
				}	
			?>
	</table>
</body>
</html>