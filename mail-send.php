<?php
require('phpmailer/class.phpmailer.php');

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "ssl";
$mail->Port     = 465;  
$mail->Username = "itorbitcables@gmail.com"; // Enter your email address from where you want to send email
$mail->Password = "itzvdmfpkuomhdst"; // Enter your email password from where you want to send email
$mail->Host     = "smtp.gmail.com"; // Leave as it as
$mail->Mailer   = "smtp"; // Leave as it as
$mail->SetFrom($_POST["email"], $_POST["full_name"]);
$mail->AddReplyTo($_POST["email"], $_POST["full_name"]);
$mail->AddAddress("itorbitcables@gmail.com"); // Enter your email address where you want to recieve email	
$mail->WordWrap   = 80;
$mail->Body='<p align=left>Name: '.$_POST['full_name'].'<br>Email: '.$_POST['email'].'<br>Contact Number: '.$_POST['phone'].'<br>Current Location: '.$_POST['current_location'].'<br>Preferred Location: '.$_POST['preferred_location'].'</p>';


foreach ($_FILES["attachment"]["name"] as $k => $v) {
    $mail->AddAttachment( $_FILES["attachment"]["tmp_name"][$k], $_FILES["attachment"]["name"][$k] );
}

$mail->IsHTML(true);

if(!$mail->Send()) {
	echo "<p class='error'>Problem in Sending Mail.</p>";
} else {
	echo "<p class='success'>Mail Sent Successfully.</p>";
}	
?>