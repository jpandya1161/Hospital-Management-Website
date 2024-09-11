<?php

include 'connection.php';
// Get the user id
$user_id = $_REQUEST['dept'];

// Database connection


if ($user_id !== "") {
	
	// Get corresponding first name and
	// last name for that user id	
	$query = mysqli_query($con, "SELECT department FROM doctor WHERE dept='$dept'");

	$row = mysqli_fetch_array($query);

	// Get the first name
	$dept = $row["first_name"];

	// Get the first name
	// $last_name = $row["last_name"];
}

// Store it in a array
$result = array("$dept");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>
