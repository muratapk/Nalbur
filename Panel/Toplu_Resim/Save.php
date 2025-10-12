<?php
require_once("../Ayar/Config.php");
$product_id=$_POST['id'];


$image_name=$_FILES['image_url']['name'];
$image_size=$_FILES['image_url']['size'];
$image_temp=$_FILES['image_url']['tmp_name'];
$uzanti=strtolower(pathinfo($image_name,PATHINFO_EXTENSION));
//$parent_id=$_POST['parent_id'];
 $rast=rand(10000,1000000);
 $tarih=date("Y-m-d-H-i-s");
 $yeni_isim=$rast.$tarih.".".$uzanti;

if($image_size>=5242880)
{
  echo "<script> 
  alert('Resim Boyutu 5MB Büyük Olmaz');
  
  </script>";
}
else if($uzanti=="png" || $uzanti=="gif" || $uzanti=="jpg" || $uzanti=="jpeg")
{
    move_uploaded_file($image_temp,'../Product_Image/'.$yeni_isim);

    $image_url=$yeni_isim;

   



$sql="insert into gallery (product_id,image_url) values ('$product_id','$image_url')";
$sorgu=mysqli_query($conn,$sql);
if($sorgu!=null)
{
  echo "Kaydınız Yapılmıştır";
  echo "<a href='index.php?page=topluAdd&id=$product_id'>Anasayfa</a>";
}




}
else
{
  echo "<script> 
  alert('Resim Boyutu 5MB Büyük Olmaz ve Resim Dosyası Değil');
  
  </script>";
}




 



?>