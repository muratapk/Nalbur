
<?php
require_once("../Ayar/Config.php");
if(isset($_GET['id']))
{
    $Id = $_GET['id'];
    $sql="select * from products where id='$Id'";
    $sorgu=mysqli_query($conn,$sql);
    $row=$sorgu->fetch_assoc();

}
?>
 <div class="container mt-5">
    <h2 class="mb-4">Ürün Kayıt Formu</h2>
    <form action="index.php?page=urunlerUpdate" method="post" enctype='multipart/form-data'>
    <input type="hidden" name="id" value="<?php echo $row['id'];?>" />
      <div class="mb-3">
        <label for="name" class="form-label">Ürün Adı</label>
        <input type="text" class="form-control" id="name" value="<?php echo $row['name'];?>" name="name" maxlength="150" required>
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Açıklama</label>
        <textarea class="form-control" id="description" name="description" rows="3">
          <?php echo $row['description'];?>
        </textarea>
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Fiyat (₺)</label>
        <input type="number" step="0.01" class="form-control" value="<?php echo $row['price'];?>" id="price" name="price" required>
      </div>
       
        <div class="mb-3">
        <label for="price" class="form-label">İndirmli Fiyat (₺)</label>
        <input type="number" step="0.01" class="form-control" value="<?php echo $row['discount'];?>" id="price" name="discount" required>
      </div>

      <div class="mb-3">
        <label for="stock_quantity" class="form-label">Stok Miktarı</label>
        <input type="number" step="0.01" class="form-control" id="stock_quantity" value="<?php echo $row['stock_quantity'];?>" name="stock_quantity" value="0">
      </div>

      <div class="mb-3">
        <label for="category_id" class="form-label">Kategori ID</label>
        <select name="category_id" class="form-control">
                     <option value="<?php echo $row['category_id'];?>"><?php echo $row['category_id'];?></option>
                     <option value="">Seçim Yapınız</option>
         </select>
        
      </div>

      <div class="mb-3">
        <label for="image_url" class="form-label">Ürün Görseli URL</label>
        <img src="../Product_Image/<?php echo $row['image_url'];?>" height="100px" width="100px"/>
        <input type="file" class="form-control" id="image_url" name="image_url">
      </div>

      <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
  </div>



