<?php 
$host = "localhost";
$user = "test";
$pass = "t3st3r123";
$db = "test";
$t = mysqli_connect($host, $user, $pass, $db);
mysqli_query($t, "SET CHARACTER SET UTF8") or
		die("Error, ei saa andmebaasi charsetti seatud");
$sql = "SELECT Title, Content, Notes, End_Time FROM i244_vmovko_tasks WHERE Task_ID=$task_id;";
$result = $t->query($sql);
$row = $result->fetch_assoc();
$title = $row["Title"];
$content = $row["Content"];
$notes = $row["Notes"];
$end_time = $row["End_Time"];
mysqli_close($t);
?>