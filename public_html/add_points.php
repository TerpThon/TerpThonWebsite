<?php
	$points = $_POST['points'];
	$team = $_POST['team'];

	include 'includes/mysql.inc.php';
	$stmtString = "UPDATE colorwars_2015_totals SET points = points + $points WHERE team = '$team'";
	$stmt = $dbh->prepare($stmtString);
	$stmt->execute();
	echo json_encode($stmtString);
?>