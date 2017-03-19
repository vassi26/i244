	<?php 
    $host = "localhost";
    $user = "test";
    $pass = "t3st3r123";
    $db = "test";
    $l = mysqli_connect($host, $user, $pass, $db);
    mysqli_query($l, "SET CHARACTER SET UTF8") or
            die("Error, ei saa andmebaasi charsetti seatud");
    
	$Username = mysqli_real_escape_string($l, $_REQUEST['Username']);
	$Email = mysqli_real_escape_string($l, $_REQUEST['Email']);
	$Password = mysqli_real_escape_string($l, $_REQUEST['Password']);
	$Code = mysqli_real_escape_string($l, $_REQUEST['Code']);
	$sql = "INSERT INTO i244_vmovko_users (Username, Email, Password, Referral) VALUES ('$Username', '$Email', '$Password', '$Code')";
    //$result = $l->query($sql);
    /*if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["apelsiin"]. " - Name: " . $row["banaan"]. "<br>";
        }
    } else {
        echo "0 results";
    }*/
    if (mysqli_query($l, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($l);
	}
    mysqli_close($l);
	?>