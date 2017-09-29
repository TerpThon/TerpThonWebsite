<?php
	
	include 'includes/mysql.inc.php';

	$stmt = $dbh->prepare("SELECT team,points FROM colorwars_2015_totals");
	$stmt->execute();
	$testArr = array();
	
	while($curr = $stmt->fetch(PDO::FETCH_ASSOC))
	{
		$testArr[$curr['team']] = intval($curr['points']);
	}
	
	echo json_encode($testArr);
	
?>