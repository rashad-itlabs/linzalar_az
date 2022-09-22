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
          <li class="breadcrumb-item active">İstifadəçi Rəyləri</li>
        </ol>

        

        <!-- Area Chart Example-->
     

        <!-- DataTables Example -->
        <div class="mb-3">
          <table class="table" id="admintable">
        	<tr>
        		<th width="150">Rəy paylaşan</th>
        		<th>Mətn</th>
        		<th width="100">Paylaş/Sil</th>
        	</tr>
          <?php
            foreach ($comment as $row) { 
              if($row->activation>0){ ?>

                <tr>
                  <td ><?=$row->name?></td>
                  <td><?=$row->text?></td>
                  <td align="center"><a href="javascript::void" style="text-decoration:none">&#10004;</a> &nbsp;| &nbsp; <a href="<?php echo base_url('admin/deletecomment/'.$row->comment_id)?>" style="color:red;"><i class="fas fa-trash-alt"></i></a></td>
                </tr>

            <?php  }else{ ?>

              <tr>
                <td ><?=$row->name?></td>
                <td><?=$row->text?></td>
                <td align="center"><a href="<?php echo base_url('admin/share/'.$row->comment_id)?>"><i class="fas fa-share-alt"></i></a> &nbsp;|&nbsp; <a href="<?php echo base_url('admin/deletecomment/'.$row->comment_id)?>" style="color:red;"><i class="fas fa-trash-alt"></i></a></td>
              </tr>

             <?php }
              
              
           }
          ?>
        </table>

      </div>
      <!-- /.container-fluid -->

<?php $this->load->view('admin/footer')?>