<?php 
session_start();
require_once("../Ayar/Config.php");
$email=$_POST['email'];
$password=$_POST['password'];
$sql="Select * from admins where email='$email' and password='$password'";
$sorgu=mysqli_query($conn,$sql);
if($sorgu->num_rows>0)
{
    $_SESSION["email"]=$email;
    echo "<script>window.location.href='index.php'</script>";
}
else
{
    echo "<script>window.location.href='../index.php'</script>";
}


?>