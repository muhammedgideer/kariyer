<?php include("header.php");
$hakkimizdasor=$db->prepare("SELECT * from hakkimizda");
$hakkimizdasor->execute();
$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);


 ?>


	


        
        <div class="content">
          <h2 class="mb-2 lh-sm"><?php echo $sirketcek['sirket_ad']; ?></h2>
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
                        <h3 class="text-900 mb-0" data-anchor>Hakkımızda Düzenle</h3>
                      </div>
                     
                    </div>
                  </div>

                  <div class="card-body p-0">
                    
                    <div class="p-4 code-to-copy">
                       <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" >

                         <div class="mb-3"><label class="form-label">Hakkımızda Yüklü Resim</label> 
                          <hr>
                          <img width="200" src="../../<?php echo $hakkimizdacek['hakkimizda_resimyol'] ?>">
                          <hr>
                        </div>

                        <div class="mb-3"><label class="form-label" for="basic-form-name">Hakkımızda Resim Seç</label> <input class="form-control"  name="hakkimizda_resimyol"   type="file"></div>

                         <div class="mb-3"><label class="form-label" for="basic-form-name">Hakkımızda Yazısı</label>
                          <textarea class="form-control" id="editor1" rows="10" cols="80" name="hakkimizda_yazisi" ><?php echo $hakkimizdacek['hakkimizda_yazisi'] ?></textarea>

                          <script>
                            // Replace the <textarea id="editor1"> with a CKEditor 4
                            // instance, using default configuration.
                            CKEDITOR.replace( 'editor1' );
                        </script>
                        </div>
                        
                       
                        <input type="hidden" name="hakkimizda_id" value="<?php echo $hakkimizdacek['hakkimizda_id']; ?>">
                        <input type="hidden" name="hakkimizda_resimyol_eski" value="<?php echo $hakkimizdacek['hakkimizda_resimyol']; ?>">


                        <button class="btn btn-primary" type="submit" name="hakkimizda-yazisi-duzenle">Güncelle</button>
                      </form>
                    </div>
                  </div>
                </div>

<?php include("footer.php"); ?>
