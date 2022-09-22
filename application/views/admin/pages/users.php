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
          <li class="breadcrumb-item active">Yeni İstifadəçilər</li>
        </ol>

        

        <!-- Area Chart Example-->
     

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-fw fa-users"></i>
            Yeni İstifadəçilər</div>
          <div class="card-body">
            <div class="form-group">
              <input type="text" class="form-control" name="search" id="search" placeholder="istifadəçi adına görə axtar">
            </div>

            <div class="table-responsive">
              <div id="result">
                
              </div>
            </div>
          </div>
          <div class="card-footer small text-muted">Created Developer Company Baku</div>
        </div>

      </div>
      <!-- /.container-fluid -->

<?php $this->load->view('admin/footer')?>