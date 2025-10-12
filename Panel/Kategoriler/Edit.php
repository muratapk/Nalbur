
<?php
require_once("../Ayar/Config.php");
if(isset($_GET['id']))
{
   echo $Id = $_GET['id'];
   echo  $sql="select * from categories where id='$Id'";
    $sorgu=mysqli_query($conn,$sql);
    $row=$sorgu->fetch_assoc();

}
?>

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="mb-4 text-center">Kategori Kayıt Formu</h2>
        <form action="index.php?page=kategoriUpdate" method="POST" novalidate>
          <div class="mb-3">
            <label for="name" class="form-label">İsim</label>
            <input type="text" class="form-control" value="<?php echo $row['name'];?>" id="name" name="name" required maxlength="100" placeholder="Adınızı girin" />
            <div class="invalid-feedback">Lütfen isim alanını doldurun.</div>
          </div>

          

         
          <input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
          <!--id değerini gizliyorum-->

          <div class="mb-3">
            <label for="role" class="form-label">Alt Kategori Seçimi</label>

            <select class="form-select" id="role" name="parent_id" required>
            <option value="<?php echo $row['id'];?>"><?php echo $row['parent_id'];?></option>
             <option value="">Seçimin Yapınız</option>
             <?php
              $sql="Select id,name from categories";
              $sorgu=mysqli_query($conn,$sql);
              while($row=$sorgu->fetch_assoc())
              {
                ?>

          <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>

             <?php }
            ?>
              


              
            </select>

            <div class="invalid-feedback">Lütfen bir rol seçin.</div>
          </div>

          <button type="submit" class="btn btn-primary w-100">Kayıt Ol</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Bootstrap 5 JS CDN (validation için) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Basit Bootstrap form validation
    (function () {
      'use strict';
      const form = document.querySelector('form');
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    })();
  </script>
