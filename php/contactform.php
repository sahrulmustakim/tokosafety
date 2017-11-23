<?php

 // ++++++++++++++++++++++++++++++++++++
error_reporting(0);

  
 // configuration
 
$email_it_to = "admin@onestopgps.co,herygus@onestopgps.co";

$error_message = "Please complete the form first";

$rnd=$_POST['rnd'];
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$body=$_POST['body'];

  
if(!isset($rnd) || !isset($name) || !isset($email) || !isset($subject) || !isset($body)) {
	echo $error_message;
    die();
}


$subject = stripslashes($subject);
$email_from = $email;

$email_message = "Dear, Pak Hery <br><br>";
$email_message .= "Message submitted via contact form at onestopgps.co <br>";
$email_message .= "Name : ".stripslashes($name)."<br>";
$email_message .= "Email : ".$email_from."<br>";
$email_message .= "Date : ".date("d/m/Y H:i:s")."<br>";
$email_message .= "Message : <br>".stripslashes($body)."<br><br>";
$email_message .= "Thanks,<br>System Onestopgps.co";

// Always set content-type when sending HTML email


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8". "\r\n";
$headers .= 'From: '.stripslashes($name);

//$headers .= 'From: <'.$email_from.'>' . "\r\n";

mail($email_it_to,$subject,$email_message,$headers);



?>