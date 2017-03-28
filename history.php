<?php
	require("conn.php");
	header('Content-Type: application/json');

	$username = $_GET['email'];
	$history = array();
	
	$query = "Select Date,type,level,score from user_details where email = '$username';";
	$rowset = mysqli_query($conn,$query);
	while($row = mysqli_fetch_row($rowset))
	{
		array_push($history, $row);
	}
	echo json_encode($history);
?>