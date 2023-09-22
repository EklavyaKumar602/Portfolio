<?php
$name=$_POST['name'];
$mob=$_POST['number'];
$email=$_POST['email'];
$message=$_POST['opinion'];
$to="cs901934@gmail.com";
$subject="Mail From Website";
$txt="Name = ".$name ."\r\n Mob =". $mob ."\r\n Email =" . $email ."\r\n Message =".$message;
$headers = "From : Your Portfolio ";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

header("Location:thankyou.html");
?>
