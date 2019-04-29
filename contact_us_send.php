<?php

require_once('connect.php');
session_start();

$Email=$_POST['Email'];
$Name=$_POST['Name'];
$Question=$_POST['Question'];
$User_ID = $_SESSION['User_ID'];

 $q= "INSERT INTO question (User_ID,Email,First_Name,Question) VALUES('$User_ID','$Email','$Name','$Question')";

$result = mysqli_query($mysqli,$q);



header("Location: contact.php");
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
