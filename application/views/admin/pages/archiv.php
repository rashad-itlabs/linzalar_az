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
          <li class="breadcrumb-item active">Arxiv</li>
        </ol>

        

        <!-- Area Chart Example-->
     

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-fw fa-archive"></i>
            Arxiv</div>
          <div class="card-body">
            <div class="table-responsive">

              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Zənglər</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Kontakt</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                  <table class="table arxivTable" >
                    <tr >
                      <th>Sifarişin yaranma tarixi</th>
                      <th>Nömrəsi</th>
                      <th>Rəylər</th>
                    </tr>
                    <?php
                      foreach ($calls as $row) { ?>
                        <tr>
                          <td><?=$row->data_start?></td>
                          <td><?=$row->number?></td>
                          <td><?=$row->comment?></td>
                        </tr>
                     <?php }
                    ?>
                  </table>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
              </div>


            </div>
          </div>
          <div class="card-footer small text-muted">Created Developer Company Baku</div>
        </div>

      </div>
      <!-- /.container-fluid -->

<?php $this->load->view('admin/footer')?>