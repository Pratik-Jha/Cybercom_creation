<?php

// opening a directory 
$dir = opendir("C:/xampp/htdocs/cybercom/29_Jan_2021/File_handling");

// reading the contents of the directory 
while (($file = readdir($dir))) {
    if ($file != '.' && $file != '..') {
        // echo ("File Name: " . $file);
        echo '<a href="'.$file.'">'.$file.'</a><br>';
    }
}

// closing the directory 
closedir($dir);
?>