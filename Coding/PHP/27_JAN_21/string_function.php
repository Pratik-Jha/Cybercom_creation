<?php
	//Example of an More on expression matching
	/*function has_space($String)
	{
		if (preg_match('/ /', $String)) {
			return true;
		}
		else
		{
			return false;
		}
	}
	$String = 'Hellogood /morning';
	if (has_space($String)) {
		echo "Has atleast 1 space";
	} else {
		echo "Has no space";
	}*/

	echo "<br>";

	//Example of an String Functions - String length
	/*$String = 'Pratik';
	$string_length = strlen($String);

	for ($i=1; $i <$string_length ; $i++) { 
		echo $i.'<br>';
	}
	*/
	//echo $string_length;

	echo "<br>";

	//Example of an String Functions - Upper Lower case
	/*$String = 'I Am A Good Boy.';

	$string_lower = strtolower($String);
	$string_upper = strtoupper($String);
	//echo $string_lower;
	echo $string_upper;*/
	
	/*if (isset($_GET['name']) && !empty($_GET['name'])) {
		$name = $_GET['name'];
		$name_lc = strtolower($name);

		if ($name_lc === 'Pratik') {
			echo "You are the best.".$name;
		}
	}*/

	echo "<br>";
	//Example of an String Functions - Position - 1 & 2
	/*$offset =0;

	$find = 'book';
	$find_len = strlen($find);
	$String = 'This is my book, and it is of physics.';

	while ($string_pos = strpos($String, $find, $offset)) {
		echo $find. ' Found at ' .$string_pos. '<br>';
		$offset = $string_pos + $find_len;
	}
	*/

	echo "<br>";

	//Example of an String Functions - Replacing Part of String
	/*
	$String = 'This part don\'t search. This part search';
	$string_new = substr_replace($String, 'pk', 29, 4);

	echo $string_new;
	*/

	echo "<br>";

	//Example of an String Functions - Replacing Predefined Part of String
	/*
	$find = array('is','string','example');
	$replace = array('IS','STRING','EXAMPLE');
	$String = 'This is a string, and is an example';
	$new_string = str_replace($find, $replace, $String);
	echo $new_string;
	*/
?>
