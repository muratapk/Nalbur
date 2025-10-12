<?php
require_once("../Ayar/Config.php");
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="Select image_url from gallery where id='$id'";
    $sorgum=mysqli_query($conn,$sql);
    $row=$sorgum->fetch_assoc();
    $sonuc=unlink("../../Product_Image/".$row['image_url']);    


    $sql="Delete from gallery where id='$id'";
    $sorgu=mysqli_query($conn,$sql);
    echo "Kaydınız Silinmiştir";
    echo "<a href='index.php?page=index'>Anasayfa</a>";
}
?>