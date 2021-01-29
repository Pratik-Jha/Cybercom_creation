<?php    
$filename = "demo.txt";    
$dataout = fopen($filename, "r");//open file in read mode    
  
$contents = fread($dataout, filesize($filename));//read file    
  
echo "<pre>$contents</pre>";//printing data of file  
fclose($dataout);//close file    
?>   