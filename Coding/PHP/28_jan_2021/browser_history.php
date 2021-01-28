<?php
	
	$browser = get_browser(null, true);
    // print_r($browser); 
    // echo $browser['browser'];
	$browser = strtolower($browser['browser']);

	if($browser!='chrome') {
		echo 'You are not using google chrome . please use it.';
	}

?>