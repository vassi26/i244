<?php

function connect_db(){
  global $connection;
  $host="localhost";
  $user="test";
  $pass="t3st3r123";
  $db="test";
  $connection = mysqli_connect($host, $user, $pass, $db) or die("No connection");
  mysqli_query($connection, "SET CHARACTER SET UTF8") or die("utf-8 failed: ".mysqli_error($connection));
}


function show_main (){
	$comments=get_comments();
	include ("main.php");
	
}

function comment(){
	global $myurl;
	global $connection;
	if (isset($_POST["addcomment"] )){
	if (isset($_POST['commentText']) && $_POST['commentText']!=""){
			$commentText=$_POST['commentText'];
			$author=$_POST['author'];
			if ($author==""){
				$author="Anonymous";
			}
			add_comment($commentText, $author);
			header("Location: index.php");
		} else {
			header("Location: index.php");
		}
	}
}

function add_comment($commentText, $author) {
	global $connection;

	$commentText=mysqli_real_escape_string($connection, $commentText);
	$author=mysqli_real_escape_string($connection, $author);

	$query ="INSERT INTO i244_vmovko_comments (comment, author) VALUES ('$commentText', '$author')";
	mysqli_query($connection, $query) OR die("$query - ".mysqli_error($connection));		
	return mysqli_insert_id($connection);	
}

function get_comments(){
	global $connection;
	$comments=[];
	$query ="SELECT author, comment, time FROM i244_vmovko_comments";
	$result = mysqli_query($connection, $query) or die("$query - ".mysqli_error($connection));
	while ($row = mysqli_fetch_assoc($result)){
		$author=htmlspecialchars($row['author']);
		$comment=htmlspecialchars($row['comment']);
		$time=htmlspecialchars($row['time']);
		$item=array($author,$comment,$time);
		$comments[]=$item;
	}
	return $comments;
}

?>