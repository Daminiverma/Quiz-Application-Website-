<?php
	require("conn.php");
	$flag = $_GET['flg'];

	if($flag == "login")
	{
		$email = $_GET['login_email'];
		$pass = $_GET['login_pass'];
		$query_select ="select Password,Firstname from users where Email = '$email';";
		$rowset = mysqli_query($conn,$query_select);
		$row = mysqli_fetch_row($rowset);
		$res = false;
		if($row>0)
		{
			if($row[0] == $pass)
			{
				global $res;
				$res = $row[1];
			}
		}
		echo $res;
	}
	if($flag == "register")
	{
		$fname = $_GET['fname'];
		$lname = $_GET['lname'];
		$reg_mail = $_GET['reg_mail'];
		$reg_pass = $_GET['reg_pass'];
		$cnct = $_GET['contact'];
		$adress = $_GET['home'];

		$query_insert = "insert into users values('$fname','$lname','$reg_mail','$reg_pass','$cnct','$adress');";
		$query_check_email = "select email from users;";
		$rowset = mysqli_query($conn,$query_check_email);

		$rows = array();
		while($row = mysqli_fetch_row($rowset))
		{
			array_push($rows,$row[0]);
		}

		$res = true;
		if(!in_array($reg_mail, $rows))
		{
			mysqli_query($conn,$query_insert);
			global $res;
			$res = false;
		}
		echo $res;
	}
?>