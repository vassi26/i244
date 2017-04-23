<?php
function isUser(){
	return isset($_COOKIE['auth']);
}
if(!isUser()){
	header('Location: /~vmovko/i244/project/src/register.php');
	exit;
}
?>