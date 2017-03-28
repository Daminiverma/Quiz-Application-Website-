<?php
	require("conn.php");
	$email = $_GET['mail'];
	$quizType = $_GET['type'];
	$quizLevel = $_GET['level'];

	$quizType = $quizType == "GK" ? 1 : 2;
	$quizLevel = $quizLevel == "Easy" ? 1 : 2;

	date_default_timezone_set("EST");
	$curDate = date(' jS F Y h:i A');

	$query_details = "insert into user_details(Date,email,type,level) values('$curDate','$email',$quizType,$quizLevel);";
	mysqli_query($conn,$query_details);
?>