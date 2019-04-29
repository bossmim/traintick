<?php

require_once('connect.php');
session_start();

$Email=$_POST['Email'];
$Name=$_POST['Name'];
$Question=$_POST['Question'];
$uid = $_SESSION['User_ID'];


 $q= "INSERT INTO question (User_ID,Email,First_Name,Question) VALUES('$uid','$Email','$Name','$Question')";

$result = mysqli_query($mysqli,$q);



header("Location: contact2.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	

<body>
</body>
</html>
