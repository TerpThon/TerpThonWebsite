 <?php
	
	include '../includes/mysql.inc.php';
	
	//CONSTANTS
	$table_name = "checkin_color_run_test";
	//END OF CONSTANTS
	
	$return_arr_signed_in = array();

	$signed_in_str = "SELECT COUNT(*) as c FROM $table_name
	WHERE signed_in != '0'";
	
	$signed_in_stmt = $dbh->prepare($signed_in_str);
	$signed_in_stmt->execute();
	
	while ($curr = $signed_in_stmt->fetch(PDO::FETCH_ASSOC)) {
		$return_arr_signed_in[] = $curr;
	}
	$signed_in = $return_arr_signed_in[0]['c'];


	$return_arr_signed_out = array();

	$signed_out_str = "SELECT COUNT(*) as c FROM $table_name
	WHERE signed_in = '0'";
	
	$signed_out_stmt = $dbh->prepare($signed_out_str);
	$signed_out_stmt->execute();
	
	while ($curr = $signed_out_stmt->fetch(PDO::FETCH_ASSOC)) {
		$return_arr_signed_out[] = $curr;
	}
	$signed_out = $return_arr_signed_out[0]['c'];

	// $net = $signed_in - $signed_out;

	echo "total signed in: $signed_in<br>";
	echo "total signed out: $signed_out<br>";
	// echo "still here: $net";
	
 ?>