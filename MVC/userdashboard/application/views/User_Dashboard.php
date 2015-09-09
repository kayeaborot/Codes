<!DOCTYPE html>
<head>
	<title>User Dashboard</title>
	<style>
		table, th, td 
		{
		    border: 1px solid black;
		    border-collapse: collapse;
		}
		th, td
		{
		    padding: 10px;
		}
	</style>
</head>
<body>
	<h2>All Users</h2>
<?=	"<h3><a href='/show_profile/" . $this->session->userdata('id') . "'>PROFILE</a></h3>";
?>
	<h3><a href="/logout">LOGOUT</a></h3>
	<table>
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Created At</th>
				<th>User Level</th>
			</tr>
		</thead>
		<tbody>
			<?php 
				foreach ($users as $user) 
				{
					$name = $user['first_name'] . " " . $user['last_name'];
					$created_at = date('F d, Y', strtotime($user['created_at']));
				
					echo "<tr>
							<td>" . $user['id'] . "</td>
							<td><a href='/user_info/" . $user['id'] . "'>" . $name . "</a></td>
							<td>" . $user['email'] . "</td>
							<td>" . $created_at . "</td>
							<td>" . $user['user_level'] . "</td>
						</tr>";
				}
			 ?>
		</tbody>
	</table>
</body>
</html>