<?php $this->load->view('include/header')?>


<div class="container" style="padding-left:0;">	

	<div class="content">
		<div class="card_header">
			<div class="c_yol">
				<span id="firstspan" >1</span>
				<span>Səbət</span>
			</div>
			<div class="c_yol">
				<span id="firstspan" >2</span>
				<span>Çatdırılacaq ünvan</span>
			</div>
			<div class="c_yol">
				<span id="firstspan" class="c_activ">3</span>
				<span>Ödəmə seçimi</span>
			</div>
			<div class="c_yol">
				<span id="firstspan">4</span>
				<span>Sifarişi tamamla</span>
			</div>
		</div>
	</div><!--end content -->

	<div class="card_content">
		<form action="<?php echo base_url('home/finished_card')?>" method="post">
		<div class="card_detail">
			<div  class="pay_box">
				<h3>Ödəmə stilini seçin</h3>
				<div class="pay_content">
					<div class="pay_section">
						<ul>
							<li>
								<input type="radio" id="doorpay" name="selectCard" value="Yerində Ödəmə">
								<label for="doorpay" name="selectCard" id="label">Yerində Ödəmə</label>
								<span></span>
							</li>
							<li>
								<input type="radio" id="cartpay" checked="" name="selectCard" value="Bank kartı ilə">
								<label for="cartpay" id="label">Bank kartı ilə</label>
								<span></span>
							</li>
						</ul>
					</div>
					<div class="card_section">
						<div class="div_card">
							<img src="<?php echo base_url('upload/')?>mastercard.png" alt="">
							<img src="<?php echo base_url('upload/')?>visa.png" alt="">
						</div>

						<div class="div_doorpay">
							
						</div>

					</div>
				</div>
			</div>
			<small>Ödəməniz 3DSecure ilə həyata keçiriləcək.</small>



		</div>
		
		<?php
			foreach ($pay_page as $row) {
				$courier = 2;
				$toplam = $countrow + $courier;
			}
		?>
		<div class="finish_bar">
			<div class="finis_card_price">
				<span>Toplam qiymət:</span>
				<span><?php echo $countrow ?>.00<b>M</b></span>
				<small>+2,00 <b>M</b> çatdırılma</small>
			</div>
			
			<strong>Total: <?php 
				$courier = 2;
				$toplam = $countrow + $courier;
			echo number_format($toplam) ?>.00 <small style="font-family:JISAZNRegular"><b>M</b></small></strong>
			<button id="btn_pay" class="finis_btn"><i class="far fa-credit-card"></i> Sifarişi bitir</button>
		</div>
	</div>

<?php
		foreach ($adress as $row) { ?>
			
		
		<input type="hidden" name="say[]" value="<?php echo $shopcount ?>">
		<input type="hidden" name="zakazkodu" value="<?php echo $row->zakaz_kodu ?>">
		<input type="hidden" name="proname[]" value="<?php echo $row->pro_name ?>">
		<input type="hidden" name="proimage[]" value="<?php echo $row->pro_image ?>">
		<input type="hidden" name="sph[]" value="<?php echo $row->optic_sila ?>">
		<input type="hidden" name="color[]" value="<?php echo $row->color ?>">
		<input type="hidden" name="cyl[]" value="<?php echo $row->cyl ?>">
		<input type="hidden" name="ax[]" value="<?php echo $row->ax ?>">
		<input type="hidden" name="quantity[]" value="<?php echo $row->quantity ?>">
		<input type="hidden" name="typelens[]" value="<?php echo $row->typelens ?>">
		<input type="hidden" name="price[]" value="<?php echo $row->price ?>">
		<input type="hidden" name="adress" value="<?php echo $_POST['selectAdress'] ?>">
		<input type="hidden" name="sessionID[]" value="<?php echo $row->sessionID ?>">


<?php	}
?>


<?php
	if($this->session->email){ ?>
		<?php
			foreach ($user as $user) {
				# code...
			}
		?>

		<input type="hidden" name="user" value="<?php echo $this->session->email?>">
		<input type="hidden" name="email" value="<?=$user->email?>">
		<input type="hidden" name="username" value="<?=$user->name?> <?=$user->surname?>">
		<input type="hidden" name="phone" value="<?=$user->phone?>">
		<input type="hidden" name="comment" value="<?php echo $_POST['comment']  ?>">

<?php	}else{ ?>

	<input type="hidden" name="username" value="<?php echo $_POST['username'] ?>">
	<input type="hidden" name="phone" value="<?php echo $_POST['phone']  ?>">
	<input type="hidden" name="adress" value="<?php echo $_POST['selectAdress']  ?>">
	<input type="hidden" name="oldyear" value="<?php echo $_POST['data']  ?>">
	<input type="hidden" name="comment" value="<?php echo $_POST['comment']  ?>">

<?php	}
?>
</form>
</div><!-- end container -->


<?php $this->load->view('commentlist')?>
<!-- end commentBox -->

<?php $this->load->view('brendbox')?>
<!-- end brands -->


<?php $this->load->view('include/footer')?>