<?php

$namelast = $_POST['namelast'];
$namefirst = $_POST ['namefirst'];
$msgemail = $_POST ['msgemail'];
$msg = $_POST ['msg'];
$who= $namefirst . ' ' .$namelast;
$formcontent= "From: $who \n Message: $msg";
$sendto= "liu.lisaf@gmail.com";
$subject= "msg from 460 site";
$mailheader = "From: $msgemail \r\n";
mail($sendto, $subject, $formcontent, $mailheader) or die('Error!');

header ("Location: thankyou.html");
?>

 		
					
			
