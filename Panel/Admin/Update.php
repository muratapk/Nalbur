<?php
require_once("../Ayar/Config.php");
echo $Id=$_POST['id'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$role=$_POST['role'];
$tarih=date('Y-m-d');
echo $sql="update admins set name='$name',email='$email',password='$password',role='$role',created_at='$tarih' where id='$Id' ";
$sorgu=mysqli_query($conn,$sql);
if($sorgu!=null)
{
  echo "Kaydınız Yapılmıştır";
  echo "<a href='index.php?page=admin'>Anasayfa</a>";
}
?>