<?php
	require("conn.php");
	header('Content-Type: application/json');
	$temp = $_GET['temp'];
	$user = $_GET['user'];

	if($temp == "select")
	{
		$detail_user = array();
		$query = "select Firstname, Lastname, password, Contact, Address from users where Email = '$user';";
		$rowset = mysqli_query($conn,$query);
		$row = mysqli_fetch_assoc($rowset);
		array_push($detail_user, $row['Firstname'], $row['Lastname'], $row['password'], $row['Contact'], $row['Address']);
		echo json_encode($detail_user);
	}
	if($temp == "update")
	{
		$fname = $_GET['fname'];
		$lname = $_GET['lname'];
		$pass = $_GET['pass'];
		$contact = $_GET['contact'];
		$home = $_GET['home'];
		$query = "update users set Firstname = '$fname', Lastname = '$lname', password = '$pass', Contact = '$contact', Address = '$home' where Email = '$user';";
		$rowset = mysqli_query($conn,$query);
		echo json_encode($fname);	
	}
	
?>