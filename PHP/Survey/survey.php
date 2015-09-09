<?php


?>
<!DOCTYPE html>
<head>
	<title>Survey Form</title>
	<style type="text/css">
		form{ 
			text-align: left;
		}
	</style>
</head>
<body>
	<form action="result.php" method="post">
		<label>Your Name: </label>
		<input type="text" name="name"/><br/><br/>
		<label>Dojo Location: </label>
		<select name="location">
			<option value="" disabled="disabled" selected="selected">Please select a location</option>
			<option value="1">asda</option>
			<option value="2">asdasada</option>
		</select><br/><br/>
		<label>Favorite Language: </label>
		<select name="language">
			<option value="" disabled="disabled" selected="selected">Please select a language</option>
			<option value="1">Javascript</option>
			<option value="2">PHP</option>
			<option value="3">C#</option>
		</select><br/><br/>
		<label>Comment (optional): </label>
		<textarea name="comment"> </textarea><br/><br/>
		<input type="submit" name="Submit"/>
	</form>
</body>
</html>