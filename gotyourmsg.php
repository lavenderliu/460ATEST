<?php

$namelast = $_POST['namelast'];
$namefirst = $_POST ['namefirst'];
$msgemail = $_POST ['msgemail'];
$msg = $_POST ['msg'];
$who= $namefirst . ' ' .$namelast;
$formcontent= "From: $who at $msgemail <br/>\n Message: $msg";
$subject= "msg from 460 site";
$mailheader = "From: $msgemail \r\n";

require("phpmailer/PHPMailerAutoload.php");

$mail = new PHPMailer();

// set mailer to use SMTP
$mail->isSMTP();
$mail->SMTPDebug  = 2;
$mail->Host="smtp.gmail.com";
$mail->Port="465";
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->SMTPSecure = "ssl";
$mail->Username = "teatreelavender15@gmail.com"; // SMTP username
$mail->Password = "bentley10"; // SMTP password

$mail->From=$msgemail;
$mail->addAddress("teatreelavender15@gmail.com", "460 Contact Form");

$mail->IsHTML(true); // send as HTML

$mail->Subject= $subject;
$mail->Body=$formcontent;
$mail->AltBody=$formcontent;

/**mail($sendto, $subject, $formcontent, $mailheader) or die('Error!');
 * 
 */

if(!$mail->Send()){

	echo "Mailer Error: ".$mail->ErrorInfo;
	exit;
}
header ("Location: thankyou.html");

?>

 		
					
			
