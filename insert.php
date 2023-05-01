<?php

    $db_host="localhost";
    $db_user="root";
    $db_pass="";
    $db_name="onlineScoreSheet";
    $connection =   mysqli_connect($db_host, $db_user, $db_pass, $db_name);
    mysqli_select_db($connection, 'onlineScoreSheet');
    $query="INSERT INTO ScoreTable (matric_number, firstname, lastname, SENG406, SENG412, SENG404, SENG408)
        VALUES ('19/1752', 'Zoe', 'Afolabi', '80', '90', '85', '86')";
    if(mysqli_query($connection, $query)) { 
        echo "Data is successfully added";
    } else{
        echo " A Fatal Error occurred during the Process!". $query . "<br/>" . mysqli_error($connection);
    }
    mysqli_close($connection);

?>