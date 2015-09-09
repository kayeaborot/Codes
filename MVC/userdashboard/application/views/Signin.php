<!DOCTYPE html>
<head>
	<title>Signin Page</title>
</head>
<body>
	<h1>Signin</h1>
	<form action="/signin_user" method="post">
		<label>Email Address:</label><br/>
			<input type="text" name="email"/><br/><br/>
		<label>Password:</label><br/>
			<input type="password" name="password"/><br/><br/>
		<input type="submit" value="SIGNIN">
	</form>
	<br/><a href="/register">Don't have an account? Register.</a>
</body>
</html>