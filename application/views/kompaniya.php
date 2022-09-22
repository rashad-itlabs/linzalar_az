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
				<div class="">
					<div class="company">
						
						<?php 
							foreach ($company as $row) { 

								if($row->activation > 0){ ?>

									<h3 style="color:#38c; margin-left:20px;"><?=ucwords($row->title)?></h3>
									<hr>

									<div class="col-md-12">
										<div class="card mb-3" style="height:auto;padding:5px;">
										  <img src="<?php echo base_url('upload/'.$row->image)?>" class="card-img-top" alt="...">
										  <div class="card-body">
										    <h5 class="card-title"></h5>
										    <p class="card-text"><?=$row->description?></p>
										  </div>
										</div>
									</div>

							<?php	}else{

									echo '<h4>Hal-hazırda Kampaniya yoxdur</h4>';

								}

								
							}
						?>
						


					</div>				
				</div>

			</div><!-- end center -->


		</div><!--end content -->


	</div><!-- end container -->


<?php $this->load->view('commentlist')?>
	<!-- end commentBox -->

	<?php $this->load->view('brendbox')?>
	<!-- end brands -->
<!-- <?php

// setcookie('cookie_name','resad', time() + 10); 
// echo '<a href="home/bookmark">Add Cookie</a>';
?> -->
	

<?php $this->load->view('include/footer')?>