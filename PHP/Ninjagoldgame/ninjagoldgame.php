<?php
session_start();

$now = date('F jS Y g:i a');
?>

<html>
<head>
<style type="text/css">
	form{
		text-align: center;
	}
</style>
</head>
<body>

	<?php
		echo "<h1>Your Gold: ".$_SESSION['gold']."</h1>";
	?>
	<form action="process.php" method="post">
		<p>FARM</p>
		<p>(earns 10-20 golds)</p>
		<input type="hidden" name="building" value="farm" />
		<input type="submit" value="Find Gold!"/>
	</form>
	<form action="process.php" method="post">
		<p>CAVE</p>
		<p>(earns 5-10 golds)</p>
		<input type="hidden" name="building" value="cave" />
		<input type="submit" value="Find Gold!"/>
	</form>
	<form action="process.php" method="post">
		<p>HOUSE</p>
		<p>(earns 2-5 golds)</p>
		<input type="hidden" name="building" value="house" />
		<input type="submit" value="Find Gold!"/>
	</form>
	<form action="process.php" method="post">
		<p>CASINO</p>
		<p>(earns/takes 50 golds)</p>
		<input type="hidden" name="building" value="casino" />
		<input type="submit" value="Find Gold!"/>
	</form>
	<form action="ninjagoldgame.php" method="post">
		<input type="submit" value="restart"/>
	</form>
	<p>Your Activities:</p>
	<!-- <select size="6"> -->
		<!-- <option><?php $activity ?></option> -->
			<?php 
				$activities = array();
				if($_SESSION['signs'] !== "+")
				{
					$activity = "<p><span style = 'color:red;'>You entered a ".$_SESSION['place'].
					" and lost ".$_SESSION['add']." golds ".$now."</span></p><br/>";
					//$activities[] = $activity;
					array_push($activities, $activity);
				}
				else
				{
					$activity = "<p><span style = 'color:green;'>You entered a ".$_SESSION['place'].
					" and earned ".$_SESSION['add']." golds. ".$now."</span></p><br/>";
					//$activities[] = $activity;	
					array_push($activities, $activity);
				}
				echo implode("", array_reverse($activities));
			?>
	<!-- </select> -->
</body>
</html>