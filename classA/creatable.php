<?php

    include 'connect.php';
    $sql = "CREATE TABLE ScoreTable (
            matric_number VARCHAR(10) PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            SENG406 INT(2) NOT NULL,
            SENG412 INT(2) NOT NULL,
            SENG404 INT(2) NOT NULL,
            SENG408 INT(2))";
    if ($connection) {
        mysqli_select_db($connection, 'onlineScoreSheet');
        if(mysqli_query($connection, $sql)) {
            echo "Table Guest is successfully created ";
        } else{
            echo "Error creating table: " . mysqli_error($connection);
        }
        mysqli_close($connection);
    }

?>