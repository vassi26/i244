<?php 
include 'connect.php';
$sql = "SELECT Title, Content, Notes, End_Time FROM i244_vmovko_tasks WHERE Task_ID=$task_id;";
$result = $t->query($sql);
$row = $result->fetch_assoc();
$title = $row["Title"];
$content = $row["Content"];
$notes = $row["Notes"];
$end_time = $row["End_Time"];
mysqli_close($t);
?>