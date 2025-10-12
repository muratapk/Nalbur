<?php
session_start();
require_once("../Ayar/Config.php");
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$password=$_POST['password'];
$sql="insert into users (name,email,password,phone,address) values ('$name','$email','$password','$phone','$address')";
$sorgu=mysqli_query($conn,$sql);
if($sorgu)
{
    $_SESSION['email']=$email;
    echo "<script>window.location.href='User_Login.php'</script>";
}
else
{
    echo "<script>window.location.href='User_Register.php'</script>";
}
?>