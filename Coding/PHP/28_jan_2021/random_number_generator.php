<?php

if (isset($_POST['roll'])) {
    $rand = rand(1, 6);//this rand function is used to genarate a random number and with the boundation of lower and upper limit.
    echo "After rolling a dice we get " . $rand;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>random number generator</title>
</head>

<body>
    <form action="" method="post">
        <input type="submit" name="roll" value="Roll dice.">
    </form>
</body>

</html>