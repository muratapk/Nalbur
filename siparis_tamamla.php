<?php
session_start();
require_once("Ayar/Config.php");

// Oturum kontrolü
if (!isset($_SESSION['User_id'])) {
    echo "Oturum bulunamadı.";
    exit;
}

$user_id = $_SESSION['User_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['siparisVerileri'])) {
    $siparisVerileri = json_decode($_POST['siparisVerileri'], true); // JSON verisini diziye çevir

    if (!is_array($siparisVerileri)) {
        echo "Veri biçimi hatalı.";
        exit;
    }

    foreach ($siparisVerileri as $urun) {
        // Güvenlik önlemleri
        $product_id = intval($urun['product_id']);
        $quantity = intval($urun['quantity']);
        $price = floatval($urun['price']);

        // Veritabanına ekleme
       $sql = "INSERT INTO orderss (user_id, product_id, quantity, price) 
        VALUES ($user_id, $product_id, $quantity, $price)";
        //Sepeti silme İşlemi
        $sql2="Delete from card where user_id='$user_id'";
        $sorgu2=mysqli_query($conn,$sql2);
        
       ////////////////
        // $stmt = mysqli_prepare($conn, $sql);
        // mysqli_stmt_bind_param($stmt, "iiid", $user_id, $product_id, $quantity, $price);
        // $result = mysqli_stmt_execute($stmt);
        $result=mysqli_query($conn, $sql);  
        if (!$result) {
            echo "Veritabanı hatası: " . mysqli_error($conn);
            exit;
        }
    }

    echo "Sipariş başarıyla tamamlandı.";
} else {
    echo "Geçersiz istek.";
}
?>
