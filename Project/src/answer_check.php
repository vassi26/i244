<?php
$host = "localhost";
$user = "test";
$pass = "t3st3r123";
$db = "test";
$l = mysqli_connect($host, $user, $pass, $db);
mysqli_query($l, "SET CHARACTER SET UTF8") or
		die("Error, ei saa andmebaasi charsetti seatud");

$task_id = mysqli_real_escape_string($l, $_REQUEST['id']);
$answer = mysqli_real_escape_string($l, $_REQUEST['answer']);
$sqlcheck = "SELECT COUNT( * ) AS RESULT FROM i244_vmovko_answers WHERE (Task_ID = $task_id AND Code = '$answer')";
$checkresult = $l->query($sqlcheck);
if ($checkresult->num_rows == 1) {
	$row = $checkresult->fetch_assoc();
	$result = $row["RESULT"];
	if ($result == 1) {
		//echo "Correct!";
		showModal();
	} else {
		//echo "Wrong!";
	}
} else {
	echo "Error: " . $sqlcheck . "<br>" . mysqli_error($l);
}
mysqli_close($l);
?>