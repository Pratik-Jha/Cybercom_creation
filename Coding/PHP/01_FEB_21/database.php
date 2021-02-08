<?php
	
	require 'connect.php';
?>

<form action="#" method="GET">
	Choose a Food type :
	<select name="uh">
		<option value="u">Unhealth</option>
		<option value="h">Health</option>
	</select>
	<input type="submit" name="submit">
</form>


<?php

if (isset($_GET['uh']) && !empty($_GET['uh'])) {

	$uh = strtolower($_GET['uh']);


	if($uh=='u' || $ih=='h')
	{
		$qry = "SELECT 'food', 'calories' FROM 'food' WHERE 'health_unhealth'='$uh' ORDER BY 'id' DESC";

		if($res = mysqli_query($con, $qry))
		{

			if(mysqli_num_rows($res)==NULL)
			{
				echo "No resultrs found.";
			}
			else {
				while ($row = mysqli_fetch_assoc($res) {
					$food = $row['food'];
					$calories = $row['calories'];

					echo $food. ' has '. $calories.'<br>';
				}
			}
 		}else {
			echo "Query Failed";
		}
	}

}
	
?>