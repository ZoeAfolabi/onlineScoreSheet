<?php

    $db_host="localhost";
    $db_user="root";
    $db_pass="";

    $connection = mysqli_connect($db_host, $db_user, $db_pass);
    if(!$connection) {
        die("Database Connection Failed: ");
    }
    else{
        echo "Connected to database succesfully";
    }

?>