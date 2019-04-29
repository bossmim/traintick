<?php

	session_start();
	require_once('connect.php');


	$Train_ID = $_POST['Train_ID'];
	$Seat_No = $_POST['Seat_No'];
	$Departure_Time = $_POST['Departure_Time'];
	$Arrival_Time = $_POST['Arrival_Time'];
	$Departure_Station = $_POST['Departure_Station'];
	$Destination_Station = $_POST['Destination_Station'];

    $q = "UPDATE tickets SET Train_ID='$Train_ID', Seat_No='$Seat_No', Departure_Time='$Departure_Time', Arrival_Time='$Arrival_Time', Departure_Station='$Departure_Station', Destination_Station='$Destination_Station'";

    if(!mysqli_query($mysqli,$q)){
        echo "Update failed: ";
    }else{
        header("Location: a_booking.php");
    }
?>
