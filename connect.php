<?php
$firstname=$_post['$firstname'];
$number =$_post['$number'];
$email=$_post['$email'];
$opinion=$_post['$opinion'];
$conn=new mysqli('localhost','root','test');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);

}
else{
    $stmt=$conn->prepare("insert into registration (firstname,number,email,opinion)values(?,?,?,?)");
    $stmt->bind_param("siss",$firstname,$number,$email,$opinion);
    $stmt->execute();
    echo "Sign Up Successfull...";
    $stmt->close();
    $conn->close();
}
?>
