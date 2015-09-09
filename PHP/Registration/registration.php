<?php
session_start();
?>

<!DOCTYPE html>
<head>
	<title>Registration without DB</title>
	<style type="text/css">
		form{
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Register<h1>
	<h2>
		<?php 
			if(isset($_SESSION('errors'))
				foreach ($_SESSION['errors'] as $errors) {
					echo $errors;
				}
				$_SESSION = array();
		 ?>
	</h2>
	<form action="complete.php" method="post" enctype="multipart/form-data">
		<label>* Email:</label>
		<input type="text" name="email"/><br/><br/>
		<label>* First Name:</label>
		<input type="text" name="first_name"/><br/><br/>
		<label>* Last Name:</label>
		<input type="text" name="last_name"/><br/><br/>
		<label>* Password:</label>
		<input type="password" name="password"/><br/><br/>
		<label>* Confirm Password:</label>
		<input type="password" name="confirm_password"/><br/><br/>
		<label>Birth Date:</label>
		<input type="text" name="birth_date"/><br/><br/>
		<label>Profile Picture:</label>
		<input type="file" name="profile_picture"/>
		<br/><br/>
		<input type="submit" value="submit"/>
	</form>
</body>
</html>