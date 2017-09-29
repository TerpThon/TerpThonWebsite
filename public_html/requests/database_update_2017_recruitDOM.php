<?php
include "../includes/mysql.inc.php";

//CONSTANTS - CHANGE THESE IF NECESSARY. REFER TO DOCUMENTATION
$table_name = 'TT_basics';
$event_id_attribute = 'recordid';
$numparticipants_attribute = 'numparticipants';
$numteams_attribute = 'numteams';
$sumdonations_attribute = 'sumdonations';
//END OF CONSTANTS, UPDATE CONSTANT ON LINE 31

$stmt = $dbh->prepare("SELECT	". $numparticipants_attribute .", ". $numteams_attribute .", ". $sumdonations_attribute ."
									FROM 	". $table_name ." 
									WHERE	". $event_id_attribute ." = 1160"); // Event id for Terp Thon 2016
									

//$stmt = $dbh->prepare("SELECT * FROM Terp_Thon_Basic_Info_2016"); // Event id for Terp Thon 2016

$stmt->execute();

$results = array();

while($result = $stmt->fetch(PDO::FETCH_ASSOC))
{
		$results[] = $result;
} 

echo json_encode($results); 
?>