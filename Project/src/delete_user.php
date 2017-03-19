<?php 
$host = "localhost";
$user = "test";
$pass = "t3st3r123";
$db = "test";
$l = mysqli_connect($host, $user, $pass, $db);
mysqli_query($l, "SET CHARACTER SET UTF8") or
		die("Error, ei saa andmebaasi charsetti seatud");

$username = mysqli_real_escape_string($l, $_REQUEST['answer']);
$sqlcheck = "SELECT Username FROM i244_vmovko_users WHERE Username='$username'";
$sqlremove = "DELETE FROM i244_vmovko_users WHERE Username='$username'";
$checkresult = $l->query($sqlcheck);
if ($checkresult->num_rows > 0) {
	$removeresult = $l->query($sqlremove);
} else {
	echo "User doesn't exist";
}
if (mysqli_query($l, $sqlremove)) {
	echo "User removed successfully";
} else {
	echo "Error: " . $sqlremove . "<br>" . mysqli_error($l);
}
mysqli_close($l);
?>