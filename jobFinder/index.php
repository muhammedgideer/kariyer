<?php include("header.php") ?>


<hr>
<!-- Featured_job_start -->
        <section class="featured-job-area ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10"> <?php 
        $hakkimizdasor=$db->prepare("SELECT * from hakkimizda");
        $hakkimizdasor->execute();
        $hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
 ?>
         <!-- Support Company Start-->
         <div class="support-company-area support-padding fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="right-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2">
                            </div>
                            <div class="support-caption">
                                <?php echo $hakkimizdacek['hakkimizda_yazisi'] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


                        <?php 
                        $ilansor=$db->prepare("SELECT * from ilanlar where ilan_tur=:ilan_tur");
                        $ilansor->execute(array('ilan_tur' => $_GET['ilan_tur']));
                        $ilansay=$ilansor->rowCount();
                            while ($ilancek=$ilansor->fetch(PDO::FETCH_ASSOC) ) 
                              {?>



                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">

                                <?php $sirketsor=$db->prepare("SELECT * from sirketler where sirket_id=:id");
                                    $sirketsor->execute(
                                      array('id'=>$ilancek['ilan_sirketid']));
                                    $sirketcek=$sirketsor->fetch(PDO::FETCH_ASSOC); ?>


                                <div class="company-img">
                                    <a href="ilan-detay.php?ilan_id=<?php echo $ilancek['ilan_id'] ?>"><img src="<?php echo $sirketcek['sirket_resimyol'] ?>" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="ilan-detay.php?ilan_id=<?php echo $ilancek['ilan_id'] ?>"><h4><?php echo $ilancek['ilan_ad'] ?></h4></a>
                                    <ul>
                                        <li><?php echo $sirketcek['sirket_ad'] ?></li>
                                        <li><i class="fas fa-map-marker-alt"></i><?php echo $ilancek['ilan_sehir'] ?></li>
                                        <li><?php echo $ilancek['ilan_ucret'] ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="ilan-detay.php?ilan_id=<?php echo $ilancek['ilan_id'] ?>"><?php echo $ilancek['ilan_calisma_sekli'] ?></a>
                                <span><?php echo $ilancek['ilan_tarih'] ?></span>
                            </div>
                        </div>

                    <?php }


                    if($ilansay==0){?>

                    	<br><br>
                    	<hr>
                    	<h4 align="center">Herhangi Bir İlan Bulunamadı.</h4>
                    	<hr>
                    	<br>

                    <?php } ?>


                    </div>
                </div>
            </div>
        </section>

<?php include("footer.php") ?>