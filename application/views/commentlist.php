	<div class="commentBox" style="background-image: url(<?php echo base_url('public/')?>images/bg_reviews.jpg)">
		<div class="row" id="slc_slider">
			<div class="col-md-5 boxTitle">
				<strong>Linzalar.az</strong>
				<span>istifadəçilərinin </span>
				<br>
				<span>haqqımızda dedikləri</span>
			</div>
			<div class="col-md-7">
				<div class="slickSlider">
					<?php
						foreach ($readcomment as $row) {
							if($row->activation >0){ ?>

								<div class="ray-Slider">
									<p><i>
										<?=$row->text?>
									</i></p>
									<span style="color:#079dbf"><?=$row->name?></span>
								</div>

						<?php	}else{ ?>

						<?php	}
						}
					?>
				</div>
			</div>
		</div>
	</div>