<?php
$host=null;
$username = 'bossmim';
$password = '';
$database = 'traintick';
$port = null;
$socket ="/cloudsql/project-parallel-237015:asia-east2:traintick";
$mysqli = new mysqli($host,$username,$password,$database,$port,$socket);
if(mysqli_connect_error()){
  echo mysqli_connect_error();
	exit();
}


?>
