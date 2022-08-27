<?php
      $stat = "0";
      $sql2 = "UPDATE admin SET
      `status`= '$stat'
      WHERE `username` = '$username'";
       $result = $conn->query($sql2);
      header("location: index.php?user=$username");
    unset($_SESSION["user"]);
    session_destroy();
    header("location: auth-logout.html");;
?>