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
          <li class="breadcrumb-item active">Yeni əlavələr</li>
        </ol>



        

        <!-- Area Chart Example-->
     

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-plus"></i>
            Yeni əlavə et</div>
          <div class="card-body">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Kontant Linzalar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Optik şüşələr</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Eynəklər</a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <form action="<?php echo base_url('admin/test')?>" method="post">
                <table class="table">
                  <tr>
                    <td colspan="3">
                      <div class="form-group">
                        <label for="">Mehsulun adi</label>
                        <input type="text" class="form-control">
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <div class="form-group">
                        <label for="">Qisa aciqlama</label>
                        <textarea name="" id=""  class="form-control"></textarea>
                      </div>
                    </td>
                    <td c>
                      <div class="form-group">
                        <label for="">Etrafli aciqlama</label>
                       <textarea name="" id=""  class="form-control"></textarea>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2">
                      <div class="form-group">
                        <label for="">İstehsalçı adı</label>
                        <select name="" class="form-control" id="">
                          <option value="Johnson">Johnson&Johnson</option>
                          <option value="Alcon">Alcon</option>
                        </select>
                      </div>
                    </td>
                    <td colspan="2">
                      <div class="form-group">
                        <label for="">Kateqoriyasi</label>
                        <select name="" class="form-control" id="">
                          <option value="">Secim edin</option>
                          <option value="">Rəngli linzalar</option>
                          <option value="">Aylıq linzalar</option>
                          <option value="">Gündəlik linzalar</option>
                          <option value="">Astiqmat linzalar</option>
                          <option value="">Multifokal linzalar</option>
                        </select>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <select multiple id="source" class="form-control" >
                        <optgroup label="Optik Gucu">
                          <?php
                          foreach ($optition as $row) { ?>
                            <?php echo $row->optition_name?>
                          <?php  }
                          ?>
                        </optgroup>
                      </select>
                    </td>
                    <td align="center" style="width: 40px">
                      <input type='button' id='btnRight' class=" inptbtn" value='>'>
                      <input type='button' id='btnLeft' class=" inptbtn" value='<'>
                    </td>
                    <td>
                      <!-- <select multiple  class="form-control" name="test" id="destination" >
                        <option value="1" selected="">1</option>
                        <option value="2" selected="">2</option>
                        <option value="3" selected="">3</option>
                        <option value="4" selected="">4</option>
                        <option value="5" selected="">5</option>
                        <option value="6" selected="">6</option>
                      </select> -->
                      <textarea name="" id="destination" cols="30" rows="10"></textarea>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <select multiple id="sourceColor" class="form-control" >
                        <optgroup label="Astigmatism">
                          <?php
                          foreach ($optition as $row) { ?>
                            <?php echo $row->optition_cyl?>
                          <?php  }
                          ?>
                        </optgroup>
                      </select>
                    </td>
                    <td align="center" style="width: 40px">
                      <input type='button' id='btnRightColor' class=" inptbtn" value='>'>
                      <input type='button' id='btnLeftColor' class=" inptbtn" value='<'>
                    </td>
                    <td>
                      <select multiple class="form-control" id="destinationColor" >
                      </select>
                    </td>
                  </tr>

                  <tr>
                    <td>
                      <select multiple id="source" class="form-control" >
                        <optgroup label="Rengler">
                          <?php
                          foreach ($optition as $row) { ?>
                            <?php echo $row->optition_color?>
                          <?php  }
                          ?>
                        </optgroup>
                      </select>
                    </td>
                    <td align="center" style="width: 40px">
                      <input type='button' id='btnRight' class=" inptbtn" value='>'>
                      <input type='button' id='btnLeft' class=" inptbtn" value='<'>
                    </td>
                    <td>
                      <select multiple class="form-control" id="destination" >
                      </select>
                    </td>
                  </tr>


                </table>
                <button>yukle</button>
              </form>
                

                

                
              </div>
              <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
              <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
            </div>

          </div>
        </div>

      </div>
      <!-- /.container-fluid -->

<?php $this->load->view('admin/footer')?>