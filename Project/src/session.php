<?php
	session_start();
	ini_set(‘session.gc_maxlifetime’, ’1200′);
	function setTasks($tasks){
		if (!isset($_SESSION['tasks'])) {
			$_SESSION['tasks'] = $tasks;
		}
	}
?>