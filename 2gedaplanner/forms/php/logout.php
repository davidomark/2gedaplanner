<?php
    session_start();
    
    unset($_SESSION["emailaddress"]);
    unset($_SESSION["username"]);
    unset($_SESSION["userimg"]);
    unset($_SESSION["weddingid"]);
    unset($_SESSION["fullname"]);
    unset($_SESSION["password1"]);
    header("location: ../login-1.html");;
?>