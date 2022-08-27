<?php
include "login.php";

        if (isset($_POST['pop'])) {

            $_SESSION['weddingid'] = $enc;
            $em = password_hash($enc, PASSWORD_DEFAULT);
            header("location: localhost/lovus/HTML/01_index_onepage.php?wedding=$em");
        }else {
            echo "No correct";
            $er= "Please login to access this page";
            header("location: forms/betler_v.1.1/html/login-1.html?hash didnt work");
        }
     
