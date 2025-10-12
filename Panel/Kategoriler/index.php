<?php
require_once("../Ayar/Config.php");
$sql="Select * from categories";
$sorgu=mysqli_query($conn,$sql);
?>


 <div class="container mt-5">
    <h2>Kategori Tablosu</h2>
    <a class="btn btn-sm btn-success" href="index.php?page=kategoriAdd">Yeni</a>
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>Kategori Adı</th>
          <th>Alt Kategori Numarası</th>
          
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
          <td><?php echo $row["parent_id"];?></td>
          
          <td>
            <a class="btn btn-sm btn-warning" href="index.php?page=kategoriEdit&id=<?php echo $row["id"];?>">Düzelt</a>
            <a class="btn btn-sm btn-danger" href="index.php?page=kategoriDelete&id=<?php echo $row["id"];?>">Silme</a>
          </td>
        </tr>
    <?php
       }
     ?>
       
      
      </tbody>
    </table>
  </div>