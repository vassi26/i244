<?php 
$host = "localhost";
$user = "test";
$pass = "t3st3r123";
$db = "test";
$t = mysqli_connect($host, $user, $pass, $db);
mysqli_query($t, "SET CHARACTER SET UTF8") or
		die("Error, ei saa andmebaasi charsetti seatud");
$sql = "SELECT Name, Content, Notes, End_Time FROM i244_vmovko_tasks WHERE Task_ID=1;";
$result = $t->query($sql);
//echo $result;
$row = $result->fetch_assoc();
//$result = $t->query($sql);
$name = $row["Name"];
$content = $row["Content"];
$notes = $row["Notes"];
$end_time = $row["End_Time"];
mysqli_close($t);
?>