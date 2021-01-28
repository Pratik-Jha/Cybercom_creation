<?php
//Here We create a two variable one is for find the word in that and next one is for to replace that word.
$find = array('Pratik','Pinak','Naeem');
$replace = array('P****k','P***k','N***m');
//This condition is work when user give some input else it won't work.
if (isset($_POST['user_input']) && !empty($_POST['user_input'])) {
    $user_input = $_POST['user_input'];
    $new_value=str_replace($find,$replace,$user_input);
    echo $new_value;
}
?> 
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
    <form action="word_censoring.php" method="post">
        <textarea name="user_input" id="user_input" cols="30" rows="10"></textarea><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>