<?php $this->load->view('include/header')?>

<div class="container" style="padding-left:0;">	

	<div class="content">
		<div class="card_header">
			<div class="c_yol">
				<span id="firstspan" >1</span>
				<span>Səbət</span>
			</div>
			<div class="c_yol">
				<span id="firstspan" class="c_activ">2</span>
				<span>Çatdırılacaq ünvan</span>
			</div>
			<div class="c_yol">
				<span id="firstspan">3</span>
				<span>Ödəmə seçimi</span>
			</div>
			<div class="c_yol">
				<span id="firstspan">4</span>
				<span>Sifarişi tamamla</span>
			</div>
		</div>
	</div><!--end content -->
<form action="<?php echo base_url('select_pay')?>" method="post">
	<div class="card_content">

		<div class="card_detail">			

			<div id="boxList">
				<table class="table">
					<tr>
						<td>
							<div class="form-group">
								<label for="">Ad/Soyad <span style="color:red">*</span></label>
								<input type="text" required="" name="username" class="form-control" style="padding-left:10px;">
							</div>
						</td>
						<td>
							<div class="form-group">
								<label for="">Telefon <span style="color:red">*</span></label>
								<input type="text" required="" name="phone" class="form-control" style="padding-left:10px;">
							</div>
						</td>
						<td>
							<div class="form-group">
								<label for="">Doğum tarixiniz</label>
								<input type="date" class="form-control" name="data" style="padding-left:10px;">
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<div class="form-group">
								<label for="">Ünvanınızı qeyd edin <span style="color:red">*</span></label>
								<textarea name="selectAdress" id="" class="form-control" placeholder="Q.Qarayev 57"></textarea>
							</div>
						</td>
						
						<td>
							<div class="form-group">
								<label for="">Qeydləriniz </label>
								<textarea name="comment" id="" class="form-control"></textarea>
							</div>
						</td>
					</tr>
				</table>
				
			</div>

		</div>

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
			<button id="btn_pay"><i class="fas fa-angle-double-right"></i> Davam et</button>

			
			</form>
		</div>

	</div>


</div><!-- end container -->


<?php $this->load->view('commentlist')?>
<!-- end commentBox -->

<?php $this->load->view('brendbox')?>
<!-- end brands -->

<?php $this->load->view('include/footer')?>