<?php
require_once("../Ayar/Config.php");
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$role=$_POST['role'];
$tarih=date('Y-m-d');
$sql="insert into admins (name,email,password,role,created_at) values ('$name','$email','$password','$role','$tarih')";
$sorgu=mysqli_query($conn,$sql);
if($sorgu!=null)
{
  echo "Kaydınız Yapılmıştır";
  echo "<a href='index.php?page=admin'>Anasayfa</a>";
}
?>