<?php
//In this we use the get method to access the data and show it on the page on the submit button.
if (isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year'])) {
    $day = $_GET['day'];
    $date = $_GET['date'];
    $year = $_GET['year'];
    if (!empty($day) && !empty($date) && !empty($year)) {
        echo $day . '/' . $date . '/' . $year;
    } else {
        echo 'Fill all the fields..';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Use of Get Method</title>
</head>
<body>
<h2>Taking data with Get Method</h2>
<form action="#" method="GET">
    Day : <br><input type="text" name="day"><br>
    Date : <br><input type="text" name="date"><br>
    Year : <br><input type="text" name="year"><br>
    <input type="submit" name="submit">
</form>
</body>
</html>