<?php
    $db_server = "localhost";
    $db_username = "root";
    $db_password = "";
    $db_name = "Sessions";

    $_connect = mysqli_connect($db_server, $db_username, $db_password, $db_name);

    if(!$_connect){
        echo "Not Connected";
    }
    else{
        echo "Connected";
    }

?>