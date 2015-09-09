<!DOCTYPE html>
<head>
	<title>Edit Profile</title>
</head>
<body>
	<h3><a href="/logout">LOGOUT</a></h3>
	<h2>Edit Profile</h2>
	<form action="/show_dashboard" method="post">
		<input type="submit" value="Return to Dashboard"/>
	</form>
	<h3>Edit Information</h3>
<?=		"<form action='/update_profile' method='post'>
				<input type='hidden' name='id' value='" . $user_data['id'] . "'>
				<label>Email Address:</label><br/>
				<input type='text' name='email'value='" . $user_data['email'] . "'><br/><br/>
			<label>First Name:</label><br/>
			<input type='text' name='first_name'value='" . $user_data['first_name'] . "'><br/><br/>
			<label>Last Name:</label><br/>
			<input type='text' name='last_name'value='" . $user_data['last_name'] . "'><br/><br/>
			<input type='submit' value='Save'/>
		</form>";
?>
	<h3>Change Password</h3>
<?=		"<form action='/update_userpassword' method='post'>
			<input type='hidden' name='id' value='" . $user_data['id'] . "'>
			<label>Password:</label><br/>
				<input type='password' name='password'/><br/><br/>
			<label>Confirm Password:</label><br/>
				<input type='password' name='confirm_password'/><br/><br/>
			<input type='submit' value='Update Password'/>
		</form>";
?>
	<h3>Edit Description</h3>
<?=		"<form action='/update_description' method='post'>
			<input type='hidden' name='id' value='" . $user_data['id'] . "'>
			<textarea name='description' cols='40' rows='5'></textarea><br/>
			<input type='submit' value='Update Description'/>
		</form>";

?>
</body>
</html>