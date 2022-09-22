<?php $this->load->view('include/header_ru')?>
<div class="notification">
	<p>
		<i class="fas fa-info-circle"></i>
		Доставка линз в течение дня... 
	</p>
	<span id="notf_close"><i class="far fa-times-circle"></i></span>
</div>

	<div class="container" style="padding-left:0;">
			

		<div class="content">
			<!-- leftBar section -->
			<?php $this->load->view('include/leftBar_ru')?>
			<!-- end leftBar section -->
			<div class="center">
				<div class="cnt_header">
					<div class="header_item">
						<span><img src="<?php echo base_url('public/')?>images/icons/wallet.png" alt=""></span>
						Надежные покупки
					</div>
					<div class="header_item">
						<span><img src="<?php echo base_url('public/')?>images/icons/headset.png" alt=""></span>
						Профессиональная команда
					</div>
					<div class="header_item">
						<span><img src="<?php echo base_url('public/')?>images/icons/shipped.png" alt=""></span>
						Быстрая доставка
					</div>
				</div>

				
				<div class="row">

					<!--============== AYLIQ LINZALAR ====================-->
					<?php
						foreach ($procategory as $row) { 

							 // $row->pro_small_text = substr($row->pro_small_text, 0, 61);
							
							if($row->position=="Yeni"){ ?>

								<div class="col-md-4">
									<div class="card" id="card" onclick="go_detail_ru('<?php echo $row->seflink?>');">
									  <span id="new">Yeni</span>
									  <img src="<?php echo base_url('upload/'.$row->pro_image)?>" class="card-img-top" alt="...">
									  <div class="card-body">
									  	<h5><b><?php echo $row->pro_name?></b></h5>
									    <p class="card-text" style="padding:1em;">
									    	<?php echo $row->pro_small_text_ru?>
									    </p>
									  </div>
									  <div class="seperator"></div>
									  <div class="card_price">
									  	<div class="p_price"><?php echo $row->pro_price?> <span>M</span></div>
									  	<div class="add_to_card">
									  		<a href=""><img src="<?php echo base_url('public/')?>images/icons/shopping-basket.png" alt=""></a>
									  	</div>
									  </div>
									</div>
								</div>

						<?php }else{ ?>

							<div class="col-md-4">
								<div class="card" id="card" onclick="go_detail_ru('<?php echo $row->seflink?>');">
								  <img src="<?php echo base_url('upload/'.$row->pro_image)?>" class="card-img-top" alt="...">
								  <div class="card-body">
								  	<h5><b><?php echo $row->pro_name?></b></h5>
								    <p class="card-text" style="margin:5px;">
								    	<?php echo $row->pro_small_text_ru?>
								    </p>
								  </div>
								  <div class="seperator"></div>
								  <div class="card_price">
								  	<div class="p_price"><?php echo $row->pro_price?> <span>M</span></div>
								  	<div class="add_to_card">
								  		<a href=""><img src="<?php echo base_url('public/')?>images/icons/shopping-basket.png" alt=""></a>
								  	</div>
								  </div>
								</div>
							</div>

						<?php }

					 }
					?>
				<!--============== RENGLI LINZALAR ====================-->
					<?php
						foreach ($procolor as $row) {
							$row->pro_small_text = substr($row->pro_small_text, 0, 61);
							if($row->position=="Yeni"){ ?>

								<div class="col-md-4">
									<div class="card" id="card" onclick="go_detail_ru('<?php echo $row->seflink?>');">
									  <span id="new">Yeni</span>
									  <img src="<?php echo base_url('upload/'.$row->pro_image)?>" class="card-img-top" alt="...">
									  <div class="card-body">
									  	<h5><b><?php echo $row->pro_name?></b></h5>
									    <p class="card-text" style="padding:1em;">
									    	<?php echo $row->pro_small_text_ru?>
									    </p>
									  </div>
									  <div class="seperator"></div>
									  <div class="card_price">
									  	<div class="p_price"><?php echo $row->pro_price?> <span>M</span></div>
									  	<div class="add_to_card">
									  		<a href=""><img src="<?php echo base_url('public/')?>images/icons/shopping-basket.png" alt=""></a>
									  	</div>
									  </div>
									</div>
								</div>

							<?php }else{ ?>

								<div class="col-md-4">
									<div class="card" id="card" onclick="go_detail_ru('<?php echo $row->seflink?>');">
									  <img src="<?php echo base_url('upload/'.$row->pro_image)?>" class="card-img-top" alt="...">
									  <div class="card-body">
									  	<h5><b><?php echo $row->pro_name?></b></h5>
									    <p class="card-text" style="margin:5px;">
									    	<?php echo $row->pro_small_text_ru?>
									    </p>
									  </div>
									  <div class="seperator"></div>
									  <div class="card_price">
									  	<div class="p_price"><?php echo $row->pro_price?> <span>M</span></div>
									  	<div class="add_to_card">
									  		<a href=""><img src="<?php echo base_url('public/')?>images/icons/shopping-basket.png" alt=""></a>
									  	</div>
									  </div>
									</div>
								</div>

						<?php }
						}
					?>
					
				</div>

			</div><!-- end center -->


		</div><!--end content -->


	</div><!-- end container -->


	<?php $this->load->view('ru/commentlist')?>
	<!-- end commentBox -->

	<?php $this->load->view('ru/brendbox')?>
	<!-- end brands -->

<?php $this->load->view('include/footer_ru')?>