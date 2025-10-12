<?php
require_once("../Ayar/Config.php");
if(isset($_GET['Id']))
{
    $Id=$_GET['Id'];
    $sql="Delete from admins where id='$Id'";
    $sorgu=mysqli_query($conn,$sql);
    echo "Kaydınız Silinmiştir";
    echo "<a href='index.php?page=admin'>Anasayfa</a>";
}
?>