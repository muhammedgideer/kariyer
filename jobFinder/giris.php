<?php include("header.php") ?>
<div  class="whole-wrap">
		<div  class="container box_1170">
<div class="section-top-border">
	<br><br><hr>

				<div class="row">
					<div class="col-lg-4 col-md-4"></div>
					<div class="col-lg-4 col-md-4">
						<h3 align="center" class="mb-30">Giriş Yap</h3>
						<small>
							<?php  
		if (isset($_GET['durum']) && $_GET['durum']=="basarisizgiris") {?>

		<div class="alert alert-danger">
			<strong>Hata!</strong> Giris Yapılamadı.
		</div>

		<?php } ?>


						</small>
						<form action="nedmin/netting/islem.php" method="POST">
							<div class="mt-10">
								<input type="email" name="uye_mail" placeholder="Email"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required
									class="single-input">
							</div>
							<div class="mt-10">
								<input type="password" name="uye_password" placeholder="Şifre"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Şifre'" required
									class="single-input">
							</div>
							
							
							<div align="center" class="button-group-area">
							<button  class="genric-btn primary" type="submit" name="girisyap">Giriş Yap</button></div><br>
						<div align="center" class="button-group-area"><a style="color: darkred;" href="forgotPassword.php">Şifremi Unuttum</a></div>
						</form>
					</div>
				</div>
			</div>

			</div>
			</div>
			<hr><br><br><br>

<?php include("footer.php") ?>