<?php
require_once("../Ayar/Config.php");
$sql="Select * from admins";
$sorgu=mysqli_query($conn,$sql);
?>


 <div class="container mt-5">
    <h2>Admins Tablosu</h2>
    <a class="btn btn-sm btn-success" href="index.php?page=adminAdd">Yeni</a>
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          <th>İsim</th>
          <th>E-posta</th>
          <th>Şifre</th>
          <th>Rol</th>
          <th>Oluşturulma Tarihi</th>
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
          <td><?php echo $row["email"];?></td>
          <td><?php echo $row["password"];?></td>
          <td><?php echo $row["role"];?></td>
          <td><?php echo $row["created_at"];?></td>
          <td>
            <a class="btn btn-sm btn-warning" href="index.php?page=adminEdit&Id=<?php echo $row["id"];?>">Düzelt</a>
            <a class="btn btn-sm btn-danger" href="index.php?page=adminDelete&Id=<?php echo $row["id"];?>">Silme</a>
          </td>
        </tr>
    <?php
       }
     ?>
       
      
      </tbody>
    </table>
  </div>