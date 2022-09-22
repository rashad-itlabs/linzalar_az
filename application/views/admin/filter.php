<?php
foreach ($shopcard as $shop){
}
?>
<table class="table table-bordered" id="tab_filter" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Sifariş kodu</th>
                    <th>Telefon</th>
                    <th>Ad/Soyad</th>
                    <th>Ünvan</th>
                    <th>Email</th>
                    <th>Data</th>
                    <th>Ödəmə</th>
                    <th>Təsdiq/İmtina</th>
                  </tr>
                </thead>
                <tbody>
                  
                    <?php
                      foreach ($rows as $row) {
                        error_reporting(0);
                        if($color=='#ddd'){
                          $color = '#fff';
                        } else{
                          $color ="#ddd";
                        }

                        if($row->sessionEmail==""){

                          if($row->activation > 0){ ?>

                              <tr id="open" style="font-size:12px;background:<?php echo $color; ?>" onclick="view('<?=$row->arxiv_id?>');">
                                <td><?= $row->sifaris_kodu ?></td>
                                <td><?= $row->phone ?></td>
                                <td><?= $row->username ?></td>
                                <td><p><?= $row->adress ?></p></td>
                                <td><i>Qyediyyatsız</i></td>
                                <td><?= $row->data ?></td>
                                <td><?=$shop->pay_select?></td>
                                <td><?= $row->position ?></td>
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
                                <td><?= $row->sifaris_kodu ?></td>
                                <td><?= $row->phone ?></td>
                                <td><?= $row->namesurname ?></td>
                                <td><p><?= $row->adress ?></p></td>
                                <td><i>Qyediyyatsız</i></td>
                                <td><?= $row->data ?></td>
                                <td><?=$shop->pay_select?></td>
                                <td>
                                  <a href="<?php echo base_url('admin/approv/'.$row->sifaris_kodu)?>" id="a_link"><i class="fas fa-check"></i> Təsdiqlə</a>
                                  <a href="<?php echo base_url('admin/ignore/'.$row->sifaris_kodu)?>" id="a_link"><i class="fas fa-eraser"></i> Ləğv et</a>
                                </td>
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
                                <td><?= $row->sifaris_kodu ?></td>
                                <td><?= $row->phone ?></td>
                                <td><?= $row->namesurname ?></td>
                                <td><p><?= $row->adress ?></p></td>
                                <td><i><?= $row->sessionEmail ?></i></td>
                                <td><?= $row->data ?></td>
                                <td><?=$shop->pay_select?></td>
                                <td><?= $row->position ?> </td>
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
                                <td><?= $row->sifaris_kodu ?></td>
                                <td><?= $row->phone ?></td>
                                <td><?= $row->namesurname ?></td>
                                <td><p><?= $row->adress ?></p></td>
                                <td><i><?= $row->sessionEmail ?></i></td>
                                <td><?= $row->data ?></td>
                                <td><?= $shop->pay_select ?></td>
                                <td>
                                  <a href="<?php echo base_url('admin/approv/'.$row->sifaris_kodu)?>" id="a_link"><i class="fas fa-check"></i> Təsdiqlə</a>
                                  <a href="<?php echo base_url('admin/ignore/'.$row->sifaris_kodu)?>" id="a_link"><i class="fas fa-eraser"></i> Ləğv et</a>
                                </td>
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