<?php
require_once('connect.php');
	session_start();

	$uid = $_SESSION['User_ID'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$naid = $_POST['naid'];
	$dob = $_POST['DOB'];
	$tel = $_POST['tel'];
	$address = $_POST['address'];

    
    $q = "UPDATE users SET First_Name='$fname', Last_Name='$lname', Email='$email', Password='$pass', National_ID=$naid, Birth_Date='$dob', Tel='$tel', Address='$address' WHERE User_ID=$uid";

    if(!mysqli_query($mysqli,$q)){
        echo "Update failed: ";
    }else{
        header("Location: user_p.php");
    }
?>