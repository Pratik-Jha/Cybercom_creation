<?php
setcookie("user", "Pratik Jha"); //here we intialize the cookie.
setcookie("user", "", time() - 5); //Delete the cookie after 5 sec.
?>
<html>

<body>
    <?php
    if (!isset($_COOKIE["user"])) {
        echo "Cookie value is not found!";
        // echo "<br>Refersh the page once again to see the cookie value.";
    } else {
        echo "Cookie Value: " . $_COOKIE["user"]; //call the cookie
        echo "<br>Refresh the page after 5 second.<br> You see that the cookie is expire.";
    }
    ?>
</body>

</html>