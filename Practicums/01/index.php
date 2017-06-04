<?php 
require_once("functions.php");
$myurl=$_SERVER['PHP_SELF'];
connect_db();
 
$mode="main";				
			
if (isset($_GET["mode"]) && $_GET["mode"]!=""){
	$mode=$_GET["mode"];
	}				

switch($mode){	

case "addcomment":
	comment();
break;
case "main":
	show_main();
break;		
	default:
include("view/main.php");
}

?>