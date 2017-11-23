<?php

 // ++++++++++++++++++++++++++++++++++++
error_reporting(0);

  
 // configuration
 
$email_it_to = "admin@onestopgps.co,herygus@onestopgps.co";

$error_message = "Please complete the form first";

$rnd=$_POST['rnd'];
$company=$_POST['company'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$bidang=$_POST['bidang'];
$pos=$_POST['pos'];
$pic=$_POST['pic'];
$telepon=$_POST['telepon'];
$jumlah=$_POST['jumlah'];

  
if(!isset($rnd) || !isset($email)) {
	echo $error_message;
    die();
}

$email_from = $email;

$email_message = "Dear, Pak Hery <br><br>";
$email_message .= "Message submitted via Request Form (Penawaran) at onestopgps.co <br>";
$email_message .= "Company : ".stripslashes($company)."<br>";
$email_message .= "Address : ".stripslashes($address)."<br>";
$email_message .= "Phone : ".stripslashes($phone)."<br>";
$email_message .= "Email : ".$email_from."<br>";
$email_message .= "Bidang : ".stripslashes($bidang)."<br>";
$email_message .= "Pos : ".stripslashes($pos)."<br>";
$email_message .= "PIC : ".stripslashes($pic)."<br>";
$email_message .= "Tlp PIC : ".stripslashes($telepon)."<br>";
$email_message .= "Jumlah Pesanan : ".stripslashes($jumlah)."<br><br>";
$email_message .= "Thanks,<br>System Onestopgps.co";

// Always set content-type when sending HTML email


$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8". "\r\n";
$headers .= 'From: Onestopgps.co';

//$headers .= 'From: <'.$email_from.'>' . "\r\n";

mail($email_it_to,'Request Form (Penawaran)',$email_message,$headers);



?>