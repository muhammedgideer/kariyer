<?php include("header.php");


$uyesor=$db->prepare("SELECT * FROM uye where uye_id=:id");
$uyesor->execute(array(
  'id' => $_GET['uye_id']
  ));

$uyecek=$uyesor->fetch(PDO::FETCH_ASSOC);



 ?>


	


        
        <div class="content">
          <h2 class="mb-2 lh-sm">Üye Düzenle</h2>
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
                        <h3 class="text-900 mb-0" data-anchor>Üye Düzenle</h3>
                      </div>
                     
                    </div>
                  </div>

                  <div class="card-body p-0">
                    
                    <div class="p-4 code-to-copy">
                       <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" >

                        

                        <div class="mb-3"><label class="form-label" for="basic-form-name">Üye Ad</label> <input class="form-control" id="basic-form-name" name="uye_ad"  required="required" placeholder="Ad giriniz" value="<?php echo $uyecek['uye_ad'] ?>" ></div>

                        <div class="mb-3"><label class="form-label" for="basic-form-name">Üye Soyad</label><input class="form-control" id="basic-form-name" name="uye_soyad"  required="required" placeholder="Soyad giriniz" value="<?php echo $uyecek['uye_soyad'] ?>" ></div>

                        <div class="mb-3"><label class="form-label" for="basic-form-name">Üye Mail</label> <input class="form-control" id="basic-form-name" name="uye_mail"  required="required" placeholder="Mail giriniz" value="<?php echo $uyecek['uye_mail'] ?>"></div>

                         

                        <div class="mb-3"><label class="form-label" for="basic-form-name">Üye Durum</label>
                          <select class="form-select" aria-label="Default select example" name="uye_durum" required>
                        <option value="1" <?php echo $uyecek['uye_durum'] == '1' ? 'selected=""' : ''; ?>>Aktif</option>
                        <option value="0" <?php if ($uyecek['uye_durum']==0) { echo 'selected=""'; } ?>>Pasif</option>
                      </select>

                        </div>


                        <input type="hidden" name="uye_id" value="<?php echo $uyecek['uye_id'] ?>">



                        <button class="btn btn-primary" type="submit" name="uyeduzenle">Üye Düzenle</button>
                      </form>
                    </div>
                  </div>
                </div>

<?php include("footer.php"); ?>
