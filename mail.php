<?php

include ('koneksi.php');

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';



$query = mysqli_query($link,"Select * FROM user where id=( Select MAX(id) FROM user) 	") or die (mysqli_error($link));
	$row = mysqli_fetch_array($query);
	$id=$row[0];
	$email=$row[3];
	
$link='http://paw-kel-11.site/aktivasi.php?id='.$id.'';

$mail = new PHPMailer\PHPMailer\PHPMailer();

$mail->IsSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.paw-kel-11.site';                 // Specify main and backup server
$mail->Port = 587;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'no-reply@paw-kel-11.site';                // SMTP username
$mail->Password = 'sC(vY9?TvDb*';                  // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->From = 'no-reply@paw-kel-11.site';
$mail->FromName = 'Admin';
$mail->AddAddress($email);  // Add a recipient
        // Name is optional

$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Verifikasi untuk menggunakan paw-PRlnt';
$mail->Body    = ''.$link.' Apabila anda tidak registrasi harap diabaikan Terimakasih';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Cek Email Anda sebelum login untuk verifikasi ';