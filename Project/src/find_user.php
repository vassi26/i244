<?php 
	include_once 'connect.php';	
	$username = mysqli_real_escape_string($l, $_REQUEST['username']);
	$email = mysqli_real_escape_string($l, $_REQUEST['email']);
	$sql = "SELECT * FROM i244_vmovko_users WHERE Username LIKE '%$username%' AND Email LIKE '%$email%'";
	$result = $l->query($sql);
	$row = $result->fetch_assoc();
	$users = [];
	mysqli_data_seek($result,0);
	while($row = mysqli_fetch_array($result)["User_ID"])
	{
		$users[] = $row;
	}
	header('Content-Type: application/json');
	echo json_encode($users);
	mysqli_close($l);
?>