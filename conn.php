<?php
	$hostname = "localhost";
	$usr = "root";
	$pwd = "";
	$db = "FinalProject";

	$conn = mysqli_connect($hostname,$usr,$pwd,$db);

	if(!($conn))
	{
		die("Invalid Connection");
	}
	// print("Connection Established");
	return;
?>