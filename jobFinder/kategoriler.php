<?php include("header.php"); ?>

<hr>
<!-- Our Services Start -->
        <div class="our-services ">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>TÜM KATEGORİLER</span>
                            <h2>En İyi Kategorilere Göz Atın</h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-contnet-center">
                    <?php
                     $kategorisor=$db->prepare("SELECT * from kategoriler limit 8");
                    $kategorisor->execute(array());
                        while ($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC) ) 
                          {?> 

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="services-cap">
                               <h5><a href="ilanlar-kategori.php?ilan_kategoriid=<?php echo $kategoricek['kategori_id']; ?>"><?php echo $kategoricek['kategori_ad']; ?></a></h5>
                            </div>
                        </div>
                    </div>

                <?php } ?>


                </div>
            </div>
        </div>
        <!-- Our Services End -->

<?php include("footer.php"); ?>


