<?php
    require 'dbconn.php';
    $orderid = $_POST['orderid'];
    $packages = $_POST['packages'];

    if (isset($_POST["submit"])) {
        $chbname = $_POST["chbname"];
        $b1name = $_POST["b1name"];
        $b2name = $_POST["b2name"];
        $b3name = $_POST["b3name"];
        $b4name = $_POST["b4name"];
        $b5name = $_POST["b5name"];
        $b6name = $_POST["b6name"];
        $b7name = $_POST["b7name"];
        $b8name = $_POST["b8name"];
        $b9name = $_POST["b9name"];
        $b10name = $_POST["b10name"];
        $orderid = $_POST['orderid'];
        //$weddingid = $username.$lastname;
        
        //$sql = "INSERT INTO `bride`(`chbname`, `b1name`, `b2name`, `b3name$b3name_bride`, `b4name`) VALUES ('$chbname','$b1name','$b2name','$b3name','$b4name')";
        $sql = "UPDATE `bride` SET 
        `chbname`= '$chbname', 
        `b1name`='$b1name', 
        `b2name`='$b2name',  
        `b3name` = '$b3name', 
        `b4name` = '$b4name',
        `b5name`='$b5name', 
        `b6name`='$b6name',  
        `b7name` ='$b7name', 
        `b8name` = '$b8name', 
        `b9name` = '$b9name', 
        `b10name` = '$b10name'
        WHERE `orderid` = '$orderid'";

        if (mysqli_query($conn, $sql)) {
        //echo "New record created successfully";
        header("location: ../contact-groomsmen.php?id=$orderid&package=$packages");

        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
    }
    
?>

