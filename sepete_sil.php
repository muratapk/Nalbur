<?php
session_start();
require_once("Ayar/Config.php");
if(isset($_SESSION['User_id']))
{
$card_id=$_POST['id'];

$sql="Delete from card where id='$card_id'";
$sorgu=mysqli_query($conn,$sql);
    if($sorgu)
    {
        echo "Sepetten Silindi";
    }
}
else
{
    echo "Sisteme Kayıtlı Üye Değilsiniz Lütfen Kayıt Olun";
}



?>