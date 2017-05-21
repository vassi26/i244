<?php 
	include_once 'connect.php';	
	$username = mysqli_real_escape_string($l, $_REQUEST['username']);
	$email = mysqli_real_escape_string($l, $_REQUEST['email']);
	$sql = "SELECT * FROM i244_vmovko_users WHERE Username LIKE '%$username%' AND Email LIKE '%$email%'";
	$checkresult = $l->query($sql);
	$row = $checkresult->fetch_assoc();	
	$users = [];
	//$user_id = $row["User_ID"];
	//$title = $row["Title"];
	mysqli_data_seek($checkresult,0);
	while($row = mysqli_fetch_array($checkresult))
	{
		$user_id = $row["User_ID"];
		$user_name = $row["Username"];
		$user_email = $row["Email"];
		$user_comment = $row["Comment"];
		if($user_comment == null) {
			$user_comment = '—';
		}
		$user = array($user_id, $user_name, $user_email, $user_comment);
		$users[] = $user;
	}
	header('Content-Type: application/json');
	echo json_encode($users);
	mysqli_close($l);
?>