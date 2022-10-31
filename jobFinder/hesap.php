<?php include 'header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-title-wrap">
				<div class="page-title-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="bigtitle">Hesap Bilgilerim</div>
							<p >Bilgilerinizi aşağıdan düzenleyebilirsiniz...</p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<form action="nedmin/netting/islem.php" method="POST" class="form-horizontal checkout" role="form">
		<div class="row">
			<div class="col-md-12">
				<div class="title-bg">
					<div class="title">Kayıt Bilgileri</div>
				</div>

				<?php 

				if (isset($_GET['durum']) && $_GET['durum']=="farklisifre") {?>

				<div class="alert alert-danger">
					<strong>Hata!</strong> Girdiğiniz şifreler eşleşmiyor.
				</div>

				<?php } elseif (isset($_GET['durum']) && $_GET['durum']=="eksiksifre") {?>

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

				<?php }
				?>


				


				<div class="form-group dob">
					<div class="col-sm-12">
						Mail Adresi
						<input type="email" class="form-control"  required="" name="uye_mail" placeholder="Mail Bilgileri" value="<?php echo $uyecek['uye_mail'] ?>">
					</div>
					
				</div><div class="form-group dob">
					<div class="col-sm-12">
						Ad 
						<input type="text" class="form-control"  required="" name="uye_ad" placeholder="Ad Bilgileri" value="<?php echo $uyecek['uye_ad'] ?>">
					</div>
					
				</div>

				
				<div class="form-group dob">
					
					<div class="col-sm-12">
						Soyad
						<input type="text" class="form-control"  required="" name="uye_soyad" placeholder="Soyad Bilgileri" value="<?php echo $uyecek['uye_soyad'] ?>">
					</div>
				</div>
				<div class="form-group dob">
					
					<div class="col-sm-12">
						TC Kimlik No
						<input type="text" class="form-control"  required="" name="uye_tc" placeholder="TC Kimlik No Bilgileri" value="<?php echo $uyecek['uye_tc'] ?>">
					</div>
				</div>

				<button type="submit" name="uyebilgiguncelle" class="btn           btn-default btn-red">Bilgilerimi Güncelle</button>


				<h3><i class="fa fa-gear"></i> Şifre Değiştir</h3>
						<hr>

						<form action="nedmin/netting/islem.php" method="POST">
						<input type="hidden" name="uye_id" value="<?php echo $girisyapan_uyeid ?>">
						Eski şifre
						<input class="form-control" type="password" name="uye_passwordeski"  placeholder="Eski şifrenizi giriniz">
						<br>
						Yeni şifre
						<input class="form-control" type="password" name="uye_passwordone"  placeholder="Yeni şifre giriniz">
						<br>
						Yeni şifre tekrar
						<input class="form-control" type="password" name="uye_passwordtwo"  placeholder="Yeni şifre tekrar giriniz">
						<br>
						

						<button style="float: center;" class="btn btn-success" type="submit" name="sifreguncelle">Şifre Güncelle</button>

				<input type="hidden" name="uye_id" value="<?php echo $uyecek['uye_id'] ?>">


			</div>
		</div>
	</div>
</form>
<div class="spacer"></div>
<br>
</div>

<?php include 'footer.php'; ?>