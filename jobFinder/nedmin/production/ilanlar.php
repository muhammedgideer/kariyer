<?php include("header.php"); ?>

        <div class="content">
        
          <h2 class="text-bold text-1100 mb-5"><?php if($_GET['ilan_tur']==0)
          {echo "İŞ İLANLARI";}
          else if($_GET['ilan_tur']==1){echo "STAJ İLANLARI";} ?></h2>
          <div id="members">
            <div class="row align-items-center justify-content-between g-3 mb-3">
              <div class="col col-xl-4">

                
              </div>
              <div class="col-auto">
                <div class="d-flex align-items-center"><button class="btn btn-link text-900 me-1"><span class="fas fa-cloud-download-alt fs--1 me-2"></span>Dışa Aktar</button><a href="ilan-ekle.php" class="btn btn-primary"><span class="fas fa-plus me-2"></span>İlan Ekle</a></div>
              </div>
            </div>
            <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 bg-white border-y border-300 mt-2 position-relative top-1">
              <div class="table-responsive scrollbar mx-n1 px-1">
                <table class="table table-sm fs--1 mb-0">
                  <thead>
                    <tr>
                      
                      <th class="sort align-middle" scope="col" data-sort="customer" style="width:5%;">AD</th>
                      
                      <th class="sort align-middle" scope="col" data-sort="email" style="width:30%;">AÇIKLAMA</th>

                      <th class="sort align-middle" scope="col" data-sort="customer" style="width:15%;">ŞEHİR</th>
                      
                      <th class="sort align-middle" scope="col" data-sort="email" style="width:5%;">TARİH</th>

                      <th class="sort align-middle" scope="col" data-sort="customer" style="width:5%;">ÇALIŞMA ŞEKLİ</th>
                      
                      <th class="sort align-middle" scope="col" data-sort="email" style="width:5%;">POZİSYON</th>

                      <th class="sort align-middle" scope="col" data-sort="customer" style="width:15%;">KATEGORİ</th>
                      
                      <th class="sort align-middle" scope="col" data-sort="email" style="width:5%;">ÜCRET</th>
                      <th class="sort align-middle" scope="col" data-sort="customer" style="width:5%;">ŞİRKET</th>
                      
                     
                     

                      <th class="sort align-middle pe-3" scope="col" data-sort="mobile_number" style="width:5%">DÜZENLE</th>

                      <th class="sort align-middle pe-3" scope="col" data-sort="mobile_number" style="width:5%">SİL</th>
                                            
                      
                      
                    </tr>
                  </thead>
                  <tbody class="list" id="table-latest-review-body">

                    <?php 
                    $ilansor=$db->prepare("SELECT * from ilanlar where ilan_tur=:ilan_tur");
                    $ilansor->execute(array('ilan_tur' => $_GET['ilan_tur']));
                        while ($ilancek=$ilansor->fetch(PDO::FETCH_ASSOC) ) 
                          {?>
                         

                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      
                      
                     
                      <td class="customer align-middle white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                          
                          <h6 class="mb-0 ms-3 text-900 fw-semi-bold"><?php echo $ilancek['ilan_ad']?></h6>
                        </a></td>
                     
                      <td class="email align-middle "><a class="fw-semi-bold text-1100" ><?php echo $ilancek['ilan_aciklama'] ?></a></td>

                       <td class="email align-middle white-space-nowrap"><a class="fw-semi-bold text-1100" ><?php echo $ilancek['ilan_sehir'] ?></a></td>

                       <td class="email align-middle white-space-nowrap"><a class="fw-semi-bold text-1100" ><?php echo $ilancek['ilan_tarih'] ?></a></td>

                       <td class="email align-middle white-space-nowrap"><a class="fw-semi-bold text-1100" ><?php echo $ilancek['ilan_calisma_sekli'] ?></a></td> 

                       <td class="email align-middle white-space-nowrap"><a class="fw-semi-bold text-1100" ><?php echo $ilancek['ilan_pozisyon'] ?></a></td>

                       <?php $kategorisor=$db->prepare("SELECT * from kategoriler where kategori_id=:id");
								$kategorisor->execute(
								  array('id'=>$ilancek['ilan_kategoriid']));
								$kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC); ?>
                      
                      <td class="email align-middle white-space-nowrap"><a class="fw-semi-bold text-1100" ><?php echo $kategoricek['kategori_ad'] ?></a></td>

                      <td class="email align-middle white-space-nowrap"><a class="fw-semi-bold text-1100" ><?php echo $ilancek['ilan_ucret'] ?></a></td>

                      <?php $sirketsor=$db->prepare("SELECT * from sirketler where sirket_id=:id");
      								$sirketsor->execute(
      								  array('id'=>$ilancek['ilan_sirketid']));
      								$sirketcek=$sirketsor->fetch(PDO::FETCH_ASSOC); ?>



                      <td class="email align-middle white-space-nowrap"><a class="fw-semi-bold text-1100" ><?php echo $sirketcek['sirket_ad'] ?></a></td>

                      <td class="mobile_number align-middle white-space-nowrap">
                          <a href="ilan-duzenle.php?ilan_id=<?php echo $ilancek['ilan_id'] ?>" class="btn btn-warning"><span class="fas fa-edit me-2"></span>DÜZENLE</a>
                      </td>
                      
                      <td class="city align-middle white-space-nowrap text-900">
                        <a href="../netting/islem.php?ilan_id=<?php echo $ilancek['ilan_id'] ?>&ilansil=ok&ilan_tur=<?php echo $_GET['ilan_tur']; ?>" class="btn btn-danger"><span class="fas fa-minus me-2"></span>SİL</a>
                      </td>
                      
                     
                      
                      

                    </tr>

                     <?php } ?>
                    
                  </tbody>
                </table>
              </div>
              <div class="row align-items-center justify-content-between py-2 pe-0 fs--1">
                <div class="col-auto d-flex">
                  <p class="mb-0 d-none d-sm-block me-3 fw-semi-bold text-900" data-list-info></p><a class="fw-semi-bold" href="#!" data-list-view="*">View all<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a><a class="fw-semi-bold d-none" href="#!" data-list-view="less">View Less<span class="fas fa-angle-right ms-1" data-fa-transform="down-1"></span></a>
                </div>
                <div class="col-auto d-flex"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                  <ul class="mb-0 pagination"></ul><button class="page-link" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                </div>
              </div>
            </div>
          </div>
         <?php echo include("footer.php"); ?>