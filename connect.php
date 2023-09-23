<?php
if(isset($_POST['esubmit'])){
$name=$_REQUEST['uname'];
$mob=$_REQUEST['number'];
$email=$_REQUEST['email'];
$message=$_REQUEST['opinion'];
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
}
?>
