<?php
session_start();
$_SESSION['num'] = rand(1,100);
?>
<html>
<head>
	<title>Great Number Game</title>
	<style type="text/css">
		h1,h2,form{
			text-align: center;
		}
	</style>
</head>
<body>
	<h1>Welcome to the Great Number Game!</h1>
	<h2>I am thinking of a number between 1 and 100</h2>
	<h2>Take a guess!</h2>
	<form action="numbergame.php" method="post">
		
			<?php
				if(isset($_POST['play']) == true)
				{
					echo "<form action='numbergame.php' method='post'>";
					echo "<input type='text' name='guess'><br/><br/>
					<input type='submit'></form>";
					session_destroy();
				}

				else if($_POST['guess'] < $_SESSION['num'])
				{
					echo "<form action='numbergame.php' method='post'><h3>Too low!!</h3>";
					echo "<input type='text' name='guess'><br/><br/>
					<input type='submit'></form>";
				}
				else if($_POST['guess'] > $_SESSION['num'])
				{
					echo "<form action='numbergame.php' method='post'><h3>Too high!!</h3>";
					echo "<input type='text' name='guess'><br/><br/>
					<input type='submit'></form>";
				}
				else if($_POST['guess'] == $_SESSION['num'])
				{
					echo "<form action='numbergame.php' method='post'><h3>".$_SESSION['num']. " was the number!</h3><br/><br/>";
					echo "<button name='play'>PLAY AGAIN</button></form>";
				}
			?>
	</form>
</body>
</html>