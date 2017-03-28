<?php
	require("conn.php");
	header('Content-Type: application/json');
	$answers = array(array());
	$correct = array();
	$quesName = array();
	$count = $_GET['count'];
	$answers[0] = $_GET['ans'];
	$rand = $_GET['rand'];

	// print_r($rand);
	foreach ($rand as $value) {
		$query_fetch_ans = "select Correct, QuesName from questions where Sr = $value;";
		$rowset = mysqli_query($conn,$query_fetch_ans);
		$row1 = mysqli_fetch_row($rowset);
		array_push($correct,$row1[0]);
		array_push($quesName,$row1[1]);
	}

	$countCorrect = 0;
	$countWrong = 0;
	for ($i=0; $i <$count ; $i++) {
		if($correct[$i] == $answers[0][$i])
		{
			$answers[1][$i] = 1; 
			$countCorrect += 1;
		}
		else
		{
			$answers[1][$i] = 0;
			$countWrong += 1;
		}
	}
	echo json_encode(array('Correct' => $countCorrect,'Wrong' => $countWrong, 'AllCorrect' => $correct, 'ques' => $quesName));
?>