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
          <li class="breadcrumb-item active">Form</li>
        </ol>

        

        <!-- Area Chart Example-->
     

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-fw fa-headset"></i>
            İstək zənglər</div>
          <div class="card-body">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="istifadəçi adına görə axtar">
            </div>
            <div class="table-responsive">
              <table class="table table-bordered" id="admintable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Ad/Soyad</th>
                    <th>E-mail</th>
                    <th>Mövzu</th>
                    <th>Telefon</th>
                    <th>Description</th>
                    <th>Silmək</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($call as $row) { 
                  		$name = ucfirst($row->name);
                  		$surname = ucfirst($row->surname);
                  		$text = $row->text;
                  		$text = substr($text, 0,20);
                  		$text .='...';
                  	?>
                  	<tr>
                  		<td><?=$name?> <?=$surname?></td>
                  		<td><?=$row->email?></td>
                  		<td><?=$row->subject?></td>
                  		<td><?=$row->phone?></td>
                  		<td><p style="cursor:pointer;color:#38c" data-toggle="modal" data-target="#exampleModal" onclick="desc('<?php echo $row->call_id; ?>');"><?=$text?></p></td>
                  		<td align="center"><a style="color:#ff6600" href="<?php echo base_url('admin/deleteCall/'.$row->call_id)?>"><i class="far fa-trash-alt"></i></a></td>
                  	</tr>
                <?php  }
              	?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Created Developer Company Baku</div>
        </div>

      </div>


      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    
		  </div>
		</div>
      <!-- /.container-fluid -->

<?php $this->load->view('admin/footer')?>