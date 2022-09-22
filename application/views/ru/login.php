<?php $this->load->view('include/header_ru')?>


	<div class="container mt-5" style="padding-left:0;">
		
	<div class="row">
		<div class="col-md-6">
			<div id="login-form">
				<div class="form-header">
					<span id="login-icon"><i class="fas fa-user"></i></span>
					<span>Войти в систему</span>
				</div>
				
				<form action="<?php echo base_url('home/signin')?>" method="post">
					<div id="myform">
						<div class="form-group">
							<label for="">Имя пользователя</label>
							<input type="text" name="username" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Пароль</label>
							<input type="password" name="password" class="form-control">
						</div>
						<div class="form-group">
							<button class="btn btn-primary" id="login_btn_ru">Войти</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="col-md-6">
			<?php
				if($shopcount > 0){ ?>
					<a href="<?php echo base_url('ru/unregistered_page/'.$this->session->sessionID)?>" id="btn_bezaccount">Незарегистрированный</a>
			<?php	}else{ }
			?>
			
		</div>
	</div>

	</div><!-- end container -->
	<?php $this->load->view('ru/commentlist')?>

	<?php $this->load->view('ru/brendbox')?>
	<!-- end brands -->

<?php $this->load->view('include/footer_ru')?>