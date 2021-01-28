<?php

$match = '123';

if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if (!empty($_POST['password'])) {
        if ($password == $match) {
            echo "The entered password is correct";
        } else {
            echo "The entered password is incorrect";
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Method</title>
</head>

<body>
<h2>Taking data with Post Method</h2>

    <form action="#" method="POST">
        Password :
        <br><input type="password" name="password" placeholder="Enter password eg: 123"><br>
        <input type="submit" name="submit">
    </form>
</body>

</html>