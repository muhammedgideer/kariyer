<?php 
//session bir sayfadaki bilgiyi alıp bir diğer sayfada kullanılmasını sağlar ve bunun için aşagıdaki iki sorguyu her iki sayfayada bulundurulması lazım.
ob_start();
session_start();
include('../netting/baglan.php'); 
include ('fonksiyon.php');



//belirli veriyi ayar tablosundan databaseden çekme
$ayarsor=$db->prepare("SELECT * from ayar where ayar_id=:id");
$ayarsor->execute(
	array('id'=>0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);
?>
<!doctype html>
	<html lang="tr-TR" dir="ltr">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title><?php echo $ayarcek['ayar_title'] ?></title>
		<link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
		<link rel="manifest" href="assets/img/favicons/manifest.json">
		<meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
		<meta name="theme-color" content="#ffffff">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
		<link href="assets/css/phoenix.min.css" rel="stylesheet" id="style-default">
		<link href="assets/css/user.min.css" rel="stylesheet" id="user-style-default">
		<style>
			body {
				opacity: 0;
			}
		</style>
	</head>

	<body>
		<main class="main" id="top">
			<div class="container-fluid px-0">
				<div class="container">
					<div class="row flex-center min-vh-100 py-5">
						<div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3"><a class="d-flex flex-center text-decoration-none mb-4" href="../../<?php echo $ayarcek['ayar_logo']; ?>">
							<div class="d-flex align-items-center"><img src="../../<?php echo $ayarcek['ayar_logo']; ?>" alt="phoenix" width="150"></div>
							<h2><?php echo $ayarcek['ayar_title'] ?></h2>
						</a>
						<hr>
						<div class="text-center mb-7">
							<h3>Giriş Yap</h3>
							<p class="text-700">Hesabınıza giriş yapın</p>
						</div>

						<form action="../netting/islem.php" method="POST">


							<div class="mb-3 text-start">
								<label class="form-label" for="email">Email adres</label>
								<div class="form-icon-container">
									<input class="form-control form-icon-input" id="email" name="uye_mail" required="" type="text" placeholder="name@example.com">
									<span class="fas fa-user text-900 fs--1 form-icon"></span>
								</div>
								</div>

								<div class="mb-3 text-start"><label class="form-label" for="password">Şifre</label>
									<div class="form-icon-container">

										<input class="form-control form-icon-input" type="password" name="uye_password" required="" placeholder="Şifre">
										<span class="fas fa-user text-900 fs--1 form-icon"></span>
									</div>
								</div>

								<div class="row flex-between-center mb-7">
										<div class="col-auto">
											<div class="form-check mb-0"><input class="form-check-input" id="basic-checkbox" type="checkbox" checked="checked"><label class="form-check-label mb-0" for="basic-checkbox">Beni Hatırla</label></div>
										</div>
										<div class="col-auto"><a class="fs--1 fw-semi-bold" href="#">Şifremi Unuttum?</a></div>
								</div>

								<button class="btn btn-primary w-100 mb-3" name="admingiris" type="submit">Giriş Yap</button>

						</form>

								<div class="text-center text-danger"><?php if (isset($_GET['durum']) && $_GET['durum']=="no")  echo "Giriş Yapılmadı!!"; {
                 
                } ?></div>
								</div>
							</div>
						</div>
					</div>
				</main>
				<script src="assets/js/phoenix.js"></script>
			</body>

			</html>