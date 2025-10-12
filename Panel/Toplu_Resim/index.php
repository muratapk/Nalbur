<?php
require_once("../Ayar/Config.php");
$product_id=$_GET['id'];
$sql="Select * from gallery where product_id='$id'";
$sorgu=mysqli_query($conn,$sql);
?>


 <div class="container mt-5">
    <h2>Galeri Tablosu</h2>
    
    <table class="table table-striped table-bordered table-hover">
      <thead class="table-dark">
        <tr>
          <th>ID</th>
          
           <th>Resim</th>
          
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
        
          <td><?php echo $row["image_url"];?>
             <img src="../Product_Image/<?php echo $row['image_url'];?>" height="100px" width="100px" />
        
          </td>
          
          <td>
            
            <a class="btn btn-sm btn-danger" href="index.php?page=topluDelete&id=<?php echo $row["id"];?>">Silme</a>
            
          </td>
        </tr>
    <?php
       }
     ?>
       
      
      </tbody>
    </table>
  </div>