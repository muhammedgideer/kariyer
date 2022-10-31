<?php include("header.php"); ?>


	


        
        <div class="content">
          <h2 class="mb-2 lh-sm">Genel Ayarlar</h2>
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
            <div class="row g-4">
              <div class="col-12 col-xl-10 order-1 order-xl-0">
                
                <div class="card shadow-none border border-300 my-4" data-component-card>
                  <div class="card-header p-4 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h3 class="text-900 mb-0" data-anchor>Logo Ayarları</h3>
                      </div>
                     
                    </div>
                  </div>
                  

                  <div class="card-body p-0">
                    
                    <div class="p-4 code-to-copy">

                 	 <form action="../netting/islem.php" method="POST" enctype="multipart/form-data"  >



                        <div class="mb-3"><label class="form-label" for="basic-form-name">Yüklü Logo</label> 
                        	<hr>
                        	<?php 
                    // aşagıda foto adına bakıyoruz ve uzunlugu sıfır ise resim yok fotosunu ekliyoruz varsa olan foto eklenir zaten.
                  if (strlen($ayarcek['ayar_logo'])>0) {?>

                    <img width="200"  src="../../<?php echo $ayarcek['ayar_logo']; ?>">

                  <?php } else {?>


                    <img width="200"  src="../../images/logo-yok.jpeg">


                  <?php } ?>
                        </div>
                        <hr>
                        <div class="mb-3"><label class="form-label">Resim Seç</label> <input class="form-control" type="file" name="ayar_logo"></div>

                        <input type="hidden" name="eski_yol" value="<?php echo $ayarcek['ayar_logo']; ?>">

						
						<button class="btn btn-primary" type="submit" name="logoduzenle" >Logo Güncelle</button>
                      </form>
                    </div>
                  </div>
                </div>



                <div class="card shadow-none border border-300 my-4" data-component-card>
                  <div class="card-header p-4 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h3 class="text-900 mb-0" data-anchor>Site Ayarları</h3>
                      </div>
                     
                    </div>
                  </div>

                  <div class="card-body p-0">
                    
                    <div class="p-4 code-to-copy">
                       <form action="../netting/islem.php" method="POST">

                        <div class="mb-3"><label class="form-label" for="basic-form-name">Site Başlığı</label> <input class="form-control" id="basic-form-name" required="required" value="<?php echo $ayarcek['ayar_title']; ?> " name="ayar_title"></div>

                        <div class="mb-3"><label class="form-label" for="basic-form-name">Site Açıklaması</label> <input class="form-control" id="basic-form-name" required="required" value="<?php echo $ayarcek['ayar_description']; ?> " name="ayar_description"></div>

                        <div class="mb-3"><label class="form-label" for="basic-form-name">Site Anahtar Kelime</label> <input class="form-control" id="basic-form-name" required="required" value="<?php echo $ayarcek['ayar_keyword']; ?> "  name="ayar_keyword"></div>

                        <div class="mb-3"><label class="form-label" for="basic-form-name">Site Yazar</label> <input class="form-control" id="basic-form-name" required="required" value="<?php echo $ayarcek['ayar_author']; ?> "  name="ayar_author"></div>

                        <div class="mb-3"><label class="form-label" for="basic-form-name">Site Gsm</label> <input class="form-control" id="basic-form-name" required="required" value="<?php echo $ayarcek['ayar_gsm']; ?> "  name="ayar_gsm"></div>

                        <div class="mb-3"><label class="form-label" for="basic-form-name">Site Mail</label> <input class="form-control" id="basic-form-name" required="required" value="<?php echo $ayarcek['ayar_mail']; ?> "  name="ayar_mail"></div>

                        <div class="mb-3"><label class="form-label" for="basic-form-name">Site Adres</label> <input class="form-control" id="basic-form-name" required="required" value="<?php echo $ayarcek['ayar_adres']; ?> "  name="ayar_adres"></div>

                        <div class="mb-3"><label class="form-label" for="basic-form-name"> Facebook Url</label> <input class="form-control" id="basic-form-name" required="required" value="<?php echo $ayarcek['ayar_facebook']; ?> "  name="ayar_facebook"></div>

                        <div class="mb-3"><label class="form-label" for="basic-form-name">İnstagram Url</label> <input class="form-control" id="basic-form-name" required="required" value="<?php echo $ayarcek['ayar_instagram']; ?> "  name="ayar_instagram"></div>

                        <div class="mb-3"><label class="form-label" for="basic-form-name">Twitter Url</label> <input class="form-control" id="basic-form-name" required="required" value="<?php echo $ayarcek['ayar_twitter']; ?> "  name="ayar_twitter"></div>


                        <button class="btn btn-primary" type="submit" name="genelayarkaydet">Güncelle</button>
                      </form>
                    </div>
                  </div>
                </div>

<?php include("footer.php"); ?>
