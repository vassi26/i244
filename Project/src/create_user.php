<?php 
	include_once 'connect.php';

	$Username = trim(mysqli_real_escape_string($l, $_REQUEST['Username']));
	$Email = trim(mysqli_real_escape_string($l, $_REQUEST['Email']));
	$Password = mysqli_real_escape_string($l, $_REQUEST['Password']);
	$Code = trim(mysqli_real_escape_string($l, $_REQUEST['Code']));

	if (strtolower($Code) == 'admin') {
		$role = 2;
	} else {
		$role = 1;
	}

	$sql_user = "INSERT INTO i244_vmovko_users (Username, Email, Password, Referral, Role_ID) VALUES ('$Username', '$Email', '$Password', '$Code', $role);";
	
	if (!empty($Username) && !empty($Email) && !empty($Password)){
		if (mysqli_query($l, $sql_user)) {
			$sql_user_id = "SELECT User_ID FROM i244_vmovko_users u WHERE u.Email = '$Email';";
			$result_user_id = $l->query($sql_user_id);
			mysqli_data_seek($result_user_id,0);
			$row_user_id = $result_user_id->fetch_assoc();
			$user_id = $row_user_id['User_ID'];
			$values = "('$user_id', 1, '$Code'), ('$user_id', 2, '$Code'), ('$user_id', 3, '$Code')";
			if (strtolower($Code) == 'admin') {
					header('Location: /~vmovko/i244/project/src/admin.php');
				} else if (strtolower($Code) == 'itk') {
					$values = "('$user_id', 2, '$Code'), ('$user_id', 3, '$Code'), ('$user_id', 4, '$Code')";
				} else if (strtolower($Code) == 'tln') {
					$values = "('$user_id', 3, '$Code'), ('$user_id', 4, '$Code'), ('$user_id', 5, '$Code')";					
			}
			$sql_user_tasks = "INSERT INTO i244_vmovko_user_tasks (User_ID, Task_ID, Comment) VALUES $values;";
			mysqli_query($l, $sql_user_tasks);
			header('Location: /~vmovko/i244/project/src/login.php?Username='.$Username.'&Password='.$Password);
		} else {
			echo "Error: " . $sql_user . "<br>" . mysqli_error($l);
		}
	} else {
		echo "Error: Some string is empty";
	}
	mysqli_close($l);
?>