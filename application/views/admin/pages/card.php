<?php $this->load->view('admin/header')?>
<?php
foreach ($shopcard as $shop){}
?>

  <div id="wrapper">

    <!-- Sidebar -->
    <div class="position">
      <?php $this->load->view('admin/leftBar')?>
    </div>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Ana səhifə</a>
          </li>
          <li class="breadcrumb-item active">Səbət</li>
        </ol>

        

        <!-- Area Chart Example-->
     

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-shopping-cart"></i>
            Yeni Sifarişlər</div>
          <div class="card-body">
            <div class="form-group">
              <form action="" method="post">
                <select name="cardVal" class="form-control" style="width:350px;" id="src_card">
                  <option value="0">İstifadəçi adına görə axtar</option>
                  <?php
                    foreach ($user as $us){ ?>
                    
                      <option value="<?=$us->username?>"><?=$us->username?></option>

                    <?php }
                    ?>
                </select>
              </form>
            </div>


            <div class="table-responsive">
              <div id="result_card">
                
              </div>
              <table class="table table-bordered" id="test"  width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Telefon</th>
                    <th>Ad/Soyad</th>
                    <th>Ünvan</th>
                    <th>Qeydlər</th>
                    <th>Email</th>
                    <th>Data</th>
                    <th>Ödəmə</th>
                    <th>Təsdiq/İmtina</th>
                    <th>Silmə</th>
                  </tr>
                </thead>
                <tbody>
                  
                    <?php
                      foreach ($cardlist as $row) {
                        error_reporting(0);
                        if($color=='#ddd'){
                          $color = '#fff';
                        } else{
                          $color ="#ddd";
                        }

                        if($row->sessionEmail==""){

                          if($row->activation > 0){ ?>

                              <tr id="open" style="font-size:12px;background:<?php echo $color; ?>" onclick="view('<?=$row->arxiv_id?>');">
                                <td><?= $row->phone ?></td>
                                <td><?= $row->username ?></td>
                                <td><p><?= $row->adress ?></p></td>
                                <td><p><?= $row->comments ?></p></td>
                                <td><i>Qyediyyatsız</i></td>
                                <td><?= $row->data ?></td>
                                <td><?=$shop->pay_select?></td>
                                <td><?= $row->position ?></td>
                                <td><a href="<?=base_url('admin/delete_card?dlt='.$row->arxiv_id)?>" class="btn btn-danger" style="color:#fff"><i class="fa-solid fa-trash-can"></i></a></td>
                              </tr>
                              <tr>
                                <td colspan="8"  style="padding:0">
                                  <div class="detail" id="open-detail<?=$row->arxiv_id?>" data-id="<?=$row->arxiv_id?>">
                                      <table class="table">
                                        <tr>
                                          <td align="center">Məhsulun şəkili</td>
                                          <td align="center">Məhsul adı</td>
                                          <td align="center">Qiymət</td>
                                          <td align="center">Miqdar</td>
                                        </tr>
                                    <?php
                                      foreach ($shopcard as $shop) {
                                        if($shop->sifaris_kodu==$row->sifaris_kodu){ 

                                           ?>
                                            <tr>
                                                <td align="center" width="200"><img src="<?php echo base_url('upload/'.$shop->pro_image)?>" width="150" alt=""></td>
                                                <td align="center">
                                                    <?php
                                                      if($shop->lenstype=="rengli-linzalar"){ ?>

                                                        <span><b><?=$shop->pro_name?></b></span>
                                                        <span>Optik gücü: <?=$shop->sph?></span>
                                                        <span>Rəngi: <?=$shop->color?></span>

                                                    <?php  }elseif($row->lenstype=="astiqmat-linzalar"){ ?>

                                                        <span><b><?=$shop->pro_name?></b></span>
                                                        <span>Optik gücü: <?=$shop->sph?></span>
                                                        <span>Silindir: <?=$shop->cyl?> | Ax - <?=$shop->ax?></span>

                                                    <?php  }else{ ?>

                                                        <span><b><?=$shop->pro_name?></b></span>
                                                        <span>Optik gücü: <?=$shop->sph?></span>

                                                    <?php  }
                                                    ?>
                                                </td>
                                                <td align="center">
                                                  <span><?=$shop->price?> Azn</span>
                                                  <span>Çatdırılma 2.00 Azn</span>
                                                  <span>Cəmi: <?=$shop->price+2; ?> Azn</span>
                                                </td>
                                                <td align="center"><?=$shop->quantity?></td>
                                              </tr>

                                      <?php 
                                              
                                            
                                          
                                        }
                                      }
                                    ?>
                                      </table>
                                    </div>
                                </td>
                              </tr>

                        <?php  }else{ ?>

                              <tr id="open" style="font-size:12px; background:#ff00003b" onclick="view('<?=$row->arxiv_id?>');">
                                
                                <td><?= $row->phone ?></td>
                                <td><?= $row->namesurname ?></td>
                                <td><p><?= $row->adress ?></p></td>
                                <td><p><?= $row->comments ?></p></td>
                                <td><i>Qyediyyatsız</i></td>
                                <td><?= $row->data ?></td>
                                <td><?=$shop->pay_select?></td>
                                <td>
                                  <a href="<?php echo base_url('admin/approv/'.$row->sifaris_kodu)?>" id="a_link"><i class="fas fa-check"></i> Təsdiqlə</a>
                                  <a href="<?php echo base_url('admin/ignore/'.$row->sifaris_kodu)?>" id="a_link"><i class="fas fa-eraser"></i> Ləğv et</a>
                                </td>
                                <td><a href="<?=base_url('admin/delete_card?dlt='.$row->arxiv_id)?>" class="btn btn-danger" style="color:#fff"><i class="fa-solid fa-trash-can"></i></a></td>
                              </tr>
                              <tr>
                                <td colspan="8"  style="padding:0">
                                  <div class="detail" id="open-detail<?=$row->arxiv_id?>" data-id="<?=$row->arxiv_id?>">
                                      <table class="table">
                                        <tr>
                                          <td align="center">Məhsulun şəkili</td>
                                          <td align="center">Məhsul adı</td>
                                          <td align="center">Qiymət</td>
                                          <td align="center">Miqdar</td>
                                        </tr>
                                    <?php
                                      foreach ($shopcard as $shop) {
                                        if($shop->sifaris_kodu==$row->sifaris_kodu){ 

                                           ?>
                                            <tr>
                                                <td align="center" width="200"><img src="<?php echo base_url('upload/'.$shop->pro_image)?>" width="150" alt=""></td>
                                                <td align="center">
                                                    <?php
                                                      if($shop->lenstype=="rengli-linzalar"){ ?>

                                                        <span><b><?=$shop->pro_name?></b></span>
                                                        <span>Optik gücü: <?=$shop->sph?></span>
                                                        <span>Rəngi: <?=$shop->color?></span>

                                                    <?php  }elseif($row->lenstype=="astiqmat-linzalar"){ ?>

                                                        <span><b><?=$shop->pro_name?></b></span>
                                                        <span>Optik gücü: <?=$shop->sph?></span>
                                                        <span>Silindir: <?=$shop->cyl?> | Ax - <?=$shop->ax?></span>

                                                    <?php  }else{ ?>

                                                        <span><b><?=$shop->pro_name?></b></span>
                                                        <span>Optik gücü: <?=$shop->sph?></span>

                                                    <?php  }
                                                    ?>
                                                </td>
                                                <td align="center">
                                                  <span><?=$shop->price?> Azn</span>
                                                  <span>Çatdırılma 2.00 Azn</span>
                                                  <span>Cəmi: <?=$shop->price+2; ?> Azn</span>
                                                </td>
                                                <td align="center"><?=$shop->quantity?></td>
                                              </tr>

                                      <?php 
                                              
                                            
                                          
                                        }
                                      }
                                    ?>
                                      </table>
                                    </div>
                                </td>
                              </tr>

                        <?php  }








                        }else{

                            if($row->activation > 0){ ?>

                              <tr id="open"  style="font-size:12px;background:<?php echo $color; ?>" onclick="view('<?=$row->arxiv_id?>');">
                                <td><?= $row->phone ?></td>
                                <td><?= $row->namesurname ?></td>
                                <td><p><?= $row->adress ?></p></td>
                                <td><p><?= $row->comments ?></p></td>
                                <td><i><?= $row->sessionEmail ?></i></td>
                                <td><?= $row->data ?></td>
                                <td><?=$shop->pay_select?></td>
                                <td><?= $row->position ?> </td>
                                <td><a href="<?=base_url('admin/delete_card?dlt='.$row->arxiv_id)?>" class="btn btn-danger" style="color:#fff"><i class="fa-solid fa-trash-can"></i></a></td>
                              </tr>
                              <tr>
                                <td colspan="8"  style="padding:0">
                                  <div class="detail" id="open-detail<?=$row->arxiv_id?>" data-id="<?=$row->arxiv_id?>">
                                      <table class="table">
                                        <tr>
                                          <td align="center">Məhsulun şəkili</td>
                                          <td align="center">Məhsul adı</td>
                                          <td align="center">Qiymət</td>
                                          <td align="center">Miqdar</td>
                                        </tr>
                                    <?php
                                      foreach ($shopcard as $shop) {
                                        if($shop->sifaris_kodu==$row->sifaris_kodu){ 

                                           ?>
                                            <tr>
                                                <td align="center" width="200"><img src="<?php echo base_url('upload/'.$shop->pro_image)?>" width="150" alt=""></td>
                                                <td align="center">
                                                    <?php
                                                      if($shop->lenstype=="rengli-linzalar"){ ?>

                                                        <span><b><?=$shop->pro_name?></b></span>
                                                        <span>Optik gücü: <?=$shop->sph?></span>
                                                        <span>Rəngi: <?=$shop->color?></span>

                                                    <?php  }elseif($row->lenstype=="astiqmat-linzalar"){ ?>

                                                        <span><b><?=$shop->pro_name?></b></span>
                                                        <span>Optik gücü: <?=$shop->sph?></span>
                                                        <span>Silindir: <?=$shop->cyl?> | Ax - <?=$shop->ax?></span>

                                                    <?php  }else{ ?>

                                                        <span><b><?=$shop->pro_name?></b></span>
                                                        <span>Optik gücü: <?=$shop->sph?></span>

                                                    <?php  }
                                                    ?>
                                                </td>
                                                <td align="center">
                                                  <span><?=$shop->price?> Azn</span>
                                                  <span>Çatdırılma 2.00 Azn</span>
                                                  <span>Cəmi: <?=$shop->price+2; ?> Azn</span>
                                                </td>
                                                <td align="center"><?=$shop->quantity?></td>
                                              </tr>

                                      <?php 
                                              
                                            
                                          
                                        }
                                      }
                                    ?>
                                      </table>
                                    </div>
                                </td>
                              </tr>

                          <?php  }else{ ?>

                            <tr id="open" data-add="<?php echo $row->arxiv_id?>"  style="font-size:12px; background:#ff00003b" onclick="view('<?=$row->arxiv_id?>');">
                                <td><?= $row->phone ?></td>
                                <td><?= $row->namesurname ?></td>
                                <td><p><?= $row->adress ?></p></td>
                                <td><p><?= $row->comments ?></p></td>
                                <td><i><?= $row->sessionEmail ?></i></td>
                                <td><?= $row->data ?></td>
                                <td><?= $shop->pay_select ?></td>
                                <td>
                                  <a href="<?php echo base_url('admin/approv/'.$row->sifaris_kodu)?>" id="a_link"><i class="fas fa-check"></i> Təsdiqlə</a>
                                  <a href="<?php echo base_url('admin/ignore/'.$row->sifaris_kodu)?>" id="a_link"><i class="fas fa-eraser"></i> Ləğv et</a>
                                </td>
                                <td><a href="<?=base_url('admin/delete_card?dlt='.$row->arxiv_id)?>" class="btn btn-danger" style="color:#fff"><i class="fa-solid fa-trash-can"></i></a></td>
                              </tr>
                              <tr>
                                <td colspan="8"  style="padding:0">
                                  <div class="detail" id="open-detail<?=$row->arxiv_id?>" data-id="<?=$row->arxiv_id?>">
                                      <table class="table">
                                        <tr>
                                          <td align="center">Məhsulun şəkili</td>
                                          <td align="center">Məhsul adı</td>
                                          <td align="center">Qiymət</td>
                                          <td align="center">Miqdar</td>
                                        </tr>
                                    <?php
                                      foreach ($shopcard as $shop) {
                                        if($shop->sifaris_kodu==$row->sifaris_kodu){ 

                                           ?>
                                            <tr>
                                                <td align="center" width="200"><img src="<?php echo base_url('upload/'.$shop->pro_image)?>" width="150" alt=""></td>
                                                <td align="center">
                                                    <?php
                                                      if($shop->lenstype=="rengli-linzalar"){ ?>

                                                        <span><b><?=$shop->pro_name?></b></span>
                                                        <span>Optik gücü: <?=$shop->sph?></span>
                                                        <span>Rəngi: <?=$shop->color?></span>

                                                    <?php  }elseif($row->lenstype=="astiqmat-linzalar"){ ?>

                                                        <span><b><?=$shop->pro_name?></b></span>
                                                        <span>Optik gücü: <?=$shop->sph?></span>
                                                        <span>Silindir: <?=$shop->cyl?> | Ax - <?=$shop->ax?></span>

                                                    <?php  }else{ ?>

                                                        <span><b><?=$shop->pro_name?></b></span>
                                                        <span>Optik gücü: <?=$shop->sph?></span>

                                                    <?php  }
                                                    ?>
                                                </td>
                                                <td align="center">
                                                  <span><?=$shop->price?> Azn</span>
                                                  <span>Çatdırılma 2.00 Azn</span>
                                                  <span>Cəmi: <?=$shop->price+2; ?> Azn</span>
                                                </td>
                                                <td align="center"><?=$shop->quantity?></td>
                                              </tr>

                                      <?php 
                                              
                                            
                                          
                                        }
                                      }
                                    ?>
                                      </table>
                                    </div>
                                </td>
                              </tr>

                          <?php  }
                        }

                        
                     }
                    ?>
                  
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Created Developer Company Baku</div>
        </div>

      </div>
      <!-- /.container-fluid -->

<?php $this->load->view('admin/footer')?>