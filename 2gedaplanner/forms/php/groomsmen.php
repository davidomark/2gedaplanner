<?php
    require 'dbconn.php';
    $orderid = $_POST['orderid'];
    $packages = $_POST['packages'];
        

    if (isset($_POST["submit"])) {
        $chgname = $_POST["chgname"];
        $g1name = $_POST["g1name"];
        $g2name = $_POST["g2name"];
        $g3name = $_POST["g3name"];
        $g4name = $_POST["g4name"];
        $g5name = $_POST["g5name"];
        $g6name = $_POST["g6name"];
        $g7name = $_POST["g7name"];
        $g8name = $_POST["g8name"];
        $g9name = $_POST["g9name"];
        $g10name = $_POST["g10name"];
        $orderid = $_POST['orderid'];
        //$weddingid = $username.$lastname;
        
        //$sql = "INSERT INTO `bride`(`chgname`, `g1name`, `g2name`, `g3name$g3name_gride`, `g4name`) VALUES ('$chgname','$g1name','$g2name','$g3name','$g4name')";
        $sql = "UPDATE `bride` SET 
        `chgname`= '$chgname', 
        `g1name`='$g1name', 
        `g2name`='$g2name',  
        `g3name` = '$g3name', 
        `g4name` = '$g4name',
        `g5name`='$g5name', 
        `g6name`='$g6name',  
        `g7name` ='$g7name', 
        `g8name` = '$g8name', 
        `g9name` = '$g9name', 
        `g10name` = '$g10name'
        WHERE `orderid` = '$orderid'";

        if (mysqli_query($conn, $sql)) {
        //echo "New record created successfully";
        header("location: ../../index_onepage.php?id=$orderid&package=$packages");

        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    
    }
    
?>

