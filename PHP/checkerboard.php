<?php 
	//$color = rand("#000000","#ffffff");
?>

<!DOCTYPE html>
<head>
	<title>Checkerboard</title>
	<style>
		table {
		    border-collapse: collapse;
		}
		table, td {
		    border: 1px solid black;
		}
		th, td {
		    padding: 15px;
		}
		.trblack{
			background-color: black;
		}
		.trred{
			background-color: red;
		}
	</style>
</head>
<body>
	<table>
		<tr>
			<?php 
				// $colors = array('trred','trblack');
				// foreach ($colors as $color => $value) 
				// {
				// 	$randcolor = $colors[rand(0,1)];
				// 	
				// }
			// $rand = dechex(rand(0xff0000, 0x000000);
			// echo "<td background-color:'#".$rand."'></td>";
			 ?>
			<td class="trred"></td>
			<td class="trblack"></td>
			<td class="trred"></td>
			<td class="trblack"></td>
			<td class="trred"></td>
			<td class="trblack"></td>
			<td class="trred"></td>
			<td class="trblack"></td>
		</tr>
	</table>
</body>
</html>