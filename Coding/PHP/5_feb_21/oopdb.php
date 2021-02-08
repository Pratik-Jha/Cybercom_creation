<?php
	
	// video 199 

	class DatabaseConnect {
		public function __construct($db_host,$db_username,$db_password) {
			if (!@$this->Connect($db_host,$db_username,$db_password)) {
				echo "Connection Failed";
			} else if($this->Connect($db_host,$db_username,$db_password)){
				echo "Connected to ".$db_host;
			}
			
		}

		public function Connect($db_host,$db_username,$db_password) {
			if (!mysqli_connect($db_host,$db_username,$db_password)) {
				return false;
			}
			else {
				return true;
			}
		}
	}


	$con = new DatabaseConnect('localhost','root','root');

?>