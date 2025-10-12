<?php
require_once("../Ayar/Config.php");
if(isset($_GET['id'])|| !empty($_GET['id']))
  {
    $id=$_GET['id'];
  }
?>


  <div class="container mt-5">
    <h2 class="mb-4">Resim Ekle</h2>
    <form action="index.php?page=topluSave" method="post" enctype='multipart/form-data'>
    <input type="hidden" name="id" value="<?php echo $id;?>" />
     
     

      
      
    
     

      

      <div class="mb-3">
        <label for="image_url" class="form-label">Ürün Görseli URL</label>
        <input type="file" class="form-control" id="image_url" name="image_url">
      </div>

      <button type="submit" class="btn btn-primary">Kaydet</button>
    </form>
  </div>

<?php require_once("index.php");?>

