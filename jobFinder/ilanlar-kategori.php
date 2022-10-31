<?php include("header.php") ?>


<hr>
<!-- Featured_job_start -->
        <section class="featured-job-area ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">


                        <?php 
                        $ilansor=$db->prepare("SELECT * from ilanlar where ilan_kategoriid=:ilan_kategoriid");
                        $ilansor->execute(array('ilan_kategoriid' => $_GET['ilan_kategoriid']));
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