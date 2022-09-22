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
          <li class="breadcrumb-item active">Kampaniyalar</li>
        </ol>

        

        <!-- Area Chart Example-->
     

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-fw fa-archive"></i>
            Kampaniya əlavə et</div>
          <div class="card-body">
            <form action="<?php echo base_url('admin/addcompany')?>" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="">Başlıq</label>
                <input type="text" name="basliq" class="form-control">
              </div>
               <div class="form-group">
                <label for="">Şəkil əlavə et</label>
                <input type="file" name="file" class="form-control">
              </div>
              <div class="form-group">
                <textarea name="content" class="ckeditor" id="" cols="30" rows="10"></textarea>
              </div>
              <div class="form-group">
                <button class="btn btn-dark">Əlavə et</button>
              </div>
            </form>
          </div>

          <div class="card-header">
            <i class="fas fa-fw fa-archive"></i>
            Kampaniyalar
          </div>
          <table class="table">
            <tr>
              <td width="90" align="center">Kampaniya ID</td>
              <td>Kampaniya başlıq</td>
              <td align="center">Servis</td>
            </tr>
            <?php
              foreach ($readcompany as $row) {
                
                if($row->activation > 0){ ?>

                  <tr>
                    <td align="center"><?=$row->komp_id?></td>
                    <td><?=$row->title?></td>
                    <td width="100">
                      <a href="<?php echo base_url('admin/close_c/'.$row->komp_id)?>" style="color:#999"><i class="fas fa-lock"></i></a>&nbsp;|
                      <a href="<?php echo base_url('admin/open_c/'.$row->komp_id)?>" style="color:green"><i class="fas fa-lock-open"></i></a>&nbsp;|
                      <a href="<?php echo base_url('admin/delete_c/'.$row->komp_id)?>" style="color:red"><i class="far fa-trash-alt"></i></a>
                    </td>
                  </tr>

              <?php  }else{ ?>

                  <tr>
                    <td align="center"><?=$row->komp_id?></td>
                    <td><?=$row->title?></td>
                    <td width="100">
                      <a href="<?php echo base_url('admin/close_c/'.$row->komp_id)?>" style="color:green"><i class="fas fa-lock"></i></a>&nbsp;|
                      <a href="<?php echo base_url('admin/open_c/'.$row->komp_id)?>" style="color:#999;"><i class="fas fa-lock-open"></i></a>&nbsp;|
                      <a href="<?php echo base_url('admin/delete_c/'.$row->komp_id)?>" style="color:red;"><i class="far fa-trash-alt"></i></a>
                    </td>
                  </tr>

               <?php }


               }
            ?>
          </table>


          <div class="card-footer small text-muted">Created Developer Company Baku</div>
        </div>

        

      </div>
      <!-- /.container-fluid -->

<?php $this->load->view('admin/footer')?>