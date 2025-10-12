<?php
require_once("../Ayar/Config.php");
if(isset($_GET['Id']))
{
    $Id=$_GET['Id'];
    $sql="select * from admins where id='$Id'";
    $sorgu=mysqli_query($conn,$sql);
    $row=$sorgu->fetch_assoc();

}
?>

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h2 class="mb-4 text-center">Yeni Admin Kayıt Formu</h2>
        <form action="index.php?page=adminUpdate" method="POST" novalidate>
         
          <input type="hidden" name="id" value="<?php echo $row['id'];?>"/>
          <div class="mb-3">
            <label for="name" class="form-label">İsim</label>
            <input type="text" class="form-control" value="<?php echo $row['name'];?>" id="name" name="name" required maxlength="100" placeholder="Adınızı girin" />
            <div class="invalid-feedback">Lütfen isim alanını doldurun.</div>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">E-posta</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email'];?>" required maxlength="150" placeholder="ornek@domain.com" />
            <div class="invalid-feedback">Lütfen geçerli bir e-posta girin.</div>
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Parola</label>
            <input type="password" class="form-control" id="password" value="<?php echo $row['password'];?>" name="password" required minlength="6" maxlength="255" placeholder="En az 6 karakter" />
            <div class="invalid-feedback">Parola en az 6 karakter olmalıdır.</div>
          </div>

          <div class="mb-3">
            <label for="role" class="form-label">Rol</label>
            <select class="form-select" id="role" name="role" required>
              <option value="admin" selected>admin</option>
              <option value="moderator">moderator</option>
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
