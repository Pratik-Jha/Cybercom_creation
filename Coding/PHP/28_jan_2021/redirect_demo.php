<?php
	
	ob_start(); //creates an output buffer
?>


<h1>My Page</h1>
This is my World.

<?php
	$redirect_page = 'http://www.cybercom.co.in/';
	$redirect = true;


	if ($redirect==true) {
		header('location: '. $redirect_page);
	}

	ob_end_clean(); //Used to delete the top-most output buffer and all of its contents.
	ob_end_flush(); //Used to deletes the top-most output buffer and outputs all of its contents.
	
?>