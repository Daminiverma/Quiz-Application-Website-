<?php
	require("conn.php");
	$score = $_GET['score'];
	$finalscore = $score."/10";
	$query2 = "select max(ID) from user_details;";
	$rowset = mysqli_query($conn,$query2);
	$id = mysqli_fetch_row($rowset);
	$query1 = "update user_details set score = '$finalscore' where ID = $id[0];";
	$rowset1 = mysqli_query($conn,$query1);
?>