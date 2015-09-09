<!DOCTYPE html>
<head>
	<title>Edit User</title>
</head>
<body>
	<h3><a href="/logout">LOGOUT</a></h3>
	<h2>Edit User # <?= $user_data['id'] ?></h2>
	<form action="/show_dashboard" method="post">
		<input type="submit" value="Return to Dashboard"/>
	</form>
	<h3>Edit Information</h3>
<?=		"<form action='/update_userdata' method='post'>
				<input type='hidden' name='id' value='" . $user_data['id'] . "'>
				<label>Email Address:</label><br/>
				<input type='text' name='email'value='" . $user_data['email'] . "'><br/><br/>
			<label>First Name:</label><br/>
			<input type='text' name='first_name'value='" . $user_data['first_name'] . "'><br/><br/>
			<label>Last Name:</label><br/>
			<input type='text' name='last_name'value='" . $user_data['last_name'] . "'><br/><br/>
			<label>User Level:</label><br/>
			<select name='user_level' value='" . $user_data['user_level'] . "'><br/><br/>
				<option>Admin</option>
				<option>Normal</option>
			</select><br/><br/>
			<input type='submit' value='Save'/>
		</form>";
?>
	<h3>Change Password</h3>
<?=		"<form action='/update_password' method='post'>
			<input type='hidden' name='id' value='" . $user_data['id'] . "'>
			<label>Password:</label><br/>
				<input type='password' name='password'/><br/><br/>
			<label>Confirm Password:</label><br/>
				<input type='password' name='confirm_password'/><br/><br/>
			<input type='submit' value='Update Password'/>
		</form>";
?>
</body>
</html>