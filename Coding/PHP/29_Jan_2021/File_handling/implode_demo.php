<html>

<body>
    <h3>Implode Function</h3>
    <?php
    $arr = array('I', 'am', 'Jha', 'Pratik😎');
    $space_separated = implode(" ", $arr); //to seperate the value it using space.
    $comma_separated = implode(" , ", $arr); //to seperate the value it using comma.
    $slash_separated = implode(" / ", $arr); //to seperate the value it using slash.
    $dot_separated = implode(" . ", $arr); //to seperate the value it using dot.
    $hyphen_separated = implode(" - ", $arr); //to seperate the value it using hyphen.
    echo $space_separated . '<br>';
    echo $comma_separated . '<br>';
    echo $slash_separated . '<br>';
    echo $dot_separated . '<br>';
    echo $hyphen_separated;
    ?>
</body>

</html>