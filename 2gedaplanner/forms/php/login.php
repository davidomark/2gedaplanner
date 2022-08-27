<?php
    require "dbconn.php";

    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    if (isset($_POST["submit"])) {
        $emailaddress = $_POST['email_address'];
        $password1 = $_POST['password1'];

        $sql = "SELECT * FROM register where emailaddress='".$emailaddress."'AND password1='".$password1."' limit 1";
        
        $result = mysqli_query( $conn, $sql);
        $row = mysqli_fetch_array($result);

        
        //$sql2 = "SELECT * FROM images ORDER BY id DESC";
        //$res = mysqli_query($conn,  $sql);

      /*  if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) {  ?>
           
           <div class="alb">
               <img src="uploads/<?=$images['image_url']?>">
           </div>*/
                // Function definition
function function_alert($message) {
      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}
  
  

        if (mysqli_num_rows($result)==1) {
           // while ($images = mysqli_fetch_assoc($result)){}
            $_SESSION['username'] = $row['username'];
            $_SESSION['userimg'] = $row['userimg'];
            $_SESSION['weddingid'] = $row['wedding_id'];
            $_SESSION['fullname'] = $row['first_name']." ".$row['last_name'];
            $_SESSION['emailaddress'] = $emailaddress;
            //$_SESSION['userimg'] = $images['image_url'];
            $_SESSION['password1'] = $password1;
        
            header("location: ../../../../02_index.php");
            exit();
        }
        else {
            // Function call
            $em = "Invalid Username or password";
            
            header("location: ../login-1.html?error=$em");
            function_alert("INVALID EMAIL OR PASSWORD");
            exit();
        }
        //if (isset($_SESSION["emailaddress"])) {
            
       // }
    }

?>