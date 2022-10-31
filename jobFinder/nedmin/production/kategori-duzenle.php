<?php include("header.php");


$kategorisor=$db->prepare("SELECT * FROM kategoriler where kategori_id=:id");
$kategorisor->execute(array(
  'id' => $_GET['kategori_id']
  ));

$kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC);



 ?>


	


        
        <div class="content">
          <h2 class="mb-2 lh-sm">Kategori Düzenle</h2>
          <small>
          
          	<?php 

               if (isset($_GET['durum']) && $_GET['durum']=="ok") {?>

                <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif (isset($_GET['durum']) && $_GET['durum']=="no") {?>

                <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>

          </small>
          <div >
            <div class="row g-4">
              <div class="col-12 col-xl-10 order-1 order-xl-0">
                



                <div class="card shadow-none border border-300 my-4" data-component-card>
                  <div class="card-header p-4 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h3 class="text-900 mb-0" data-anchor>Kategori Düzenle</h3>
                      </div>
                     
                    </div>
                  </div>

                  <div class="card-body p-0">
                    
                    <div class="p-4 code-to-copy">
                       <form action="../netting/islem.php" method="POST" e >

                        

                        <div class="mb-3"><label class="form-label" for="basic-form-name">Kategori Ad</label> <input class="form-control" id="basic-form-name" name="kategori_ad"  required="required" placeholder="Ad giriniz" value="<?php echo $kategoricek['kategori_ad'] ?>" ></div>


                        

                         



                        <input type="hidden" name="kategori_id" value="<?php echo $kategoricek['kategori_id'] ?>">



                        <button class="btn btn-primary" type="submit" name="kategoriduzenle">Kategori Düzenle</button>
                      </form>
                    </div>
                  </div>
                </div>

<?php include("footer.php"); ?>
