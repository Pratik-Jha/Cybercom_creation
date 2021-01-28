<?php

require 'confi.php';

foreach ($ip_block as $ip) {
    //echo $ip.'<br>';
    if ($ip == $ip) {
        die('Your IP Address is blocked: ' . $ip);
    }
}
?>
<!-- the below line excute when the die function is not execute -->
<h1>Welcome!!</h1>

<!-- This is the more better Way to Get Visitors IP Address  -->
<?php

//In this we make a three variable.
$http_client_ip = $_SERVER['HTTP_CLIENT_IP']; //This is for getting the client ip address.
$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR']; //This is for moving to the targetd  ip address.
$remote_addr = $_SERVER['REMOTE_ADDR']; //This is for getting the our ip address.

if (!empty($http_client_ip)) {
    $ip = $http_client_ip;
} elseif (!empty($http_x_forwarded_for)) {
    $ip = $http_x_forwarded_for;
} else {
    $ip = $remote_addr;
}

echo $ip;
?>