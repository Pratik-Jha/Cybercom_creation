<?php
$status = unlink('demo1.txt');
if ($status) {
    echo "File deleted successfully";
} else {
    echo "File Not Deleted!";
}
?>