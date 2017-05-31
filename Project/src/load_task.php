<?php 
	include_once 'connect.php';
	$sql = "SELECT Title, Content, Latitude, Longitude, Notes, End_Time, Success FROM i244_vmovko_tasks WHERE Task_ID=$task_id;";
	$result = $l->query($sql);
	$row = $result->fetch_assoc();
	$title = $row["Title"];
	$content = $row["Content"];
	$lat = $row["Latitude"];
	$lng = $row["Longitude"];
	$notes = $row["Notes"];
	$end_time = $row["End_Time"];
	$success = $row["Success"];
	mysqli_close($l);
?>