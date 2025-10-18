 <?php
 session_start();
 require_once("Ayar/Config.php");
 if(isset($_SESSION['User_id']))
 {
 $user_id=$_SESSION['User_id'];
 $sql="Select count(id) as adet from card where user_id='$user_id'";
 $sorgu=mysqli_query($conn,$sql);
 $row=$sorgu->fetch_assoc();
 $toplam=$row['adet'];
 }
 else
 {
    $toplam=0;
 }
 


?>
 
 <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="cart.php" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge"><?php echo $toplam;?></span>
                </a>
</div>