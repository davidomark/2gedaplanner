<?php
    require_once 'dbconn.php';
	$orderid = $_POST['orderid'];
	$packages = $_POST['packages'];
    
        
    if(isset($_POST['submit']) && isset($_FILES['groompic']))
    {
        echo "<pre>";
	print_r($_FILES['groompic']);
	echo "</pre>";

	$img_name = $_FILES['groompic']['name'];
	$img_size = $_FILES['groompic']['size'];
	$tmp_name = $_FILES['groompic']['tmp_name'];
	$error = $_FILES['groompic']['error'];

	if ($error === 0) {
		if ($img_size > 2500000) {
			$em = "Sorry, your file is too large.";
		    header("Location: ../contact-groom.php?id=$orderid&package=$packages&error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'wed_img/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

						// Insert into Database
               
                        $firstname = $_POST['groom_first_name'];
                        $lastname = $_POST['groom_last_name'];
                        //$username = $_POST['username'];
						$orderid = $_POST['orderid'];
                        $emailaddress = $_POST['groom_email_address'];
                        $aboutbride = $_POST['about_groom_field'];
						
                        //$weddingid = $username.$lastname;
                       
                        $sql3 = "UPDATE bride SET
                                `groompic`= '$new_img_name'
                                WHERE `orderid` = '$orderid'";

						$sql = "UPDATE bride SET
						`groom_first_name`= '$firstname',
						`groom_last_name`= '$lastname',
						`groom_email_address`= '$emailaddress',
						`about_groom_field`= '$aboutbride'
						WHERE `orderid` = '$orderid'";
                        



       // $sql = "INSERT INTO `register`(`first_name`, `last_name`, `username`, `emailaddress`, `password1`, `wedding_id`) VALUES ('$firstname', '$lastname', '$username', '$emailaddress', '$password1', '$weddingid')";
       // $sql2 = "INSERT INTO `bride` (`wedding_id`) VALUES ('$weddingid')";
            
    //$sql2 = "INSERT INTO `register`(`userimg`) VALUES ('$userimg')";
        if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql3)) {
        echo "<script> alert (New record created successfully) </script>";
        header("location: ../contact-ourjourney.php?id=$orderid&package=$packages");

        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
				//header("Location: ../contact-bride.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: ../contact-groom.php?error=$em&id=$orderid&package=$packages");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: ../contact-groom.php?error=$em&id=$orderid&package=$packages");
	}

}else {
	$ro = "isnotset";
	header("Location: ../contact-groom.php?error=$ro&id=$orderid&package=$packages");
}
        


  
    