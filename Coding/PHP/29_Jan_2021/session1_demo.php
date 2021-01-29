<?php
session_start();
?>
<html>
<body>
    <?php
    if(isset($_SESSION['user'])){
        echo "Session value is: " . $_SESSION["user"];
    }else{
        echo "No session is declare.";
    }
    echo '<br>';
    ?>

    <a href="unset_session.php">Delete the session variable</a><br>
    <a href="session_demo.php">Declare the session variable</a>

</body>

</html>