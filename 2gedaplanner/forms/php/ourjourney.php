<?php
    require_once 'dbconn.php';
    $orderid = $_POST['orderid'];
	$packages = $_POST['packages'];
        
    if(isset($_POST['submit']) && isset($_FILES['hwmpic']) && isset($_FILES['fdpic']) && isset($_FILES['ppic']) && isset($_FILES['epic']) && isset($_FILES['mpic']))
    {
        echo "<pre>";
	print_r($_FILES['hwmpic']);
	echo "</pre>";

    echo "<pre>";
	print_r($_FILES['fdpic']);
	echo "</pre>";

    echo "<pre>";
	print_r($_FILES['ppic']);
	echo "</pre>";

    echo "<pre>";
	print_r($_FILES['epic']);
	echo "</pre>";

    echo "<pre>";
	print_r($_FILES['mpic']);
	echo "</pre>";

	$img_name = $_FILES['hwmpic']['name'];
	$img_size = $_FILES['hwmpic']['size'];
	$tmp_name = $_FILES['hwmpic']['tmp_name'];
	$error = $_FILES['hwmpic']['error'];

    $img_name2 = $_FILES['fdpic']['name'];
	$img_size2 = $_FILES['fdpic']['size'];
	$tmp_name2 = $_FILES['fdpic']['tmp_name'];
	$error2 = $_FILES['fdpic']['error'];

    $img_name3 = $_FILES['ppic']['name'];
	$img_size3 = $_FILES['ppic']['size'];
	$tmp_name3 = $_FILES['ppic']['tmp_name'];
	$error3 = $_FILES['ppic']['error'];

    $img_name4 = $_FILES['epic']['name'];
	$img_size4 = $_FILES['epic']['size'];
	$tmp_name4 = $_FILES['epic']['tmp_name'];
	$error4 = $_FILES['epic']['error'];

    $img_name5 = $_FILES['mpic']['name'];
	$img_size5 = $_FILES['mpic']['size'];
	$tmp_name5 = $_FILES['mpic']['tmp_name'];
	$error5 = $_FILES['mpic']['error'];



	if ($error === 0) {
		if ($img_size > 2500000 && $img_size2 > 2500000 && $img_size3 > 2500000 && $img_size4 > 2500000 && $img_size5 > 2500000) {
			$em = "Sorry, your file is too large.";
		    header("Location: ../contact-ourjourney.php?error=$em&id=$orderid&package=$packages");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

            $img_ex2 = pathinfo($img_name2, PATHINFO_EXTENSION);
			$img_ex_lc2 = strtolower($img_ex2);

            $img_ex3 = pathinfo($img_name3, PATHINFO_EXTENSION);
			$img_ex_lc3 = strtolower($img_ex3);

            $img_ex4 = pathinfo($img_name4, PATHINFO_EXTENSION);
			$img_ex_lc4 = strtolower($img_ex4);

            $img_ex5 = pathinfo($img_name5, PATHINFO_EXTENSION);
			$img_ex_lc5 = strtolower($img_ex5);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs) && in_array($img_ex_lc2, $allowed_exs) && in_array($img_ex_lc3, $allowed_exs) && in_array($img_ex_lc4, $allowed_exs) && in_array($img_ex_lc5, $allowed_exs)) {
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

                $new_img_name5 = uniqid("IMG-", true).'.'.$img_ex_lc5;
				$img_upload_path5 = 'wed_img/'.$new_img_name5;
				move_uploaded_file($tmp_name5, $img_upload_path5);

						// Insert into Database
               
                        $howwemet = $_POST['howwemet_field'];
                        $firstdate = $_POST['firstdate_field'];
                        //$username = $_POST['username'];
						//$orderid = $_POST['orderid'];
                        $proposal = $_POST['Proposal_field'];
                        $engagement = $_POST['engagement_field'];
                        $marriage = $_POST['marriage_field'];
						
                        //$weddingid = $username.$firstdate;
                       
                        $sql3 = "UPDATE bride SET
                                `hwmpic`= '$new_img_name',
                                `fdpic`= '$new_img_name2',
                                `ppic`= '$new_img_name3',
                                `epic`= '$new_img_name4',
                                `mpic`= '$new_img_name5'
                                WHERE `orderid` = '$orderid'";

						$sql = "UPDATE bride SET
						`howwemet_field`= '$howwemet',
						`firstdate_field`= '$firstdate',
						`Proposal_field`= '$proposal',
						`engagement_field`= '$engagement',
                        `marriage_field`= '$marriage'
						WHERE `orderid` = '$orderid'";
                        



       // $sql = "INSERT INTO `register`(`first_name`, `last_name`, `username`, `emailaddress`, `password1`, `wedding_id`) VALUES ('$firstname', '$lastname', '$username', '$emailaddress', '$password1', '$weddingid')";
       // $sql2 = "INSERT INTO `bride` (`wedding_id`) VALUES ('$weddingid')";
            
    //$sql2 = "INSERT INTO `register`(`userimg`) VALUES ('$userimg')";
        if (mysqli_query($conn, $sql) && mysqli_query($conn, $sql3)) {
        echo "<script> alert (New record created successfully) </script>";
        header("location: ../contact-weddingday.php?id=$orderid&package=$packages");

        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
				//header("Location: ../contact-bride.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: ../contact-ourjourney.php?error=$em&id=$orderid&package=$packages");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: ../contact-ourjourney.php?error=$em&id=$orderid&package=$packages");
	}

}else {
	$ro = "isnotset";
	header("Location: ../contact-ourjourney.php?error=$ro&id=$orderid&package=$packages");
}
        


  
    