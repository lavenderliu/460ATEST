<?php
session_start (); // establish session

// get non-null values from form

	if (empty($_POST["firstname"])) {
		header ( "Location: newuser.php" );
	} else {
		$firstname = $_POST ["firstname"];
	}
	
	if (empty($_POST["lastname"])) {
		header ( "Location: newuser.php" );
	} else {
		$lastname = $_POST ["lastname"];
	}
	
	if (empty($_POST["email"])) {
		header ( "Location: newuser.php" );
	} else {
		$email = $_POST ["email"];
	}

	if (empty($_POST["pw"])) {
		header ( "Location: newuser.php" );
	} else {
		$pw = $_POST ["pw"];
	}


// Connect to MySQL, select database
$link = mysqli_connect ( 'frodo.bentley.edu', 'cs460teama', 'Vwg*33k', 'cs460teama' ) or die ( 'Could not connect: ' . mysqli_error () );
// echo 'Connected successfully';

// Enter new record into User table 
$query = "INSERT INTO user VALUES ('','$email','$firstname', '$lastname','$pw','')";
$result = mysqli_query ( $link, $query ) or die ( 'Query failed: ' . mysqli_error () );

// Free resultset
mysqli_free_result ( $result );

// Close connection
mysqli_close ( $link );

header ( "Location: login.php" );

?>