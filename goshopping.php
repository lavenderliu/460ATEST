<?php

//get values from form
$listname = $_POST["listname"];
$itemname= "";
$more = TRUE;
$i=1;
 

// Connect to MySQL, select database
$link = mysqli_connect ( 'frodo.bentley.edu', 'cs460teama', 'Vwg*33k', 'cs460teama' )
or die ( 'Could not connect: ' . mysqli_error () );
// echo 'Connected successfully.<br/>';

// Perform SQL query
// taking array "$itemname" and saving it into separate variables "$val"
while ($more){
	if ((isset($_POST['item_'.$i]))&& ($_POST['item_'.$i] !="")) {
		$itemname .=$_POST['item_'.$i];
		$itemname .="', '";
	}else {
		$more=FALSE;
	}
	$i++;
}

$query = "SELECT itemname, aislenumber, price FROM item WHERE itemname IN('$itemname')";

$result = mysqli_query ( $link, $query ) or die ( 'Query failed: ' . mysqli_error ($link) );
$rows = mysqli_num_rows ( $result );
