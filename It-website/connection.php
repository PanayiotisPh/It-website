<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $db_name = "iconsolutions";
  
    // Create connection
    $con = mysqli_connect($servername, $username, $password,$db_name);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
?>