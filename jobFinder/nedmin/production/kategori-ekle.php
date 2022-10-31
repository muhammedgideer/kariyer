<?php include("header.php"); 

?>


	


        
        <div class="content">
          <h2 class="mb-2 lh-sm">Kategori Ekle</h2>
          <small>
          
          	 <?php 

               if (isset($_GET['durum']) && $_GET['durum']=="ok") {?>

                <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif (isset($_GET['durum']) && $_GET['durum']=="no") {?>

                <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>

          </small>
          <div class="mt-4">
            <div >
              <div class="col-12 col-xl-10 order-1 order-xl-0">
                



                <div class="card shadow-none border border-300 my-4" data-component-card>
                  <div class="card-header p-4 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h3 class="text-900 mb-0" data-anchor>Kategori Ekle</h3>
                      </div>
                     
                    </div>
                  </div>

                  <div class="card-body p-0">
                    
                    <div class="p-4 code-to-copy">
                       <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" >

                        
                        <div class="mb-3"><label class="form-label" for="basic-form-name">Kategori Ad</label> <input class="form-control" id="basic-form-name" name="kategori_ad"  required="required" placeholder="Ad giriniz"></div>

                        <div class="mb-3"><label class="form-label" for="basic-form-name">Kategori İlan Sayısı</label><input class="form-control" id="basic-form-name" name="kategori_ilansys"  required="required" placeholder="İlan Sayısı giriniz"></div>

              
                        


                        <button class="btn btn-primary" type="submit" name="kategorikaydet">Kategori Ekle</button>
                      </form>
                    </div>
                  </div>
                </div>

<?php include("footer.php"); ?>
