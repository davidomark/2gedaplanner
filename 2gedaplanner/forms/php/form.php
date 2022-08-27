<?php
    include "dbconn.php";

    if(isset($_POST['pack'])){
        $packages = $_POST['package'];
        if (!isset($_POST['submit']) & !isset($packages)) {
            $error = "Please click the button";
            header("location: formstart.php?$error");
        }else {
            
            $ordernumber = rand().time().date('YmdHis');
            $sql = "INSERT INTO `bride` (orderid) VALUES ($ordernumber)";
            $sql2 = "UPDATE bride SET `packages`= '$packages' WHERE `orderid` = '$ordernumber'";
            if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql2)) {
                session_start();
                $_SESSION['id'] = $ordernumber;

                header("location: ../contact-bride.php?id=$ordernumber&package=$packages");

                } else{
                    $fail = "Please connection error";
                    header("location: formstart.php?$fail");
                }
        }
    }
   