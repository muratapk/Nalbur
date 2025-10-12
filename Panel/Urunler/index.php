<?php
require_once("../Ayar/Config.php");
$sql="Select * from products";
$sorgu=mysqli_query($conn,$sql);
?>


 <div class="container mt-5">
    <h2>Ürünler Tablosu</h2>
    <a class="btn btn-sm btn-success" href="index.php?page=urunlerAdd">Yeni</a>
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Ürün  Adı</th>
          <th>Açıklaması</th>
           <th>Ücreti</th>
           
           <th>Stok Miktarı</th>
           <th>Kategorisi</th>
           <th>Resim</th>
           <th>Oluşturma Tarihi</th>
          <th>İşlemler</th>
        </tr>
      </thead>
      <tbody>
     <?php
       while($row=$sorgu->fetch_assoc())
       {
    ?>
       <tr>
          <td>1</td>
          <td><?php echo $row["name"];?></td>
          <td><?php echo $row["description"];?></td>
          <td><?php echo $row["price"];?></td>
          <td><?php echo $row["stock_quantity"];?></td>
          <td><?php echo $row["category_id"];?></td>
          <td><?php echo $row["image_url"];?>
             <img src="../Product_Image/<?php echo $row['image_url'];?>" height="100px" width="100px" />
        
          </td>
          <td><?php echo $row["created_at"];?></td>
          <td>
            <a class="btn btn-sm btn-warning" href="index.php?page=urunlerEdit&id=<?php echo $row["id"];?>">Düzelt</a>
            <a class="btn btn-sm btn-danger" href="index.php?page=urunlerDelete&id=<?php echo $row["id"];?>">Silme</a>
            <a class="btn btn-sm btn-danger" href="index.php?page=topluAdd&id=<?php echo $row["id"];?>">Resim Galeri</a>
          </td>
        </tr>
    <?php
       }
     ?>
       
      
      </tbody>
    </table>
  </div>