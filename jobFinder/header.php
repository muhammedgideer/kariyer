<?php 
ob_start();
session_start();
include 'nedmin/netting/baglan.php';
include 'nedmin/production/fonksiyon.php';

$ayarsor=$db->prepare("SELECT * from ayar where ayar_id=:id");
$ayarsor->execute(
  array('id' =>0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

if(isset($_SESSION['useruye_mail'])){


$uyesor=$db->prepare("SELECT * from uye where uye_mail=:mail");
$uyesor->execute(
  array('mail' =>$_SESSION['useruye_mail']));
$uyecek=$uyesor->fetch(PDO::FETCH_ASSOC);

}
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Kariyer</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	
	<!-- CSS here -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/slicknav.css">
		<link rel="stylesheet" href="assets/css/price_rangs.css">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/magnific-popup.css">
		<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
		<link rel="stylesheet" href="assets/css/themify-icons.css">
		<link rel="stylesheet" href="assets/css/slick.css">
		<link rel="stylesheet" href="assets/css/nice-select.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
	
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.php?ilan_tur=0"><h1>Kariyer</h1></a>
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="index.php?ilan_tur=0">İş İlanları</a></li>
                                            <li><a href="index.php?ilan_tur=1">Staj İlanları</a></li>
                                            <li><a href="kategoriler.php">Kategoriler</a></li>

                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->

                                <?php if (!isset($_SESSION['useruye_mail'])) {?> 

                                <div class="header-btn d-none f-right d-lg-block">
                                    <a href="kaydol.php" class="btn head-btn1">Kayıt Ol</a>
                                    <a href="giris.php" class="btn head-btn2">Giriş Yap</a>
                                </div>

                   <?php }else { ?>
                                <div class="header-btn d-none f-right d-lg-block">
                                    <a href="hesap.php" class="btn head-btn1"><?php echo $uyecek['uye_ad'] ?></a>
                                    <a href="logout.php" class="btn head-btn2">Çıkış Yap</a>
                                </div>
                
                      
                  <?php } ?>
                               
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>