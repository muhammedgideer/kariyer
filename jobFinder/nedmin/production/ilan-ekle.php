<?php include("header.php"); 

?>


	


        
        <div class="content">
          <h2 class="mb-2 lh-sm">İlan Ekle</h2>
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
                        <h3 class="text-900 mb-0" data-anchor>İlan Ekle</h3>
                      </div>
                     
                    </div>
                  </div>

                  <div class="card-body p-0">
                    
                    <div class="p-4 code-to-copy">
                       <form action="../netting/islem.php" method="POST">

                        
                        <div class="mb-3"><label class="form-label" for="basic-form-name">İlan Ad</label> <input class="form-control" id="basic-form-name" name="ilan_ad"  required="required" placeholder="İlan Ad giriniz"></div>

                        <div class="mb-3"><label class="form-label" for="basic-form-name">İlan Açıklama </label><textarea class="form-control" id="editor1" rows="10" cols="80" name="ilan_aciklama" ><?php echo $ilancek['ilan_aciklama'] ?></textarea>

                          <script>
                            // Replace the <textarea id="editor1"> with a CKEditor 4
                            // instance, using default configuration.
                            CKEDITOR.replace( 'editor1' );
                        </script></div>

                         <div class="mb-3"><label class="form-label" for="basic-form-name">İlan Şehir </label><input class="form-control" id="basic-form-name" name="ilan_sehir"  required="required" placeholder="İlan Şehir giriniz"></div>


                           <div class="mb-3"><label class="form-label" for="basic-form-name">İlan Çalışma Şekli </label><input class="form-control" id="basic-form-name" name="ilan_calisma_sekli"  required="required" placeholder="İlan Çalışma Şekli giriniz"></div>

                           <div class="mb-3"><label class="form-label" for="basic-form-name">İlan Pozisyon </label><input class="form-control" id="basic-form-name" name="ilan_pozisyon"  required="required" placeholder="İlan Pozisyon giriniz"></div>

                           <div class="mb-3"><label class="form-label" for="basic-form-name">İlan Ücret </label><input class="form-control" id="basic-form-name" name="ilan_ucret"  required="required" placeholder="İlan Ücret giriniz"></div>

                            <div class="input-group-icon mt-30 mb-3">
                              <label class="form-label" for="basic-form-name">İlan Kategori </label>
                            <div   class="form-select" id="default-select">
                                  <select name="ilan_kategoriid" style="width: 100%;">
                                    <?php $kategorisor=$db->prepare("SELECT * from kategoriler");
                                    $kategorisor->execute();
                                    while($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC)){ ?>

                                    <option value="<?php echo $kategoricek['kategori_id'] ?>"><?php echo $kategoricek['kategori_ad'] ?></option>

                                  <?php } ?>
                              
                                  </select>
                            </div>
                          </div>

                          

                             

                            <div class="input-group-icon mt-30 mb-3">
                              <label class="form-label" for="basic-form-name">İlan Şirket </label>
                            <div   class="form-select" id="default-select">
                                  <select name="ilan_sirketid" style="width: 100%;">
                                    <?php $sirketsor=$db->prepare("SELECT * from sirketler");
                                    $sirketsor->execute();
                                    while($sirketcek=$sirketsor->fetch(PDO::FETCH_ASSOC)){ ?>

                                    <option value="<?php echo $sirketcek['sirket_id'] ?>"><?php echo $sirketcek['sirket_ad'] ?></option>

                                  <?php } ?>
                              
                                  </select>
                            </div>
                          </div>

                          <div class="input-group-icon mt-30 mb-3">
                              <label class="form-label" for="basic-form-name">İlan Türü </label>
                            <div   class="form-select" id="default-select">

                                  <select name="ilan_tur" style="width: 100%;">
                                    <option value="0">İş İlanı</option>
                                    <option value="1">Staj İlanı</option>
                                    

                              
                                  </select>
                            </div>
                          </div>
                            




                        <button class="btn btn-primary" type="submit" name="ilankaydet">ilan Ekle</button>
                      </form>
                    </div>
                  </div>
                </div>

<?php include("footer.php"); ?>
