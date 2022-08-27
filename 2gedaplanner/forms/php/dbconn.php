<?php
    $dbserver = "sql107.epizy.com";
    $dbusername = "epiz_31846068";
    $dbpassword = "EZEful4sMxM";
    $dbname = "epiz_31846068_lovus";

    $conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbname);

    if(!$conn){
        die("connection failed: ".mysqli_connect_error());
    }
?>