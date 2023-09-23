<?php
require 'vendor/autoload.php';
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.example.com'; // Your SMTP server
$mail->SMTPAuth = true;
$mail->Username = 'your_username';
$mail->Password = 'your_password';
$mail->SMTPSecure = 'tls'; // Use 'tls' or 'ssl' depending on your server settings
$mail->Port = 587; // Use 587 for TLS or 465 for SSL

// Set sender and recipient information
$mail->setFrom('yourname@example.com', 'Your Name');
$mail->addAddress('cs901934@gmail.com', 'Recipient Name');

// Set email content
$mail->Subject = 'Hello, World!';
$mail->Body = 'This is a test email sent from PHPMailer.';

// Send the email
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name=$_POST['uname'];
    $mob=$_POST['number'];
    $email=$_POST['email'];
    $message=$_POST['opinion'];
    
    $to="cs901934@gmail.com";
    $subject="Mail From Website";
    $txt="Name = ".$name ."\r\n Mob =". $mob ."\r\n Email =" . $email ."\r\n Message =".$message;
    $headers = "From : Your Portfolio : $form";
    if(mail($to,$subject,$txt,$headers)){
        echo"Mail Sent";
    }
    else
    {
        echo "Oops! Something went wrong";
    }
    echo"Thanks for Contacting Us.";
}
?>
