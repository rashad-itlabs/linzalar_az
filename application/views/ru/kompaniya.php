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
				<div class="">
					<div class="company">
						
						<?php 
							foreach ($company as $row) { 

								if($row->activation > 0){ ?>

									<h3 style="color:#38c; margin-left:20px;"><?=ucwords($row->title)?></h3>
									<hr>

									<div class="col-md-12">
										<div class="card mb-3" style="height:auto;padding:5px;">
										  <img src="https://scontent.fgbb2-1.fna.fbcdn.net/v/t1.0-0/s350x350/69306947_2382409735359174_582997902981332992_n.jpg?_nc_cat=103&_nc_ohc=IsEZB5UIWtYAQnWftvYKZv-kOLuSiytFKopbfsrCpTZQ7rC-qAHjfqdMA&_nc_ht=scontent.fgbb2-1.fna&oh=73a1aea341d3d276f775918eb54aefa9&oe=5E7CFE22" class="card-img-top" alt="...">
										  <div class="card-body">
										    <h5 class="card-title"></h5>
										    <p class="card-text"><?=$row->description?></p>
										  </div>
										</div>
									</div>

							<?php	}else{

									echo '<h4>В настоящее время нет кампании</h4>';

								}

								
							}
						?>
						


					</div>				
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