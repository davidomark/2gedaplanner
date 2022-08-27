<?php
    require_once 'dbconn.php';
	$orderid = $_POST['orderid'];
    $packages = $_POST['packages'];
        
    if(isset($_POST['submit']) && isset($_FILES['my_image']))
    {
        echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 2500000) {
			$em = "Sorry, your file is too large.";
		    header("Location: ../contact-bride.php?error=$em&id=$orderid&package=$packages");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'wed_img/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

						// Insert into Database
               
                        $firstname = $_POST['first_name'];
                        $lastname = $_POST['last_name'];
                        //$username = $_POST['username'];
						$orderid = $_POST['orderid'];
                        $emailaddress = $_POST['email_address'];
                        $aboutbride = $_POST['about_field'];
						
                        //$weddingid = $username.$lastname;
                       
                        $sql3 = "UPDATE bride SET
                                `image`= '$new_img_name'
                                WHERE `orderid` = '$orderid'";

						$sql = "UPDATE bride SET
						`first_name`= '$firstname',
						`last_name`= '$lastname',
						`email`= '$emailaddress',
						`about_bride`= '$aboutbride'
						WHERE `orderid` = '$orderid'";
                        



       // $sql = "INSERT INTO `register`(`first_name`, `last_name`, `username`, `emailaddress`, `password1`, `wedding_id`) VALUES ('$firstname', '$lastname', '$username', '$emailaddress', '$password1', '$weddingid')";
       // $sql2 = "INSERT INTO `bride` (`wedding_id`) VALUES ('$weddingid')";
            
    //$sql2 = "INSERT INTO `register`(`userimg`) VALUES ('$userimg')";
        if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql3)) {
        echo "<script> alert (New record created successfully) </script>";
        header("location: ../contact-groom.php?id=$orderid&package=$packages");

        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
				//header("Location: ../contact-bride.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: ../contact-bride.php?error=$em&id=$orderid&package=$packages");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: ../contact-bride.php?error=$em&id=$orderid&package=$packages");
	}

}else {
	$ro = "isnotset";
	header("Location: ../contact-bride.php?error=$ro&id=$orderid&package=$packages");
}
        


  
    