<?php include("header.php"); ?>

        <div class="content">
        
          <h2 class="text-bold text-1100 mb-5">Kategoriler</h2>
          <div id="members" data-list='{"valueNames":["customer","email","mobile_number","city","last_active","joined"],"page":10,"pagination":true}'>
            <div class="row align-items-center justify-content-between g-3 mb-3">
              <div class="col col-xl-4">

                
              </div>
              <div class="col-auto">
                <div class="d-flex align-items-center"><button class="btn btn-link text-900 me-1"><span class="fas fa-cloud-download-alt fs--1 me-2"></span>Dışa Aktar</button><a href="kategori-ekle.php" class="btn btn-primary"><span class="fas fa-plus me-2"></span>Kategori Ekle</a></div>
              </div>
            </div>
            <div class="mx-n4 mx-lg-n6 px-4 px-lg-6 bg-white border-y border-300 mt-2 position-relative top-1">
              <div class="table-responsive scrollbar mx-n1 px-1">
                <table class="table table-sm fs--1 mb-0">
                  <thead>
                    <tr>
                      
                      <th class="sort align-middle" scope="col" data-sort="customer" style="width:15%;">AD</th>
                      
                     
                     

                      <th class="sort align-middle pe-3" scope="col" data-sort="mobile_number" style="width:15%">DÜZENLE</th>

                      <th class="sort align-middle pe-3" scope="col" data-sort="mobile_number" style="width:20%">SİL</th>
                                            
                      
                      
                    </tr>
                  </thead>
                  <tbody class="list" id="table-latest-review-body">

                    <?php 
                    $kategorisor=$db->prepare("SELECT * from kategoriler");
                    $kategorisor->execute();
                        while ($kategoricek=$kategorisor->fetch(PDO::FETCH_ASSOC) ) 
                          {?>
                         

                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                      
                      
                     
                      <td class="customer align-middle white-space-nowrap"><a class="d-flex align-items-center" href="#!">
                          
                          <h6 class="mb-0 ms-3 text-900 fw-semi-bold"><?php echo $kategoricek['kategori_ad']?></h6>
                        </a></td>

                      
                      <td class="mobile_number align-middle white-space-nowrap">
                          <a href="kategori-duzenle.php?kategori_id=<?php echo $kategoricek['kategori_id'] ?>" class="btn btn-warning"><span class="fas fa-edit me-2"></span>DÜZENLE</a>
                      </td>
                      
                      <td class="city align-middle white-space-nowrap text-900">
                        <a href="../netting/islem.php?kategori_id=<?php echo $kategoricek['kategori_id'] ?>&kategorisil=ok" class="btn btn-danger"><span class="fas fa-minus me-2"></span>SİL</a>
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