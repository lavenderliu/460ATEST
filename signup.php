<?php
session_start (); // establish session

// get non-null values from form
	
	$required = array('firstname', 'lastname', 'email', 'pw');
	$error = true;
	foreach ($required as $field){
		if (isset($_POST[$field]) && trim($_POST[$field]) !=''){
			$error = false;
		}
	}
	
	if ($error){
		header ('Location: newuser2.php');
	}
	else{
		$firstname= $_POST["firstname"];
		$lastname=$_POST["lastname"];
		$email=$_POST["email"];
		$pw=$_POST["pw"];
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