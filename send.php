<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
  $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'itorbitcables@gmail.com'; // Your gmail
  $mail->Password = 'itzvdmfpkuomhdst'; // Your gmail app password
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;

  $mail->setFrom('itorbitcables@gmail.com'); // Your gmail

  $mail->addAddress($_POST["email"]);

  $mail->isHTML(true);

  $mail->Subject ='ORBITELECTRIC Website Message: '.$_POST['name'];
  $mail->Body = '<p align=left>Name: '.$_POST['full_name'].'<br>Email: '.$_POST['email'].'<br>Phone no: '.$_POST['Phone'].'<br>Current Location: '.$_POST['current_location'].'<br>Preferred Location: '.$_POST['preferred_location'].'<br>Upload Resume: '.$_POST['upload_resume'].'</p>';

  $mail->send();

  echo
  "
  <script>
  alert('Sent Successfully');
  document.location.href = 'carrer.html';
  </script>
  ";
}
?>
