<?php 
$users = array( 
		   array('user_#'=>1,'first_name' => 'Michael', 'last_name' => 'Choi'),
		   array('user_#'=>2,'first_name' => 'John', 'last_name' => 'Supsupin'),
		   array('user_#'=>3,'first_name' => 'Mark', 'last_name' => 'Guillen'),
		   array('user_#'=>4,'first_name' => 'KB', 'last_name' => 'Tonel'),
		   array('user_#'=>5,'first_name' => 'asd', 'last_name' => 'Guillen'),
   		   array('user_#'=>6,'first_name' => 'Michael', 'last_name' => 'Choi'),
		   array('user_#'=>7,'first_name' => 'John', 'last_name' => 'Supsupin'),
		   array('user_#'=>8,'first_name' => 'Mark', 'last_name' => 'Guillen'),
		   array('user_#'=>9,'first_name' => 'KB', 'last_name' => 'Tonel'),
		   array('user_#'=>10,'first_name' => 'asd', 'last_name' => 'Guillen'),
   		);
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
		<thead>
			<tr>
				<th>User #</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Full Name</th>
				<th>Full Name in Uppercase</th>
				<th>Length of full name (without spaces)</th>
			</tr>
		</thead>
		<tbody>		
<?php 			$user_count = 0; 

				foreach($users as $user)
				{
					$full_name = $user['first_name']." ".$user["last_name"];
					$tr_class = ($user_count % 5 == 0) ? "trblack" : "";
?>					<tr class="<?= $tr_class; ?>">
						<td><?= $user['user_#']; ?></td>
						<td><?= $user['first_name']; ?></td>
						<td><?= $user['last_name']; ?></td>
						<td><?= $full_name; ?></td>
						<td><?= strtoupper($full_name); ?></td>
						<td><?= strlen(trim($full_name)); ?></td>
					</tr>
<?php				
					$user_count ++;	
}
			?>
		</tbody>
	</table>
</body>
</html>