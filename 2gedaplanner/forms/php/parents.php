<?php
    require_once 'dbconn.php';
    $orderid = $_POST['orderid'];
	$packages = $_POST['packages'];
        
    if(isset($_POST['submit']) && isset($_FILES['fbpic']) && isset($_FILES['mbpic']) && isset($_FILES['fgpic']) && isset($_FILES['mgpic']))
    {
        echo "<pre>";
	print_r($_FILES['fbpic']);
	echo "</pre>";

    echo "<pre>";
	print_r($_FILES['mbpic']);
	echo "</pre>";

    echo "<pre>";
	print_r($_FILES['fgpic']);
	echo "</pre>";

    echo "<pre>";
	print_r($_FILES['mgpic']);
	echo "</pre>";


	$img_name = $_FILES['fbpic']['name'];
	$img_size = $_FILES['fbpic']['size'];
	$tmp_name = $_FILES['fbpic']['tmp_name'];
	$error = $_FILES['fbpic']['error'];

    $img_name2 = $_FILES['mbpic']['name'];
	$img_size2 = $_FILES['mbpic']['size'];
	$tmp_name2 = $_FILES['mbpic']['tmp_name'];
	$error2 = $_FILES['mbpic']['error'];

    $img_name3 = $_FILES['fgpic']['name'];
	$img_size3 = $_FILES['fgpic']['size'];
	$tmp_name3 = $_FILES['fgpic']['tmp_name'];
	$error3 = $_FILES['fgpic']['error'];

    $img_name4 = $_FILES['mgpic']['name'];
	$img_size4 = $_FILES['mgpic']['size'];
	$tmp_name4 = $_FILES['mgpic']['tmp_name'];
	$error4 = $_FILES['mgpic']['error'];





	if ($error === 0) {
		if ($img_size > 2500000 && $img_size2 > 2500000 && $img_size3 > 2500000 && $img_size4 > 2500000) {
			$em = "Sorry, your file is too large.";
		    header("Location: ../contact-parents.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

            $img_ex2 = pathinfo($img_name2, PATHINFO_EXTENSION);
			$img_ex_lc2 = strtolower($img_ex2);

            $img_ex3 = pathinfo($img_name3, PATHINFO_EXTENSION);
			$img_ex_lc3 = strtolower($img_ex3);

            $img_ex4 = pathinfo($img_name4, PATHINFO_EXTENSION);
			$img_ex_lc4 = strtolower($img_ex4);


			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs) && in_array($img_ex_lc2, $allowed_exs) && in_array($img_ex_lc3, $allowed_exs) && in_array($img_ex_lc4, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'wed_img/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

                $new_img_name2 = uniqid("IMG-", true).'.'.$img_ex_lc2;
				$img_upload_path2 = 'wed_img/'.$new_img_name2;
				move_uploaded_file($tmp_name2, $img_upload_path2);

                $new_img_name3 = uniqid("IMG-", true).'.'.$img_ex_lc3;
				$img_upload_path3 = 'wed_img/'.$new_img_name3;
				move_uploaded_file($tmp_name3, $img_upload_path3);

                $new_img_name4 = uniqid("IMG-", true).'.'.$img_ex_lc4;
				$img_upload_path4 = 'wed_img/'.$new_img_name4;
				move_uploaded_file($tmp_name4, $img_upload_path4);


						// Insert into Database
               
                        $fbfirstname = $_POST['fbfirst_name'];
                        $fblastname = $_POST['fblast_name'];
                        $mbfirstname = $_POST['mbfirst_name'];
                        $mblastname = $_POST['mblast_name'];
                        $fgfirstname = $_POST['fgfirst_name'];
                        $fglastname = $_POST['fglast_name'];
                        $mgfirstname = $_POST['mgfirst_name'];
                        $mglastname = $_POST['mglast_name'];
                        //$username = $_POST['username'];
						$orderid = $_POST['orderid'];
                       
						
                        //$weddingid = $username.$lastname;
                       
                        $sql3 = "UPDATE bride SET
                                `fbpic`= '$new_img_name',
                                `mbpic`= '$new_img_name2',
                                `fgpic`= '$new_img_name3',
                                `mgpic`= '$new_img_name4'

                                WHERE `orderid` = '$orderid'";

						$sql = "UPDATE bride SET
						`fbfirst_name`= '$fbfirstname',
						`fblast_name`= '$fblastname',
                        `mbfirst_name`= '$mbfirstname',
						`mblast_name`= '$mblastname',
                        `fgfirst_name`= '$fgfirstname',
						`fglast_name`= '$fglastname',
                        `mgfirst_name`= '$mgfirstname',
						`mglast_name`= '$mglastname'
						
						WHERE `orderid` = '$orderid'";
                        



       // $sql = "INSERT INTO `register`(`first_name`, `last_name`, `username`, `emailaddress`, `password1`, `wedding_id`) VALUES ('$firstname', '$lastname', '$username', '$emailaddress', '$password1', '$weddingid')";
       // $sql2 = "INSERT INTO `bride` (`wedding_id`) VALUES ('$weddingid')";
            
    //$sql2 = "INSERT INTO `register`(`userimg`) VALUES ('$userimg')";
        if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql3)) {
        echo "<script> alert (New record created successfully) </script>";
        header("location: ../contact-bridesmaid.php?id=$orderid&package=$packages");

        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
				//header("Location: ../contact-bride.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: ../contact-parents.php?error=$em&id=$orderid&package=$packages");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: ../contact-parents.php?error=$em&id=$orderid&package=$packages");
	}

}else {
	$ro = "isnotset";
	header("Location: ../contact-parents.php?error=$ro&id=$orderid&package=$packages");
}
        


  
    