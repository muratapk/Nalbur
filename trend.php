<?php
require_once("Ayar/Config.php");
$sql="Select * from Products order by id Desc limit 10";

?>
  <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Trend Ürünler</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
        <?php 
         $sorgu=mysqli_query($conn,$sql);
         while($row=$sorgu->fetch_assoc())
         {?>

        
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card product-item border-0 mb-4">
                    <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        <img class="img-fluid w-100" src="Product_Image/<?php 
                        if(!empty($row['image_url']))
                        {
                           echo $row['image_url'];
                        }
                        else
                        {
                            echo "Default.png";
                        }
                        
                        ?>" alt="">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3"><?php echo $row['name'];?></h6>
                        <div class="d-flex justify-content-center">
                            <h6>Fiyat:<?php echo $row['price'];?></h6><h6 class="text-muted ml-2">Stok:<?php echo $row['stock_quantity'];?></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <a href="detail.php?id=<?php echo $row['id'];?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>Ürün Detay</a>
                        <a href="" id="sepet" data-id="<?php echo $row['id'];?>" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Sepet Ekle</a>
                    </div>
                </div>
            </div>

            <?php
               }
          ?>
             

           
            
           
           
           
           
            
        </div>
    </div>