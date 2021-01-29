<?php
session_start();
session_destroy();
//this is used to destroy all the session which is created.
// unset($_SESSION("user")); //this is used to delete a particular session variable.  
?>
<h2><a href="session1_demo.php">Back</a></h2>