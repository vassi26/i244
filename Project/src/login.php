	<?php 

		$host = "localhost";
		$user = "test";
		$pass = "t3st3r123";
		$db = "test";
		$l = mysqli_connect($host, $user, $pass, $db);
		mysqli_query($l, "SET CHARACTER SET UTF8") or
				die("Error, ei saa andmebaasi charsetti seatud");
		
		$Username = mysqli_real_escape_string($l, $_REQUEST['Username']);
		$Password = mysqli_real_escape_string($l, $_REQUEST['Password']);
		$sql = "SELECT u.User_ID, r.Title, ut.Task_ID FROM i244_vmovko_users u, i244_vmovko_roles r, i244_vmovko_user_roles ur, i244_vmovko_user_tasks ut".
		" WHERE u.Username='$Username' and u.Password='$Password' and ur.User_Role_ID = u.User_Role_ID".
		" and r.Role_ID = ur.Role_ID and ut.User_ID = u.User_ID";
		$result = $l->query($sql);
		$row = $result->fetch_assoc();
		$user_id = $row["User_ID"];
		$title = $row["Title"];
		$tasks = [];
		mysqli_data_seek($result,0);
		while($row = mysqli_fetch_array($result)["Task_ID"])
		{
			$tasks[] = $row;
		}
    	mysqli_close($l);
    	include("board.php");
	?>


