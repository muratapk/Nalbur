<?php 
session_start();
require_once("../Ayar/Config.php");
$email=$_POST['email'];
$password=$_POST['password'];
$sql="Select * from admins where email='$email' and password='$password'";
$sorgu=mysqli_query($conn,$sql);
if($sorgu->num_rows>0)
{
    $row = $sorgu->fetch_assoc(); // Veriyi çek
    $_SESSION["email"] = $email;
    $_SESSION['User_id'] = $row['id']; // Burada 'id' sütun adını kendi tablo yapına göre değiştir

    echo "<script>window.location.href='index.php'</script>";
}
else
{
    echo "<script>window.location.href='../index.php'</script>";
}


?>