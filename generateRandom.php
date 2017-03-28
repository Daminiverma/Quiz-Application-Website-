<?php

	header('Content-Type: application/json');
	$type = $_GET['type'];
	$level = $_GET['level'];
	$rand = array();

	$min = 0;
	$max = 0;
	if($type == "IT")
	{
		if($level == "Easy")
		{
			$min = 1;
			$max = 20;
		}
		else
		{
			$min = 21;
			$max = 40;
		}
	}
	else
	{
		if($level == "Easy")
		{
			$min = 41;
			$max = 60;
		}
		else
		{
			$min = 61;
			$max = 80;
		}
	}

	//Generate Random Numbers.
	for ($i=0; $i < 10;) {
	$temp = random_int($min,$max);
		if(!in_array($temp,$rand))
		{
			array_push($rand,$temp);
			$i++;
		}
	}

	 echo json_encode($rand);
?>