<?php
    require 'dbconn.php';
    $orderid = $_POST['orderid'];
	$packages = $_POST['packages'];

    if (isset($_POST["submit"])) {
        
        $wedding_date = $_POST["wedding_date"];
        $wedding_time = $_POST["wedding_time"];
        $wvenue = $_POST["wvenue"];
        $rvenue = $_POST["rvenue"];
        $reception_time = $_POST["reception_time"];
        $orderid = $_POST['orderid'];
        //$weddingid = $username.$lastname;
        
        //$sql = "INSERT INTO `bride`(`wedding_date`, `wedding_time`, `wvenue`, `rvenue_bride`, `reception_time`) VALUES ('$wedding_date','$wedding_time','$wvenue','$rvenue','$reception_time')";
        $sql = "UPDATE `bride` SET 
        `wedding_date`= '$wedding_date', 
        `wedding_time`='$wedding_time', 
        `wvenue`='$wvenue',  
        `rvenue`= '$rvenue', 
        `reception_time` = '$reception_time' 
        WHERE `orderid` = '$orderid'";

        if (mysqli_query($conn, $sql)) {
        //echo "New record created successfully";
        header("location: ../contact-parents.php?id=$orderid&package=$packages");

        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
    }
    
?>

