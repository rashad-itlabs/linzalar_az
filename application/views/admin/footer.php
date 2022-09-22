      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->



  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('backend/')?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('backend/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('backend/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url('backend/')?>vendor/chart.js/Chart.min.js"></script>
  <script src="<?php echo base_url('backend/')?>vendor/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo base_url('backend/')?>vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('backend/')?>js/sb-admin.min.js"></script>
  <script src="<?php echo base_url('backend/')?>js/admin.js"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url('backend/')?>js/demo/datatables-demo.js"></script>
  <script src="<?php echo base_url('backend/')?>js/demo/chart-area-demo.js"></script>
  <script src="<?php echo base_url('backend/')?>js/jquery.selectlistactions.js"></script>
  <script src="<?php echo base_url('public/')?>ckeditor/ckeditor.js"></script>

    <script>
        CKEDITOR.replace('content');
    </script>
  <script>
    
    
  
  $('#btnRight').click(function (e) {


    $('select').moveToListAndDelete('#source', '#destination');

    e.preventDefault();

  });

   

  $('#btnAllRight').click(function (e) {

    $('select').moveAllToListAndDelete('#source', '#destination');

    e.preventDefault();

  });

   

  $('#btnLeft').click(function (e) {

    $('select').moveToListAndDelete('#destination', '#source');

    e.preventDefault();

  });

   

  $('#btnAllLeft').click(function (e) {

    $('select').moveAllToListAndDelete('#destination', '#source');

    e.preventDefault();

  });



  // -------------------------------------------------


  $('#btnRightColor').click(function (e) {
    

    $('select').moveToListAndDelete('#sourceColor', '#destinationColor');

    e.preventDefault();

  });

   

  $('#btnAllRightColor').click(function (e) {

    $('select').moveAllToListAndDelete('#sourceColor', '#destinationColor');

    e.preventDefault();

  });

   

  $('#btnLeftColor').click(function (e) {

    $('select').moveToListAndDelete('#destinationColor', '#sourceColor');

    e.preventDefault();

  });

   

  $('#btnAllLeftColor').click(function (e) {

    $('select').moveAllToListAndDelete('#destinationColor', '#sourceColor');

    e.preventDefault();

  });



    // -------------------------------------------------


  $('#btnRightColor').click(function (e) {
    

    $('select').moveToListAndDelete('#sourceColor', '#destinationColor');

    e.preventDefault();

  });

   

  $('#btnAllRightColor').click(function (e) {

    $('select').moveAllToListAndDelete('#sourceColor', '#destinationColor');

    e.preventDefault();

  });

   

  $('#btnLeftColor').click(function (e) {

    $('select').moveToListAndDelete('#destinationColor', '#sourceColor');

    e.preventDefault();

  });

   

  $('#btnAllLeftColor').click(function (e) {

    $('select').moveAllToListAndDelete('#destinationColor', '#sourceColor');

    e.preventDefault();

  });

  </script>

</body>

</html>
