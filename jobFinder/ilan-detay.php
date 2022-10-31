<?php include("header.php");

$ilansor=$db->prepare("SELECT * from ilanlar where ilan_id=:ilan_id");
$ilansor->execute(array('ilan_id' => $_GET['ilan_id']));
$ilancek=$ilansor->fetch(PDO::FETCH_ASSOC);
                          

 $sirketsor=$db->prepare("SELECT * from sirketler where sirket_id=:id");
 $sirketsor->execute(
 array('id'=>$ilancek['ilan_sirketid']));
 $sirketcek=$sirketsor->fetch(PDO::FETCH_ASSOC); 

 $kategorisor=$db->prepare("SELECT * from kategoriler where kategori_id=:id");
 $kategorisor->execute(
 array('id'=>$ilancek['ilan_kategoriid']));
 $kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC); 


      								?>
  <hr>
    <main>

      
        <!-- job post company Start -->
        <div class="job-post-company">
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Left Content -->
                    <div class="col-xl-7 col-lg-8">
                        <!-- job single -->
                        <div class="single-job-items mb-50">
                            <div class="job-items">
                                <div class="company-img company-img-details">
                                    <a href="#"><img src="<?php echo $sirketcek['sirket_resimyol']; ?>" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="#">
                                        <h4><?php echo $ilancek['ilan_ad'] ?></h4>
                                    </a>
                                    <ul>
                                        <li><?php echo $sirketcek['sirket_ad'] ?></li>
                                        <li><i class="fas fa-map-marker-alt"></i><?php echo $ilancek['ilan_sehir'] ?></li>
                                        <li><?php echo $ilancek['ilan_ucret'] ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                          <!-- job single End -->
                       
                        <div class="job-post-details">
                            <div class="post-details1 mb-50">
                                <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>İş Açıklaması</h4>
                                </div>
                                <?php echo $ilancek['ilan_aciklama'] ?>
                            </div>
                            
                            
                        </div>

                    </div>
                    <!-- Right Content -->
                    <div class="col-xl-4 col-lg-4">
                        <div class="post-details3  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>İlan Detayı</h4>
                           </div>
                          <ul>
                              <li>İlan Tarihi : <span><?php echo $ilancek['ilan_tarih'] ?></span></li>
                              <li>Konum : <span><?php echo $ilancek['ilan_sehir'] ?></span></li>
                              <li>Çalışma Şekli : <span><?php echo $ilancek['ilan_calisma_sekli'] ?></span></li>
                              <li>Ücret :  <span><?php echo $ilancek['ilan_ucret'] ?></span></li>
                              <li>Pozisyon :  <span><?php echo $ilancek['ilan_pozisyon'] ?></span></li>
                              <li>Kategori :  <span><?php echo $kategoricek['kategori_ad'] ?></span></li>
                              <li>Tür :  <span><?php if($ilancek['ilan_tur']==0){
                              	echo "İş İlanı";
                              }else{
                              	echo "Staj İlanı";
                              }  ?></span></li>
                          </ul>
                         <div class="apply-btn2">
                            
                             <?php if (!isset($_SESSION['useruye_mail'])) {?> 
                                <a href="giris.php" class="btn">Giriş Yap Ve Başvur</a>
                             <?php }else{?>

                            <a href="basvur.php?ilan_id=<?php echo $ilancek['ilan_id'] ?>" class="btn">Şimdi Başvur</a>
                        <?php } ?>


                            <span>
                                <?php 

               if (isset($_GET['durum']) && $_GET['durum']=="ok") {?>

                <b style="color:green;">İşlem Başarılı...</b>

              <?php } elseif (isset($_GET['durum']) && $_GET['durum']=="no") {?>

                <b style="color:red;">İşlem Başarısız...</b>

              <?php }

              ?>
                            </span>
                         </div>
                       </div>
                        <div class="post-details4  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Şirket Hakkında</h4>
                           </div>
                             <div  class="company-img company-img-details">
                                    <a href="#"><img src="<?php echo $sirketcek['sirket_resimyol']; ?>" alt=""></a>
                                    <span><?php echo $sirketcek['sirket_ad'] ?></span>
                                </div>
                              
                              <p><?php echo $sirketcek['sirket_aciklama'] ?></p>
                            <ul>
                                <li>Ad: <span><?php echo $sirketcek['sirket_ad'] ?> </span></li>
                                <li>Web : <span> <?php echo $sirketcek['sirket_website'] ?></span></li>
                                <li>Email: <span><?php echo $sirketcek['sirket_mail'] ?></span></li>
                            </ul>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- job post company End -->

    </main>
    
<?php include("footer.php") ?>