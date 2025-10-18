<?php
session_start();
require_once("Ayar/Config.php");
if(isset($_SESSION['User_id']))
{
$id=$_POST['id'];
$User_id=$_SESSION['User_id'];
$quantity=1;
$sql="insert into card (user_id,product_id,quantity,price) values ('$User_id','$id','$quantity',1)";
$sorgu=mysqli_query($conn,$sql);
    if($sorgu)
    {
        echo "Sepete Eklendi";
    }
}
else
{
    echo "Sisteme Kayıtlı Üye Değilsiniz Lütfen Kayıt Olun";
}



?>