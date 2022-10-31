<?php 
//session bir sayfadaki bilgiyi alıp bir diğer sayfada kullanılmasını sağlar ve bunun için aşagıdaki iki sorguyu her iki sayfayada bulundurulması lazım.
ob_start();
session_start();
include'../netting/baglan.php'; 
include 'fonksiyon.php';

//belirli veriyi ayar tablosundan databaseden çekme
$ayarsor=$db->prepare("SELECT * from ayar where ayar_id=:id");
$ayarsor->execute(
  array('id'=>0));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

//kullanici tablosundan veri çekmek için yazılan sorgu
$uyesor=$db->prepare("SELECT * from uye where uye_mail=:mail");
$uyesor->execute(
  array('mail'=>$_SESSION['uye_mail']));
    //rowcount fonksiyonu kullanıcı sayısını sayar .
$say=$uyesor->rowCount();
$uyecek=$uyesor->fetch(PDO::FETCH_ASSOC);
//aşagıda yapılan işlem eğer kullanıcı yok ise sizi login sayfasına gönderir.linkleri yazıp örneğin index sayfasına gidiyorken bu işlem ile buna izin vermez ve login den giriş yapılarak o sayfalara yani kontrol paneline giriş yapılıp gidilir.
if($say==0)
{
  header("Location:login.php"); 
  exit;
}

?>

<!doctype html>
<html lang="tr-TR" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo $ayarcek['ayar_title']; ?></title>
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

    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <style>
      body {
        opacity: 0;
      }
    </style>
  </head>

  <body>
    <main class="main" id="top">
      <div class="container-fluid px-0">
        <nav class="navbar navbar-light navbar-vertical navbar-vibrant navbar-expand-lg">
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item"><a class="nav-link">
                    <div class="d-flex align-items-center"><span class="nav-link-icon text-light"><span data-feather="user"></span></span><span class="nav-link-text text-light"><?php echo strtoupper($uyecek['uye_ad']." ".$uyecek['uye_soyad']); ?></span></div>
                  </a></li>
                  <hr>
              

               
                
                 <li class="nav-item">
                  <p class="navbar-vertical-label">Sayfalar</p>

                  <a class="nav-link" href="uyeler.php" role="button" data-bs-toggle="" aria-expanded="false">
                   
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="user"></span></span><span class="nav-link-text">Üyeler</span></div>

                  </a>


                  <a class="nav-link" href="kategoriler.php" role="button" data-bs-toggle="" aria-expanded="false">
                   
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="user"></span></span><span class="nav-link-text">Kategoriler</span></div>

                  </a>

                  <a class="nav-link" href="sirketler.php" role="button" data-bs-toggle="" aria-expanded="false">
                   
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="user"></span></span><span class="nav-link-text">Şirketler</span></div>

                  </a>



                   <a class="nav-link" href="ilanlar.php?ilan_tur=0" role="button" data-bs-toggle="" aria-expanded="false">
                   
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="user"></span></span><span class="nav-link-text">İş İlanları</span></div>

                  </a>

                  <a class="nav-link" href="ilanlar.php?ilan_tur=1" role="button" data-bs-toggle="" aria-expanded="false">
                   
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="user"></span></span><span class="nav-link-text">Staj İlanları</span></div>

                  </a>

                   <a class="nav-link" href="hakkimizda.php" role="button" data-bs-toggle="" aria-expanded="false">
                   
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="user"></span></span><span class="nav-link-text">Hakkımızda</span></div>

                  </a>

                 
                </li>


                <li class="nav-item">
                  <p class="navbar-vertical-label">Ayarlar</p>

                  <a class="nav-link" href="genel-ayar.php" role="button" data-bs-toggle="" aria-expanded="false">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="settings"></span></span><span class="nav-link-text">Genel Ayarlar</span></div>
                  </a>
                 

                </li>
              </ul>
            </div>

            <div class="navbar-vertical-footer"><a class="btn btn-link border-0 fw-semi-bold d-flex ps-0" href="logout.php"><span class="navbar-vertical-footer-icon" data-feather="log-out"></span><span>Çıkış</span></a></div>
          </div>
        </nav>

        <nav class="navbar navbar-light navbar-top navbar-expand">
          <div class="navbar-logo"><button class="btn navbar-toggler navbar-toggler-humburger-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button> <a class="navbar-brand me-1 me-sm-3" href="index.php">
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center"><img src="../../<?php echo $ayarcek['ayar_logo']; ?>" alt="phoenix" width="85">
                    <hr>
                  <p class="logo-text ms-2 d-none d-sm-block"><?php echo $ayarcek['ayar_title']; ?></p>
                </div>
              </div>
            </a></div>

          <div class="collapse navbar-collapse"></div>
        </nav>

        