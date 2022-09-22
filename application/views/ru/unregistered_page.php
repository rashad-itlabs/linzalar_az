<?php $this->load->view('include/header_ru')?>

<div class="container" style="padding-left:0;">	

	<div class="content">
		<div class="card_header">
			<div class="c_yol">
				<span id="firstspan" >1</span>
				<span>Корзина</span>
			</div>
			<div class="c_yol">
				<span id="firstspan" class="c_activ">2</span>
				<span>Адрес для доставки</span>
			</div>
			<div class="c_yol">
				<span id="firstspan">3</span>
				<span>Варианты оплаты</span>
			</div>
			<div class="c_yol">
				<span id="firstspan">4</span>
				<span>Завершить ваш заказ</span>
			</div>
		</div>
	</div><!--end content -->
<form action="<?php echo base_url('ru/select_pay')?>" method="post">
	<div class="card_content">

		<div class="card_detail">			

			<div id="boxList">
				<table class="table">
					<tr>
						<td>
							<div class="form-group">
								<label for="">Имя/Фамилия <span style="color:red">*</span></label>
								<input type="text" required="" name="username" class="form-control" style="padding-left:10px;">
							</div>
						</td>
						<td>
							<div class="form-group">
								<label for="">Телефон <span style="color:red">*</span></label>
								<input type="text" required="" name="phone" class="form-control" style="padding-left:10px;">
							</div>
						</td>
						<td>
							<div class="form-group">
								<label for="">Дата рождения</label>
								<input type="date" class="form-control" name="data" style="padding-left:10px;">
							</div>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<div class="form-group">
								<label for="">Введите свой адрес <span style="color:red">*</span></label>
								<textarea name="selectAdress" id="" class="form-control" placeholder="Q.Qarayev 57"></textarea>
							</div>
						</td>
						<td>
							<div class="form-group">
								<label for="">Комментарии </label>
								<textarea name="comment" id="" class="form-control"></textarea>
							</div>
						</td>
					</tr>
				</table>
				
			</div>

		</div>

		<div class="finish_bar">
			
			<div class="finis_card_price">
				<span>Общая сумма:</span>
				<span><?php echo $countrow ?>.00<b>M</b></span>
				<small>+2,00 <b>M</b> доставка</small>
			</div>
			
			<strong>Общий: <?php 
				$courier = 2;
				$toplam = $countrow + $courier;
			echo number_format($toplam) ?>.00 <small style="font-family:JISAZNRegular"><b>M</b></small></strong>
			<button id="btn_pay"><i class="fas fa-angle-double-right"></i> Дальше</button>

			
			</form>
		</div>

	</div>


</div><!-- end container -->


<?php $this->load->view('ru/commentlist')?>
<!-- end commentBox -->

<?php $this->load->view('ru/brendbox')?>
<!-- end brands -->

<?php $this->load->view('include/footer_ru')?>