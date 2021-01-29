<?php  
$datain = fopen('demo.txt', 'w');//opens file in write-only mode  
fwrite($datain, 'Hello this is file created for file handling practise.');  
fclose($datain);  
  
echo "File written successfully";  
?>  