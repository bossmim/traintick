<?php

require_once('connect.php');
session_start();

 $User_ID = $_GET['uid'];
 $q="DELETE FROM users where User_ID=$User_ID";
 if(!mysqli_query($mysqli,$q)){
echo "DELETE failed. Error: ";
 }

 //redirect
 header("Location: user_s.php");
?>