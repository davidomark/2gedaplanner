<?php
     include("dbconn.php");

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    if (isset($_POST["submit"])) {
        $username = $_POST['username'];
        $pass = $_POST['pass'];

        $sql = "SELECT * FROM `admin` where username='".$username."'AND password='".$pass."' limit 1";
        
        $result = mysqli_query( $conn, $sql);
        $row = mysqli_fetch_array($result);


        if (mysqli_num_rows($result)==1) {
         
            $_SESSION['username'] = $row['username'];
           
            $stat = "1";
            $sql2 = "UPDATE admin SET
            `status`= '$stat'
            WHERE `username` = '$username'";
             $result = $conn->query($sql2);
            header("location: index.php?user=$username");
            

            exit();
        }
        else {
           
            $em = "Invalid Username or password1";
            
            header("location: auth-login.html?error=$em");
            
            exit();
        }
        
    }else {
        session_destroy();
           
        $em = "Invalid Username or password";
        
        header("location: auth-login.html?error=$em");
        
        exit();
    }

?>