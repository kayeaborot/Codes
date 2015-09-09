<?php
session_start();

function process_gold($building)
{
	$casino_rates = array(
		"farm" => array(10, 20), //[10, 20] php 5.5 or higher
		"house" => array(5, 10),
		"cave" => array(2, 5),
		"casino" => array(0, 50),
	);

	$normal_compute = TRUE;
	
	if($building == 'casino')
	{
		$winning_rate = rand(1, 10);
		$normal_compute = ($winning_rate >= 7) ? TRUE : FALSE;
	}

	$gold_earned = rand($casino_rates[$building][0], $casino_rates[$building][1]);

	if($normal_compute)
		$_SESSION['gold'] += $gold_earned;
	else($normal_compute)
		$_SESSION['gold'] -= $gold_earned;
	
	return array(
		'place' => $building,
		'add' => $gold_earned, 
		'gold' => $_SESSION['gold'],
		'normal_compute' => $normal_compute
	);
}

$attempt_to_find_gold = process_gold($_POST['building']); //farm

//code for the activity log $attempt_to_find_gold['place']

header("Location:ninjagoldgame.php");
die();
?>
