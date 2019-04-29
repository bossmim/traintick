<?php
session_start();
	require_once('connect.php');
	
 $Ticket_ID = $_GET['id'];
 
$q="DELETE FROM tickets where Ticket_ID=$Ticket_ID";


 //redirect
 header("Location: a_booking.php");
?>