<?php $this->load->view('include/header')?>


	<div class="container mt-4" style="padding-left:0;">
		
	<div class="row">
		<div class="col-md-6">
			<div id="login-form">
				<div class="form-header">
					<span id="login-icon"><i class="fas fa-user"></i></span>
					<span>Giriş Edin</span>
				</div>
				
				<form action="<?php echo base_url('home/signin')?>" method="post">
					<div id="myform">
						<div class="form-group">
							<label for="">İstifadəçi adı</label>
							<input type="text" name="username" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Şifrə</label>
							<input type="password" name="password" class="form-control">
						</div>
						<div class="form-group">
							<button class="btn btn-primary" id="login_btn">Giriş Et</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-6">
			<?php
				if($shopcount >0){ ?>
					<a href="<?php echo base_url('unregistered_page/'.$this->session->sessionID)?>" id="btn_bezaccount">Qeydiyyatsız alışveriş</a>
			<?php	}else{ }
			?>
			
		</div>
	</div>

	</div><!-- end container -->
	<?php $this->load->view('commentlist')?>

	<?php $this->load->view('brendbox')?>
	<!-- end brands -->

<?php $this->load->view('include/footer')?>