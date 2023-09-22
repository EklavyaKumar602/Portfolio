<?php
$name=$_REQUEST['name'];
$mob=$_REQUEST['number'];
$email=$_REQUEST['email'];
$message=$_REQUEST['opinion'];
$to="cs901934@gmail.com";
$subject="Mail From Website";
$txt="Name = ".$name ."\r\n Mob =". $mob ."\r\n Email =" . $email ."\r\n Message =".$message;
$headers = "From : Your Portfolio ";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

header("thankyou.html");
?>
