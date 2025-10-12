<?php
if(isset($_GET['page']))
{
    $page=$_GET['page'];

    $allowed_pages=[
        "admin"=>"Admin/index.php",
        "adminAdd"=>"Admin/Add.php",
        "adminEdit"=>"Admin/Edit.php",
        "adminDelete"=>"Admin/Delete.php",
        "adminSave" =>"Admin/Save.php",
        "adminUpdate"=>"Admin/Update.php",
        "kategori"=>"Kategoriler/index.php",
        "kategoriAdd"=>"Kategoriler/Add.php",
        "kategoriEdit"=>"Kategoriler/Edit.php",
        "kategoriDelete"=>"Kategoriler/Delete.php",
        "kategoriSave" =>"Kategoriler/Save.php",
        "kategoriUpdate"=>"Kategoriler/Update.php",   
        "urunler"=>"Urunler/index.php",
        "urunlerAdd"=>"Urunler/Add.php",
        "urunlerEdit"=>"Urunler/Edit.php",
        "urunlerDelete"=>"Urunler/Delete.php",
        "urunlerSave" =>"Urunler/Save.php",
        "urunlerUpdate"=>"Urunler/Update.php", 
        "topluAdd"=>"Toplu_Resim/Add.php", 
        "toplu"=>"Toplu_Resim/index.php",
        "topluSave"=>"Toplu_Resim/Save.php",
        "topluDelete"=>"Toplu_Resim/Delete.php"  
    ];

}
if (array_key_exists($page, $allowed_pages)) {
    include $allowed_pages[$page];
} else {
    echo "<div class='container mt-5'><h3>Geçersiz veya tanımsız sayfa!</h3></div>";
}
?>


