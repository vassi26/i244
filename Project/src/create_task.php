	<?php 
	include_once 'connect.php';
	
	$Title = mysqli_real_escape_string($l, $_REQUEST['Title']);
	$Content = mysqli_real_escape_string($l, $_REQUEST['Content']);
	$Notes = mysqli_real_escape_string($l, $_REQUEST['Notes']);
	$End_Time = mysqli_real_escape_string($l, $_REQUEST['EndTime']);
	$Lat = mysqli_real_escape_string($l, $_REQUEST['Lat']);
	$Long = mysqli_real_escape_string($l, $_REQUEST['Long']);
	$Comment = mysqli_real_escape_string($l, $_REQUEST['Comment']);
	$sql = "INSERT INTO i244_vmovko_tasks (Title, Content, Latitude, Longitude, Notes, End_Time, Comment) VALUES ('$Title', '$Content', '$Lat', '$Long', '$Notes', '$End_Time', $Comments')";
	if (mysqli_query($l, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($l);
	}
	mysqli_close($l);
	?>