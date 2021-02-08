<?php

	
	$conerror = 'Could not connect';

	$host = 'localhost';
	$user = 'root';
	$password ='root';
	$db = 'adatabase';

	$con = mysqli_connect($host,$user,$password) or die($conerror); 

	if (!$con) {
		if (!mysqli_select_db($con,$db)) {
			die($conerror);
		}
	}
	else {
		echo "connected.";
	}
	//mysqli_select_db($con,$db);

	

?>