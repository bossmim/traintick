<?php
require_once('connect.php');
if (isset($_POST['signup']) and isset($_POST['chk']))
{
	$title = $_POST['title'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$tel = $_POST['tel'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$naid = $_POST['naid'];
	$dob = $_POST['DOB'];
	$role = "User";
	$q = "INSERT INTO users (Title,First_Name,Last_Name,Tel,Address,Email,Password,National_ID,Birth_Date,Role)
	VALUES('test','test','test','test','test','test@gmail.com','0000','1111','2013.05.03','User');";


	$res = mysqli_query($mysqli,$q);

	header("Location: homepage.php");

}
?>
