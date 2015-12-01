<?php 
session_start();  //check login
if ($_SESSION['login']=="yes") {  

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

$query = "SELECT itemname AS Item, aislenumber AS Aisle, price AS Price FROM item WHERE itemname IN('$itemname')";

$result = mysqli_query ( $link, $query ) or die ( 'Query failed: ' . mysqli_error ($link) );
$rows = mysqli_num_rows ( $result );

echo "<h2 class=\"wsite-content-title\" style=\"text-align:left\" for=\"items\">Your $listname grocery list </h2> <div class=\"wsite-form-input-container\"> ";
echo "<table>\n";

//print column header
for ($i=0; $i<mysqli_num_fields($result); $i++){
	$field_name = mysqli_fetch_field($result);
	echo "<th>{$field_name->name}</th>";
};
echo "</tr>";

while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	echo "\t<tr>\n";
	foreach ($line as $col_value) { 
		echo "\t\t<td><input id=\"lines\" class=\"wsite-form-input wsite-input wsite-input-width-100px\" type=\"text\" value=\"$col_value\"readonly /></td>\n" ;
	}
	echo "\t</tr>\n";
}
echo "</table>\n";
//if not logged in, go back to login page
}  else header("Location: login.html");
?>
