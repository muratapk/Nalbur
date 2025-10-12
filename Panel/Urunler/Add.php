<?php
require_once("../Ayar/Config.php");
?>


  <div class="container mt-5">
    <h2 class="mb-4">Ürün Kayıt Formu</h2>
    <form action="index.php?page=urunlerSave" method="post" enctype='multipart/form-data'>
      <div class="mb-3">
        <label for="name" class="form-label">Ürün Adı</label>
        <input type="text" class="form-control" id="name" name="name" maxlength="150" required>
      </div>

      <div class="mb-3">
        <label for="description" class="form-label">Açıklama</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Fiyat (₺)</label>
        <input type="number" step="0.01" class="form-control" id="price" name="price" required>
      </div>
      
      <div class="mb-3">
        <label for="discount" class="form-label">İndirimli Fiyat (₺)</label>
        <input type="number" step="0.01" class="form-control" id="discount" name="discount" required>
      </div>
      <div class="mb-3">
        <label for="stock_quantity" class="form-label">Stok Miktarı</label>
        <input type="number" class="form-control" id="stock_quantity" name="stock_quantity" value="0">
      </div>

      <div class="mb-3">
        <label for="category_id" class="form-label">Kategori ID</label>
        <select name="category_id" class="form-control">
        <option value="">Seçim Yapınız</option>
        <?php
          $sql="Select * from categories";
          $sorgu=mysqli_query($conn,$sql);
          while($row=$sorgu->fetch_assoc())
          {
        ?>
             
             <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
        
        <?php
          }
        ?>
                     
         </select>
        
      </div>

      <div class="mb-3">
        <label for="image_url" class="form-label">Ürün Görseli URL</label>
        <input type="file" class="form-control" id="image_url" name="image_url">
      </div>

      <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
  </div>



