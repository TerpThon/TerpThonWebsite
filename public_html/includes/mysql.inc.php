<?php
$host = 'cnmcftk.netfirmsmysql.com';
$db_name = 'terpthon';
$db_user = 'cnmcftk';
$db_pass = 'a1b2c3d4!';
$dsn = "mysql:dbname=$db_name;host=$host";
try {
	$dbh = new PDO($dsn, $db_user, $db_pass);
} catch(PDOException $e) {  
    echo "Error connecting to database";
}  
?>