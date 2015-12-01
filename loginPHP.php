<?php
session_start (); // establish session
                  
// get values from form
$email = $_POST ["email"];
$pw = $_POST ["pw"];

// Connect to MySQL, select database
$link = mysqli_connect ( 'frodo.bentley.edu', 'cs460teama', 'Vwg*33k', 'cs460teama' ) or die ( 'Could not connect: ' . mysqli_error () );
// echo 'Connected successfully';

// Perform SQL query
$query = "SELECT * FROM user WHERE email='$email'";
$result = mysqli_query ( $link, $query ) or die ( 'Query failed: ' . mysqli_error () );
$rows = mysqli_num_rows ( $result );

// if userid not in login table, go to login page and try again
if ($rows < 1)
	header ( "Location: newuser.php" );

// get login table record for userid
$line = mysqli_fetch_array ( $result, MYSQL_ASSOC );

// check password. If not correct, go to login page and try again
if ($pw != $line ['pw'])
	header ( "Location: login.php" );
	
	// save login record as session data, data persists over entire session
$_SESSION ['userid'] = $line ['userid'];
$_SESSION ['last'] = $line ['lastlogin'];
$_SESSION['firstname'] = $line ['firstname'];

// Free resultset
mysqli_free_result ( $result );

// update last time logged in
$update = "UPDATE user SET lastlogin=now() WHERE email='$email'";
mysqli_query ( $link, $update ) or die ( 'Login time update failed : ' . mysqli_error () );

// Close connection
mysqli_close ( $link );

// create session variable containing correct login status for use in other pages
$_SESSION ['login'] == "yes";

//echo $_SESSION['firstname'];
// echo ", Last login ".$_SESSION['last'];

if ($_SESSION['login']=="yes") {  
	header ("Location: create-list.php");
	exit;
}
?>