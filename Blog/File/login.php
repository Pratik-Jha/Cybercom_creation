<?php
session_start();
require('../Database/DBhandler.php');
if (isset($_POST['btn_login'])) {

    $username = $_POST['email'];
    $password = $_POST['pwd'];

    // To protect from MySQL injection
    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysqli_real_escape_string($con, $username);
    $password = mysqli_real_escape_string($con, $password);
    $password = md5($password);

    //Check username and password from database
    $sql="select id from user where Email='$username' and Password='$password'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

    //If username and password exist in our database then create a session.
    //Otherwise echo error.

    if (mysqli_num_rows($result) == 1) {
        global $username;
        $_SESSION['username'] = $username; // Initializing Session
        //here i update the last login time in database.
        date_default_timezone_set('Asia/Kolkata');
        $logintime=date("Y-m-d H:i:s");
        $sql="update user set Last_login='$logintime' where Email='$username'";
        mysqli_query($con, $sql);
        header("location: blog_post_listing.php"); // Redirecting To Other Page
    } else {
        echo "<script>alert('Incorrect username or password.')</script>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/login.css">
</head>

<body style="background-color:aquamarine">
    <section class="container">
        <section class="login-form">
            <form method="post" action="" role="login">
                <img src="../Images/company_logo.jpg" class="img-responsive" alt="" />
                <input type="email" name="email" placeholder="Email" required class="form-control input-lg" />
                <input type="password" name="pwd" placeholder="Password" required class="form-control input-lg" />
                <button type="submit" name="btn_login" id="btn_login" class="btn btn-lg btn-primary btn-block">Login</button>
                <a class="btn btn-lg btn-primary btn-block" href="registration.php">Regsitration</a>
            </form>
        </section>
    </section>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>