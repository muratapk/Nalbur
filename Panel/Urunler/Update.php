<?php
require_once("../Ayar/Config.php");

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$discount = $_POST['discount'];
$stock_quantity = $_POST['stock_quantity'];
$category_id = empty($_POST['category_id']) ? "NULL" : intval($_POST['category_id']);
$sql = ""; // Başlangıçta boş tanımla

$image_url = $_FILES['image_url']['name'];

if (isset($image_url) && !empty($image_url)) {
    $image_name = $_FILES['image_url']['name'];
    $image_size = $_FILES['image_url']['size'];
    $image_temp = $_FILES['image_url']['tmp_name'];
    $uzanti = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
    $rast = rand(10000, 1000000);
    $tarih = date("Y-m-d-H-i-s");
    $yeni_isim = $rast . $tarih . "." . $uzanti;

    if ($image_size >= 5242880) {
        echo "<script>alert('Resim Boyutu 5MB Büyük Olmaz');</script>";
        exit;
    } elseif (in_array($uzanti, ['png', 'gif', 'jpg', 'jpeg'])) {
        move_uploaded_file($image_temp, '../Product_Image/' . $yeni_isim);
        $image_url = $yeni_isim;
        $sql = "UPDATE products SET name='$name', description='$description', price='$price', discount='$discount', stock_quantity='$stock_quantity', category_id=$category_id, image_url='$image_url' WHERE id='$id'";
    } else {
        echo "<script>alert('Desteklenmeyen dosya türü');</script>";
        exit;
    }
} else {
    // Resim güncellenmemişse
    $sql = "UPDATE products SET name='$name', description='$description', price='$price', discount='$discount', stock_quantity='$stock_quantity', category_id=$category_id WHERE id='$id'";
}

// Sorguyu çalıştır
if (!empty($sql)) {
    $sorgu = mysqli_query($conn, $sql);

    if ($sorgu) {
        echo "<script>window.location.href='index.php?page=urunler'</script>";
    } else {
        echo "Veritabanı hatası: " . mysqli_error($conn);
    }
}
?>
