 <?php
	
	include '../includes/mysql.inc.php';
	
	//CONSTANTS
	$table_name = "checkin_color_run_2015";
	//END OF CONSTANTS
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST'){

		$return_arr = array();
		$return_arr['name'] = $_POST['name'];
		$db_data['signup_time'] = $_POST['signup_time'];
		
		$signout_str = "UPDATE $table_name
							SET signed_in=0
							WHERE signup_time=:signup_time AND signed_in=1";
		
		$signin_str  = "UPDATE $table_name
							SET signed_in=1
							WHERE signup_time=:signup_time AND signed_in=0";
		
		$signout_stmt = $dbh->prepare($signout_str);
		$signin_stmt = $dbh->prepare($signin_str);
		
		$signout_stmt->execute($db_data);
		$signin_stmt->execute($db_data);
		echo json_encode($return_arr);	

	} else if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	
		$return_arr = array();
		
		if ( isset($_GET['signup_time']) ) {
		
			$db_data['signup_time'] = $_GET['signup_time'];
			$select_str = "SELECT * FROM $table_name
			where signup_time = :signup_time";
			
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