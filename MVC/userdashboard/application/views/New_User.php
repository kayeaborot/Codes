<!DOCTYPE html>
<head>
	<title>New User</title>
</head>
<body>
	<h1>Add a new user</h1>
	<h3><a href="/logout">LOGOUT</a></h3>
	<form action="/show_dashboard" method="post">
		<input type="submit" value="Return to Dashboard"/>
	</form><br/><br/>
	<form action="/add_user" method="post">
		<label>Email Address:</label><br/>
			<input type="text" name="email"/><br/><br/>
		<label>First Name:</label><br/>
			<input type="text" name="first_name"/><br/><br/>
		<label>Last Name:</label><br/>
			<input type="text" name="last_name"/><br/><br/>
		<label>Password:</label><br/>
			<input type="password" name="password"/><br/><br/>
		<label>Confirm Password:</label><br/>
			<input type="password" name="confirm_password"/><br/><br/>
		<input type="hidden" name="description"/>
		<input type="submit" value="CREATE">
	</form>
</body>
</html>