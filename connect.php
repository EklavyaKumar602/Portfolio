<?php
if(isset($_GET['esubmit'])){
$name=$_GET['uname'];
$mob=$_GET['number'];
$email=$_GET['email'];
$message=$_GET['opinion'];
$to="cs901934@gmail.com";
$subject="Mail From Website";
$txt="Name = ".$name ."\r\n Mob =". $mob ."\r\n Email =" . $email ."\r\n Message =".$message;
$headers = "From : Your Portfolio :";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
else{
    echo "Mail Not Send Successfully";
}
header("Location:thankyou.html");
?>
