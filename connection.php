<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "schools";

    $conn = @mysqli_connect($servername, $username, $password, $dbname);

    if($conn){
        echo "Connection Successful";
    }
    else{
        echo "Connection Failed";
    }
?>