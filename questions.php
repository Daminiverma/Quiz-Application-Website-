<?php
	require("conn.php");
	header('Content-Type: application/json');
	$rand = array();
	$rand = $_GET['rand'];

	$ques_bank = array();
	foreach ($rand as $value) {
		$query_retreive = "select QuesName,Ans1,Ans2,Ans3,Ans4 from questions where Sr = $value";
		$rowset = mysqli_query($conn,$query_retreive);
		$row = mysqli_fetch_row($rowset);
		array_push($ques_bank,$row);
	}
	echo json_encode($ques_bank);
?>