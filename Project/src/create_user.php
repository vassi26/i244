<?php 
include 'connect.php';

$Username = mysqli_real_escape_string($l, $_REQUEST['Username']);
$Email = mysqli_real_escape_string($l, $_REQUEST['Email']);
$Password = mysqli_real_escape_string($l, $_REQUEST['Password']);
$Code = mysqli_real_escape_string($l, $_REQUEST['Code']);
$sql = "INSERT INTO i244_vmovko_users (Username, Email, Password, Referral) VALUES ('$Username', '$Email', '$Password', '$Code')";
if (mysqli_query($l, $sql)) {
	echo "New record created successfully";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($l);
}
mysqli_close($l);
?>