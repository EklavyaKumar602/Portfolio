<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$name=$_POST['uname'];
$mob=$_POST['number'];
$email=$_POST['email'];
$message=$_POST['opinion'];
$from="cs901934@gmail.com";
$subject="Mail From Website";
$txt="Name = ".$name ."\r\n Mob =". $mob ."\r\n Email =" . $email ."\r\n Message =".$message;
$headers = "From : Your Portfolio : $form";
if(mail($to,$subject,$txt,$headers)){
    echo"Mail Sent";
}
else{
    echo "Oops! Something went wrong";
}
echo"Thanks for Contacting Us.";
}
?>
