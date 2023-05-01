<?php

    include 'connect.php';
    $db_host="Localhost";
    $db_user="root";
    $db_pass="";
    $db_name="onlineScoreSheet";
    $connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name); 
    mysqli_select_db($connection, 'onlineScoreSheet');
    //Inserting Mutiple data into the table
    $query = "INSERT INTO ScoreTable (matric_number, firstname, lastname, SENG406, SENG412, SENG404, SENG408)
        VALUES ('19/1752', 'Zoe', 'Afolabi', '80', '90', '85', '86');";
    $query .= "INSERT INTO ScoreTable (matric_number, firstname, lastname, SENG406, SENG412, SENG404, SENG408)
        VALUES ('19/1288', 'Favour', 'Chimaraoke', '90', '75', '79', '81');";
    $query .= "INSERT INTO ScoreTable (matric_number, firstname, lastname, SENG406, SENG412, SENG404, SENG408)
        VALUES ('20/3144', 'Joyce', 'King', '68', '70', '90', '80');";
    $query .= "INSERT INTO ScoreTable (matric_number, firstname, lastname, SENG406, SENG412, SENG404, SENG408)
        VALUES ('19/2656', 'Labake', 'Onifade', '79', '94', '65', '94');";
    $query .= "INSERT INTO ScoreTable (matric_number, firstname, lastname, SENG406, SENG412, SENG404, SENG408)
        VALUES ('19/2635', 'Excel', 'Onuorah', '65', '65', '94', '84');";
    $query .= "INSERT INTO ScoreTable (matric_number, firstname, lastname, SENG406, SENG412, SENG404, SENG408)
        VALUES ('19/2250', 'Olamide', 'Opaleye', '98', '65', '98', '78');";
    $query .= "INSERT INTO ScoreTable (matric_number, firstname, lastname, SENG406, SENG412, SENG404, SENG408)
        VALUES ('19/5029', 'Ayo', 'Fakunle', '98', '48', '96', '98');";
    $query .= "INSERT INTO ScoreTable (matric_number, firstname, lastname, SENG406, SENG412, SENG404, SENG408)
        VALUES ('19/6574', 'Chinedu', 'Okata', '98', '78', '78', '48');";
    $query .= "INSERT INTO ScoreTable (matric_number, firstname, lastname, SENG406, SENG412, SENG404, SENG408)
        VALUES ('19/9845', 'Phinima', 'Ozu', '80', '90', '85', '75');";
    $query .= "INSERT INTO ScoreTable (matric_number, firstname, lastname, SENG406, SENG412, SENG404, SENG408)
        VALUES ('19/9632', 'Mosope', 'Adeyemi', '78', '75', '78', '69');";

    if(mysqli_multi_query($connection, $query)) {
        echo "Multiple Data are successfully added";
    } else{ 
        echo " Multiple Error occurred during the Process!" . $query . "<br/>". mysqli_error($connection);
    }
    mysqli_close($connection);

?>