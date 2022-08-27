<?php
include ("dbconn.php");
$user =$_GET['user'];

if (isset($_POST["change"])) {
    $id = $_POST['id'];
$status = $_POST['status'];
   $sql3 = "UPDATE bride SET
        `status`= '$status'
        WHERE `bride_id` = '$id'";
   if (mysqli_query($conn, $sql3)) {
              echo '<script>alert("Status Updated")</script>';
       header("location: tables-editable.php?user=$user");

   }
 
        
  
}

?>




                                