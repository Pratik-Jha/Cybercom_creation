<?php
	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = 'root';
	$mysql_db = 'adatabase';
	
	try {
		if (!@mysqli_connect($mysql_host, $mysql_user, $mysql_pass,$mysql_db)) {
			throw new Exception("Could not connect to server");
		} 
		else {
			echo "connected.";
		}
	} catch (ServerException $e) {
		echo "Error : ".$e->getMessage();
	} catch (DatabaseException $e) {
		echo "Error : ".$e->getMessage();
	}
?>
