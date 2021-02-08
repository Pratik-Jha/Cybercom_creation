<?php

	$mysql_host = 'localhost';
	$mysql_user = 'root';
	$mysql_pass = 'root';
	$mysql_db = 'adatabase';


	class ServerException extends Exception
	{
		public function showSpecific() {
			return 'Error on line '.$this->getLine().' in '.$this->getFile();
		} 
	}
	class DatabaseException extends Exception 
	{
		public function showSpecific() {
			return 'Error on line '.$this->getLine().' in '.$this->getFile();
		} 
	}
	
	try {
		if (!@mysqli_connect($mysql_host, $mysql_user, $mysql_pass,$mysql_db)) {
			throw new Exception("Could not connect to server");
		} 
		else {
			echo "connected.";
		}
	} catch (ServerException $e) {
		echo $e->showSpecific();
	} catch (DatabaseException $e) {
		echo $e->showSpecific();
	}
?>
 