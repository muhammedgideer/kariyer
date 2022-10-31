<?php include("header.php") ?>
<div class="whole-wrap">
		<div class="container box_1170">
<div class="section-top-border">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<h3 class="mb-30">Başvuru Formu</h3>
						<form action="nedmin/netting/islem.php" method="POST">
							<div class="mt-10">
								<input type="text" name="basvur_ad" placeholder="Ad"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ad'" required
									class="single-input">
							</div>
							<div class="mt-10">
								<input type="text" name="basvur_soyad" placeholder="Soyad"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Soyad'" required
									class="single-input">
							</div>
							<div class="mt-10">
								<input type="text" name="basvur_tel" placeholder="Telefon"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telefon'" required
									class="single-input">
							</div>
							<div class="mt-10">
								<input type="email" name="basvur_mail" placeholder="Email"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email '" required
									class="single-input">
							</div>

							<div class="mt-10">
								<input type="text" name="basvur_adres" placeholder="Adres"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adres '" required
									class="single-input">
							</div>

							
							<div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
								<div class="form-select" id="default-select">
											<select name="basvur_cinsiyet" required>
												<option value=" 1">Cinsiyet</option>
									<option value="0">Erkek</option>
									<option value="1">Kadın</option>
									
									</select>
								</div>
							</div>

							<div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
								<div class="form-select" id="default-select">
									<select name="basvur_egitim" required>
									<option value=" 1">Eğitim Durumu</option>
									<option value="0">İlk Okul</option>
									<option value="1">Orta Okul</option>
									<option value="2">Lise</option>
									<option value="3">Ön Lisans</option>
									<option value="4">Lisans</option>
									<option value="5">YÜksek Lisans</option>
									
									</select>
								</div>
							</div>

							
							<br>
							<label>CV Yükleyiniz</label>
							<div class="input-group-icon mt-10">
								

								<div class="icon"><i class="fa fa-file" aria-hidden="true"></i></div>
								<input type="file" name="basvur_cv" required >
							</div>

							<input type="hidden" name="basvur_ilanid" value="<?php echo $_GET['ilan_id'] ?>">
							
							<div align="center" class="button-group-area">
							<button  class="genric-btn primary" type="submit" name="basvurukaydet">Başvur</button>
						</div>
						</form>
					</div>
				</div>
			</div>

			</div>
			</div>

<?php include("footer.php") ?>