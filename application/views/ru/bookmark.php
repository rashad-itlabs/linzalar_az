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
				<div class="row">
				<?php

					foreach ($readwishing as $wishrow) {
						foreach ($allPro as $row) {
							 $urlLink = str_replace(" ", "-", $row->pro_name);
							 strtolower($urlLink); 

							 $row->pro_small_text = substr($row->pro_small_text, 0, 61);
							if($row->pro_id==$wishrow->pro_id){ ?>

								<div class="col-md-4" style="margin-top:0">
									<a href="<?php echo base_url('ru/deletebookmark/'.$row->pro_id)?>" class="wishDelete"><span class="badge badge-danger"><i class="fas fa-times"></i></span></a>
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
									  		<a href="javascript::void" class="add-to-card" productID="<?php echo $row->pro_id?>" productPrice="<?php echo $row->pro_price?>"><img src="<?php echo base_url('public/')?>images/icons/shopping-basket.png" alt=""></a>
									  	</div>
									  </div>
									</div>
								</div>
								
					<?php }
						}
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
<!-- <?php

// setcookie('cookie_name','resad', time() + 10); 
// echo '<a href="home/bookmark">Add Cookie</a>';
?> -->
	

<?php $this->load->view('include/footer_ru')?>


