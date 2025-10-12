<?php
require_once("../Ayar/Config.php");
$Id=$_POST['id'];
$name=$_POST['name'];

if (empty($_POST['parent_id'])) {
    $parent_id = "NULL"; // SQL NULL kelimesi, tırnaksız kullanılacak
} else {
    $parent_id = intval($_POST['parent_id']); // Güvenlik için int'e çevir
}


 $sql="update categories set name='$name',parent_id=$parent_id where id='$Id' ";
$sorgu=mysqli_query($conn,$sql);
if($sorgu!=null)
{
  //echo "Kaydınız Yapılmıştır";
  //echo "<a href='index.php?page=kategori'>Anasayfa</a>";
  echo "<script>window.location.href='index.php?page=kategori'</script>";

}
?>