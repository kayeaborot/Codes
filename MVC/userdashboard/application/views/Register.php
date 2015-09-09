<!DOCTYPE html>
<head>
	<title>Register Page</title>
</head>
<body>
	<h1>Register</h1>
	<form action="/register_user" method="post">
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
		<input type="submit" value="REGISTER">
	</form>
	<br/><a href="/login">Already have an account? Login.</a>
</body>
</html>