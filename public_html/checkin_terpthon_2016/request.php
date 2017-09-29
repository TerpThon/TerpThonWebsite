 <?php
	
	include '../includes/mysql.inc.php';
	
	//CONSTANTS
	$table_name = "checkin_terpthon_2016";
	//END OF CONSTANTS
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST'){

		$return_arr = array();
		$requestType = $_POST['requestType'];
		$return_arr['name'] = $_POST['name'];
		$db_data['participant_id'] = $_POST['participant_id'];
		
		$signout_str = "UPDATE $table_name
							SET signed_in=0
							WHERE participant_id=:participant_id";
		
		$signin_str  = "UPDATE $table_name
							SET signed_in=1
							WHERE participant_id=:participant_id";
		if ($requestType === 'signin') {
				$stmt = $dbh->prepare($signin_str);
		} else if ($requestType === 'signout') {
				$stmt = $dbh->prepare($signout_str);
		} else {
				$return_array['name'] = "Well that didn't work.....";
		}
		
		$stmt->execute($db_data);
		echo json_encode($return_arr);	

	} else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	
		$return_arr = array();
		
		if ( isset($_GET['participant_id']) ) {
		
			$db_data['participant_id'] = $_GET['participant_id'];
			$select_str = "SELECT * FROM $table_name
			where participant_id = :participant_id";
			
		} else if ( isset($_GET['get_all']) ) {
			$select_str = "SELECT * FROM $table_name";
		}
		
		$select_stmt = $dbh->prepare($select_str);
		
		$select_stmt->execute($db_data);
		
		while ($curr = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
			$return_arr[] = $curr;
		}

		echo json_encode($return_arr);
		
	}
	
 ?>