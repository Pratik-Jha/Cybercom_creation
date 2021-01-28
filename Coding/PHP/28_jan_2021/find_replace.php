<?php
$offset = 0;
//this condition is used to fetch all the value from the textbox and store it into the varibale.
if (isset($_POST['user_input']) && (isset($_POST['search']) && isset($_POST['replace']))) {
    $text = $_POST['user_input'];
    $search = $_POST['search'];
    $replace = $_POST['replace'];

    $search_lenght = strlen($search);//get the length of the string.
    //Check that not one of the textbox will be empty and if not excute the logic.
    if (!empty($text) && !empty($search) && !empty($replace)) {
        while ($strpos = strpos($text, $search, $offset)) {
            $offset  = $strpos + $search_lenght;
            $text = substr_replace($text, $replace, $strpos, $search_lenght);
        }
        echo $text;
    } else {
        echo "Please fill all the field!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="find_replace.php" method="post">
        <textarea name="user_input" id="user_input" cols="30" rows="10"></textarea><br>
        Search For:<br>
        <input type="text" name="search" id="search"><br><br>
        Replace With:<br>
        <input type="text" name="replace" id="replace"><br><br>
        <button type="submit">Find and Replace</button>

    </form>
</body>

</html>