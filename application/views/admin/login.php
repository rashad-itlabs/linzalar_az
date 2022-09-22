<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Linzalar.az - Admin Panel</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url('backend/')?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url('backend/')?>css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Giriş</div>
      <div class="card-body">
        <form action="<?php echo base_url('admin/signin')?>" method="post">
          <div class="form-group">
            <div class="form-label-group">
              <input type="text" id="inputEmail" class="form-control" name="username" placeholder="username" required="required" autofocus="autofocus">
              <label for="inputEmail">İstifadəçi adı</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" id="inputPassword" name="password" class="form-control" placeholder="******" required="required">
              <label for="inputPassword">Şifrə</label>
            </div>
          </div>
          <button class="btn btn-primary btn-block">Giriş</button>
        </form>
        <!-- <div class="text-center mt-3">
          <a class="d-block small" href="forgot-password.html">Şifrəni unutdum</a>
        </div> -->
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('backend/')?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('backend/')?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('backend/')?>vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
