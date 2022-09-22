<?php $this->load->view('include/header')?>
<div class="notification">
	<p>
		<i class="fas fa-info-circle"></i>
		 Linzaların gün ərzində çatdırılması... 
	</p>
	<span id="notf_close"><i class="far fa-times-circle"></i></span>
</div>

	<div class="container" style="padding-left:0;">
		

		<div class="content">
			<!-- leftBar section -->
			<?php $this->load->view('include/leftBar')?>
			<!-- end leftBar section -->
			<div class="center">
				<div class="cnt_header">
					<div class="header_item">
						<span><img src="<?php echo base_url('public/')?>images/icons/wallet.png" alt=""></span>
						Etibarlı alışveriş
					</div>
					<div class="header_item">
						<span><img src="<?php echo base_url('public/')?>images/icons/headset.png" alt=""></span>
						Professional komanda
					</div>
					<div class="header_item">
						<span><img src="<?php echo base_url('public/')?>images/icons/shipped.png" alt=""></span>
						Sürətli çatdırılma
					</div>
				</div>

				<div class="row">
					<?php
						foreach ($proBrands as $row) { 
							$urlLink = str_replace(" ", "-", $row->pro_name);
							 strtolower($urlLink); 

							 $row->pro_small_text = substr($row->pro_small_text, 0, 61);
							
							if($row->position=="Yeni"){ ?>

								<div class="col-md-4">
									<div class="card" id="card" onclick="go_detail('<?php echo $row->seflink?>');">
									  <span id="new">Yeni</span>
									  <img src="<?php echo base_url('upload/'.$row->pro_image)?>" class="card-img-top" alt="...">
									  <div class="card-body">
									  	<h5><b><?php echo $row->pro_name?></b></h5>
									    <p class="card-text" style="padding:1em;">
									    	<?php echo $row->pro_small_text?>
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
								<div class="card" id="card" onclick="go_detail('<?php echo $row->seflink?>');">
								  <img src="<?php echo base_url('upload/'.$row->pro_image)?>" class="card-img-top" alt="...">
								  <div class="card-body">
								  	<h5><b><?php echo $row->pro_name?></b></h5>
								    <p class="card-text" style="margin:5px;">
								    	<?php echo $row->pro_small_text?>
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


	<?php $this->load->view('commentlist')?>
	<!-- end commentBox -->

	<?php $this->load->view('brendbox')?>
	<!-- end brands -->

<?php $this->load->view('include/footer')?>