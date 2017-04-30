<?php
	include_once 'connect.php';
	$task_id = mysqli_real_escape_string($l, $_REQUEST['id']);
	$answer = mysqli_real_escape_string($l, $_REQUEST['answer']);
	$sqlcheck = "SELECT COUNT( * ) AS RESULT FROM i244_vmovko_answers WHERE (Task_ID = $task_id AND Code = '$answer')";
	$checkresult = $l->query($sqlcheck);
	if ($checkresult->num_rows == 1) {
		$row = $checkresult->fetch_assoc();
		$result = $row["RESULT"];
		if ($result == 1) {
			$data = 'Correct';
			//showModal();
		} else {
			$data = 'Wrong';
		}
	} else {
		$data = 'Else';
	}
	header('Content-Type: application/json');
	echo json_encode($data);
	mysqli_close($l);
?>