<?php

    include 'connect.php';
    //create Database query 
    $sql="CREATE DATABASE onlineScoreSheet";
    if($connection) {
        if (mysqli_query($connection, $sql)){
            echo "Database is successfully created";
        }
        else {
            echo "Error creating Database: ".mysqli_error($connection);
        } 
        mysqli_close($connection);
    }

?>