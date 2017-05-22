<?php 
	include_once 'connect.php';

	$Username = trim(mysqli_real_escape_string($l, $_REQUEST['Username']));
	$Email = trim(mysqli_real_escape_string($l, $_REQUEST['Email']));
	$Password = mysqli_real_escape_string($l, $_REQUEST['Password']);
	$Code = trim(mysqli_real_escape_string($l, $_REQUEST['Code']));
	$sql = "INSERT INTO i244_vmovko_users (Username, Email, Password, Referral, User_Role_ID) VALUES ('$Username', '$Email', '$Password', '$Code', 1);";
	if (!empty($Username) && !empty($Email) && !empty($Password)){
		if (mysqli_query($l, $sql)) {
			echo "New record created successfully";
			header('Location: /~vmovko/i244/project/src/board.php');
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($l);
		}
	} else {
		echo "Error: Some string is empty";
	}
	mysqli_close($l);
?>