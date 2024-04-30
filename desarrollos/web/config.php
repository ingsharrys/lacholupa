<?php
    //database configuration
    $host       = 'localhost';
    $user       = 'u936058592_huila';
    $pass       = 'b4:wn7!9rcF';
    $database   = 'u936058592_cholupa';

    $connect = new mysqli($host, $user, $pass, $database);

    if (!$connect) {
        die ("connection failed: " . mysqli_connect_error());
    } else {
        $connect->set_charset('utf8mb4');
    }
	
	$GLOBALS['config'] = $connect;

    $ENABLE_RTL_MODE = 'false';

?>