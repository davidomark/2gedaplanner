<?php
require("forms/php/dbconn.php");
session_start();
$orderid = $_SESSION['orderID'];
$packages = $_SESSION['package'];

    if (!isset($_POST['submit']) && !isset($orderid)) {
        $error = "error sending form please fill it again";
        header("location: ../../index_onepage.php?id=$orderid&package=$packages&err=$error");
    }else{
        
                        $fullname = $_POST['Name'];
                        $email = $_POST['Email'];
						//$orderid = $_POST['orderid'];
                        $guest = $_POST['Guest'];
                        $attend = $_POST['Attend'];
                        $code = rand()."\n";
                        $header = "Your wedding invite details.\n";
						$guests = "Number of Guests:  ".$guest."\n";
                        $emails = "email: ".$email."\n";
                        $fullnames = "Full Name:  ".$fullname."\n";
                        //$weddingid = $username.$lastname;
                       
                        $sql = "INSERT INTO rsvp (`orderid`, `fullname`, `email`, `No_of_guests`, `Attendance`) VALUES ('$orderid','$fullname', '$email', '$guest', '$attend')";
                     if (mysqli_query($conn, $sql)) {
                         $er = "RSVP sent";
                         $file = "invite.pdf";
                         $txt = fopen($file, "w") or die("Unable to open file!");
                         fwrite($txt, $header);
                         fwrite($txt, $fullnames);
                         fwrite($txt, $emails);
                         fwrite($txt, $guests);
                         fwrite($txt, $code);
                         fclose($txt);
                         
                         header('Content-Description: File Transfer');
                         header('Content-Type: application/octet-stream');
                         header('Content-Disposition: attachment; filename="' . basename($file) . '"');
                         header('Expires: 0');
                         header('Cache-Control: must-revalidate');
                         header('Pragma: public');
                         header('Content-Length: ' . filesize($file));
                         readfile($file);
                         exit;
                                        $fp = fopen($file, "r");
                while (!feof($fp)) {
                    echo fread($fp, 65536);
                    flush(); // This is essential for large downloads
                } 
                
                fclose($fp); 
                        header("location: index_onepage.php?id=$orderid&package=$packages&err=$er");
                
                        } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
    }