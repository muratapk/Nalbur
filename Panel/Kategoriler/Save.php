<?php
require_once("../Ayar/Config.php");
$name=$_POST['name'];
//$parent_id=$_POST['parent_id'];

if (empty($_POST['parent_id'])) {
    $parent_id = "NULL"; // SQL NULL kelimesi, tırnaksız kullanılacak
} else {
    $parent_id = intval($_POST['parent_id']); // Güvenlik için int'e çevir
}

$sql="insert into categories (name,parent_id) values ('$name',$parent_id)";
$sorgu=mysqli_query($conn,$sql);
if($sorgu!=null)
{
  echo "Kaydınız Yapılmıştır";
  echo "<a href='index.php?page=kategori'>Anasayfa</a>";
}
?>