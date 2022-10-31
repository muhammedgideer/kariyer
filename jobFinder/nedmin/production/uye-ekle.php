<?php include("header.php"); 

?>


	


        
        <div class="content">
          <h2 class="mb-2 lh-sm">Üye Ekle</h2>
          <small>
          
          	 <?php 

			if ($_GET['durum']=="farklisifre") {?>

			  <div class=" text-danger">
			    <strong>Hata!</strong> Girdiğiniz şifreler eşleşmiyor.
			  </div>

			<?php } elseif ($_GET['durum']=="eksiksifre") {?>

			  <div class=" text-danger">
			    <strong>Hata!</strong> Şifreniz minimum 6 karakter uzunluğunda olmalıdır.
			  </div>

			<?php } elseif ($_GET['durum']=="mukerrerkayit") {?>

			  <div class=" text-danger">
			    <strong>Hata!</strong> Bu kullanıcı daha önce kayıt edilmiş.
			  </div>

			<?php } elseif ($_GET['durum']=="basarisiz") {?>

			  <div class=" text-danger">
			    <strong>Hata!</strong> Kayıt Yapılamadı Sistem Yöneticisine Danışınız.
			  </div>
			<?php } elseif ($_GET['durum']=="loginbasarili") {?>

			  <div class=" text-success">
			    <strong>Kayıt Tamamlandı!</strong> Kayıt Yapıldı İstediğiniz Zaman Giriş Yapabilirsiniz.
			  </div>

			<?php }?>

          </small>
          <div class="mt-4">
            <div >
              <div class="col-12 col-xl-10 order-1 order-xl-0">
                



                <div class="card shadow-none border border-300 my-4" data-component-card>
                  <div class="card-header p-4 border-bottom border-300 bg-soft">
                    <div class="row g-3 justify-content-between align-items-center">
                      <div class="col-12 col-md">
                        <h3 class="text-900 mb-0" data-anchor>Üye Ekle</h3>
                      </div>
                     
                    </div>
                  </div>

                  <div class="card-body p-0">
                    
                    <div class="p-4 code-to-copy">
                       <form action="../netting/islem.php" method="POST" enctype="multipart/form-data" >

                        
                        <div class="mb-3"><label class="form-label" for="basic-form-name">Üye Ad</label> <input class="form-control" id="basic-form-name" name="uye_ad"  required="required" placeholder="Ad giriniz"></div>

                        <div class="mb-3"><label class="form-label" for="basic-form-name">Üye Soyad</label><input class="form-control" id="basic-form-name" name="uye_soyad"  required="required" placeholder="Soyad giriniz"></div>

                        <div class="mb-3"><label class="form-label" for="basic-form-name">Üye Email</label> <input class="form-control" id="basic-form-name" name="uye_mail"  required="required" placeholder="Email giriniz"></div>

                        <div class="mb-3"><label class="form-label" for="basic-form-name">Üye Şifre</label> <input class="form-control" id="basic-form-name" name="uye_passwordone"  required="required" placeholder="Şifre giriniz"></div>

                        <div class="mb-3"><label class="form-label" for="basic-form-name">Üye Şifre (tekrar)</label> <input class="form-control" id="basic-form-name" name="uye_passwordtwo"  required="required" placeholder="Şifre giriniz"></div>

                        <div class="mb-3"><label class="form-label" for="basic-form-name">Üye Durum</label>
                          <select class="form-select" aria-label="Default select example" name="uye_durum" required>
                        <option value="1">Aktif</option>
                        <option value="0">Pasif</option>
                      </select>

                        </div>

                        


                        <button class="btn btn-primary" type="submit" name="uyekaydet">Üye Ekle</button>
                      </form>
                    </div>
                  </div>
                </div>

<?php include("footer.php"); ?>
