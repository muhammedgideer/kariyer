<?php include("header.php") ?>
<div class="whole-wrap">
		<div class="container box_1170">
<div class="section-top-border">
	<br><hr>
				<div class="row">
					<div class="col-lg-4 col-md-4"></div>
					<div class="col-lg-4 col-md-4">
						<h3 class="mb-30">Kayıt Ol</h3>
						<small><?php 

if (isset($_GET['durum']) && $_GET['durum']=="farklisifre") {?>

<div class="alert alert-danger">
<strong>Hata!</strong> Girdiğiniz şifreler eşleşmiyor.
</div>
					

<?php } elseif (isset($_GET['durum']) && $_GET['durum']=="eskisifre") {?>

<div class="alert alert-danger">
<strong>Hata!</strong> Şifreniz minimum 6 karakter uzunluğunda olmalıdır.
</div>
					

<?php } elseif (isset($_GET['durum']) && $_GET['durum']=="mukerrerkayit") {?>

<div class="alert alert-danger">
<strong>Hata!</strong> Bu kullanıcı daha önce kayıt edilmiş.
</div>
			
<?php } elseif (isset($_GET['durum']) && $_GET['durum']=="basarisiz") {?>
<div class="alert alert-danger">
<strong>Hata!</strong> Kayıt Yapılamadı Sistem Yöneticisine Danışınız.
</div>

	<div class="alert alert-success">
		<strong>Kayıt Tamamlandı!</strong> Kayıt Yapıldı İstediğiniz Zaman Giriş Yapabilirsiniz.
	</div>

<?php }?>
</small>
						<form action="nedmin/netting/islem.php" method="POST">
							<div class="mt-10">
								<input type="text" name="uye_ad" placeholder="Ad"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ad'" required
									class="single-input">
							</div>
							<div class="mt-10">
								<input type="text" name="uye_soyad" placeholder="Soyad"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Soyad'" required
									class="single-input">
							</div>
							<div class="mt-10">
								<input type="email" name="uye_mail" placeholder="Email"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required
									class="single-input">
							</div>
							<div class="mt-10">
								<input type="password" name="uye_passwordone" placeholder="Şifre"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Şifre '" required
									class="single-input">
							</div>

							<div class="mt-10">
								<input type="password" name="uye_passwordtwo" placeholder="Şifre Tekrar"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Şifre Tekrar '" required
									class="single-input">
							</div>

							
							<div align="center" class="button-group-area">
							<button  class="genric-btn primary" type="submit" name="kaydol">Kayıt Ol</button>
						</div>
						</form>
					</div>
				</div>
			</div>

			</div>
			</div>

<?php include("footer.php") ?>