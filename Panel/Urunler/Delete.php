<?php
require_once("../Ayar/Config.php");
if(isset($_GET['Id']))
{
    $Id=$_GET['id'];
    $sql="Delete from products where id='$Id'";
    $sorgu=mysqli_query($conn,$sql);
    echo "Kaydınız Silinmiştir";
    echo "<a href='index.php?page=admin'>Anasayfa</a>";
}
?>