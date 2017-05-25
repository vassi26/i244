<?php 
	include_once 'connect.php';
	include_once 'session.php';
	$Username = mysqli_real_escape_string($l, $_REQUEST['Username']);
	$Password = mysqli_real_escape_string($l, $_REQUEST['Password']);
	$sql = "SELECT u.User_ID, r.Title, ut.Task_ID FROM i244_vmovko_users u, i244_vmovko_roles r, i244_vmovko_user_tasks ut".
		" WHERE u.Username='$Username' and u.Password='$Password' and r.Role_ID = u.Role_ID and ut.User_ID = u.User_ID";
	$result = $l->query($sql);
	$row = $result->fetch_assoc();
	$user_id = $row["User_ID"];
	$title = $row["Title"];
	$tasks = [];
	function login($user_id){
		setcookie('auth', $user_id, time()+60);
	}
	mysqli_data_seek($result,0);
	while($row = mysqli_fetch_array($result)["Task_ID"])
	{
		$tasks[] = $row;
	}
	login($user_id);
	setTasks($tasks);
	mysqli_close($l);
	if ($title == 'Admin') {
		header('Location: /~vmovko/i244/project/src/admin.php');
	} else {
		header('Location: /~vmovko/i244/project/src/board.php');
	}
?>


