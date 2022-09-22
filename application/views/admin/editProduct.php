<?php $this->load->view('admin/header')?>

  <div id="wrapper">

    <!-- Sidebar -->
    <div class="position">
      <?php $this->load->view('admin/leftBar')?>
    </div>

    <div id="content-wrapper">

      <div class="container-fluid">

        <form action="<?=base_url('admin/edit_product')?>" method="post">
          <div class="row">
            <?php
              foreach ($product as $row) {
                echo '<div class="col-md-5">
                        <img src="'.base_url('upload/'.$row->pro_image).'">
                      </div>
                      <div class="col-md-7">
                        <div class="form-group">
                          <input type="text" name="proname" value="'.$row->pro_name.'" class="form-control">
                        </div>
                        <div class="form-group">
                          <input type="text" name="brandname" value="'.$row->brand_name.'" class="form-control">
                        </div>
                        <div class="form-group">
                          <div class="input-group">
                            <input type="text" name="price" value="'.$row->pro_price.'" class="form-control">
                            <span class="input-group-text">Azn</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <input type="hidden" name="id" value="'.$row->pro_id.'" class="form-control">
                          <button class="btn btn-primary">Dəyişikliyi yadda saxla</button>
                          <a href="" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                        </div>
                      </div>';  
              }
            ?>
            

          </div>
        </form>

      </div>
      <!-- /.container-fluid -->

<?php $this->load->view('admin/footer')?>