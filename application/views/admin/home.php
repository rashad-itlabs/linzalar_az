<?php $this->load->view('admin/header')?>

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
          <li class="breadcrumb-item active">Baxış</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5" ><b id="rey_comment"></b> Yeni Rəy</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('pages/comment')?>">
                <span class="float-left">Hamısını gör</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5"><b id="call_me"></b> istək zəng</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('pages/call_form')?>">
                <span class="float-left">Hamısını gör</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5"><b id="card"></b> Yeni alış</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('pages/card')?>">
                <span class="float-left">Hamısını gör</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-danger o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-users"></i>
                </div>
                <div class="mr-5"><b><?php echo $usercount; ?></b> İstifadəçi</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="<?php echo base_url('pages/users')?>">
                <span class="float-left">Hamısını gör</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        <!-- Area Chart Example-->
     

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-list-ul"></i>
            Məhsullar
            <span><b><?php echo $count?></b> məhsul var</span>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered"  width="100%" cellspacing="0">
                
                <?php

                  foreach ($router as $user) {
                    if($user->position=="dcbadmin"){ ?>
                      <thead>
                        <tr>
                          <th width="50" >Məhsul ID</th>
                          <th>Məhsul adı</th>
                          <th>Məhsul şəkli</th>
                          <th>İstehsalçı</th>
                          <th>Catqoriyası</th>
                          <th>Qiyməti</th>
                          <th>Servis</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach ($all as $row) { ?>

                            <tr>
                              <td align="center"><?=$row->pro_id?></td>
                              <td><?=$row->pro_name?></td>
                              <td align="center"><img width="50" src="<?php echo base_url('upload/'.$row->pro_image)?>" alt=""></td>
                              <td><?=$row->brand_name?></td>
                              <td><?=$row->category?></td>
                              <td><?=$row->pro_price?></td>
                              <td align="center">
                                <a href="<?=base_url('admin/editProduct?edit='.$row->pro_id)?>" id="settings"><i class="fas fa-tools"></i></a>
                              </td>
                            </tr>
                            
                      <?php    }
                        ?>
                      </tbody>

                  <?php  }else{ ?>

                    <thead>
                      <tr>
                        <th width="50" >Məhsul ID</th>
                        <th>Məhsul adı</th>
                        <th>Məhsul şəkli</th>
                        <th>İstehsalçı</th>
                        <th>Catqoriyası</th>
                        <th>Qiyməti</th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                        foreach ($all as $row) { ?>

                          <tr>
                            <td align="center"><?=$row->pro_id?></td>
                            <td><?=$row->pro_name?></td>
                            <td align="center"><img width="50" src="<?php echo base_url('upload/'.$row->pro_image)?>" alt=""></td>
                            <td><?=$row->brand_name?></td>
                            <td><?=$row->category?></td>
                            <td><?=$row->pro_price?></td>
                          </tr>
                          
                    <?php    }
                      ?>
                    </tbody>

                  <?php  }

                  }

                ?>
                
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Created Developer Company Baku</div>
        </div>

      </div>
      <!-- /.container-fluid -->

<?php $this->load->view('admin/footer')?>