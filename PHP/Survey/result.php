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
	<h1>Submitted Information</h1>
	<p>Name: <?php echo $_POST['name']?></p><br/>
	<p>Dojo Location: <?php echo $_POST['location']?></p><br/>
	<p>Favorite Language: <?php echo $_POST['language']?></p><br/>
	<p>Comment: <?php echo $_POST['comment']?></p><br/>
	<button onclick="history.back(-1)">Go back</button>
</body>
</html>