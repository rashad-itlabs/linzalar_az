<?php $this->load->view('include/header_ru')?>
<?php
	foreach ($detail as $row) {
		error_reporting(0);
	}
	foreach ($readwishing as $key) {
		error_reporting(0);
	}
?>

	<div class="container" style="padding-left:0;">
		<div class="show_box">
			<div class="s_content">
				<img id="proImage" src="<?php echo base_url('upload/'.$row->pro_image)?>" data-image="<?php echo $row->pro_image?>" alt="">
			</div>
			<div class="detail_content">

				<div class="d_content">
					<h3 id="proName"><?php echo $row->pro_name?></h3>
					<p><?php echo $row->pro_small_text_ru?></p>
					<span><?php echo $row->pro_price?> <span id="azn">M</span></span>
					<div class="deliveri_box">
						<div class="d_box">
							<span><img src="<?php echo base_url('public/')?>images/icons/original.png" alt=""></span>
							Оригинальный продукт
						</div>
						<div class="d_box">
							<span><img src="<?php echo base_url('public/')?>images/icons/shipping.png" alt=""></span>
							Доставка в течении дня
						</div>
						<div class="d_box">
							<span><img src="<?php echo base_url('public/')?>images/icons/wallet.png" alt=""></span>
							Оплата на месте
						</div>
					</div>

					<div class="options">
						<form  action="<?php echo base_url('ru/addtoCard')?>" method="post">

						<?php
						if($row->type_lens=='linzasuyu'){ ?>

						<table class="table">
							<tr>
								<td width="150">Количество</td>
								<td>Цена</td>
								<td>Цена за упаковку</td>
							</tr>
							<tr>
								<td><input type="number" name="quantity_od" id="qu-od" class="form-control" min=0 value="1"></td>
								<td><?=$row->pro_price?> <strong id="azn">M</strong></td>
								<td>
									<input type="hidden" name="price_od" class="priceazn" placeholder="<?php echo $row->pro_price?>" >
									<span id="spanPrice" class="odPrice"><b><?php echo $row->pro_price?></b> <strong id="azn">M</strong></span>
								</td>
							</tr>

							<tr colspan=3>
								<?php
										if($row->pro_id==$key->pro_id){ ?>

											<td colspan="6" style="text-align:right">
											    <a  href="javascript::void" id="add-wish"><i class="far fa-bookmark" style="color:red;"></i> Избранное</a>
												<button name="add" class="btn btn-primary" tavarid="<?php echo $row->pro_id?>" ><i class="fas fa-cart-plus"></i> Корзина</button>
											</td>

									<?php	}else{ ?>

											<td colspan="6" style="text-align:right">
												<a href="javascript::void" id="add-wish" onclick="wishing_ru('<?php echo $row->pro_id?>');"><i class="far fa-bookmark"></i> Избранное</a>
												<button name="add" class="btn btn-primary" tavarid="<?php echo $row->pro_id?>" ><i class="fas fa-cart-plus"></i> Корзина</button>
											</td>
									<?php	}
									?>
							</tr>
						</table>
						

					<?php	}else{ ?>

						
						<table class="table">
							<tr>
								<th id="td-mob" style="width:20px">ГЛАЗ</th>
								<th id="td-mob" style="width:100px">Диа</th>
								<th>Оптическая сила</th>
								<?php
								if($row->type_lens=='rengli-linzalar'){ ?>
									<th>Цвет</th>
								<?php }

								elseif($row->type_lens=='astiqmat-linzalar'){ ?>
									<th>Цилиндра</th>
									<th>Ось</th>
								<?php }
								?>
								<th>Количество</th>
								<th>Цена</th>
							</tr>




							<tr>
								<td id="td-mob">ПРАВЫЙ </td>
								<td id="td-mob"><small id="dia"><?=$row->diametr?></small></td>
								<td>
									<select name="optik_sila_od" id="optik_sila_od"  class="form-control">
										<?php echo $row->numberlist?>
									</select>
										<input type="hidden" name="od_color" value="">
										<input type="hidden" name="odcyl" value="0">
									 	<input type="hidden" name="odax" value="0">
										
								</td>
								<?php 
									if($row->type_lens=="rengli-linzalar"){ ?>
									 <td>
									 	<select name="od_color" class="form-control">
									 		<?php echo $row->colorlist_ru?>
									 	</select>
									 	<input type="hidden" name="os_cyl" value="">
									 	<input type="hidden" name="os_ax" value="">
										<input type="hidden" name="odcyl" value="">
										<input type="hidden" name="odax" value="">
									 </td>


								<?php }

								elseif($row->type_lens=='astiqmat-linzalar'){ ?>
									<td>
									 	<select name="odcyl"  class="form-control">
									 		<?php echo $row->cyl?>
									 	</select>
									 </td>
									 <td>
									 	<select name="odax"  class="form-control">
									 		<?php echo $row->ax?>
									 	</select>
									 </td>
								<?php }
								?>
								<td>
									<input type="number" name="quantity_od" id="qu-od" class="form-control" min=0 value="1">
								</td>
								<td>
									<input type="hidden" name="price_od" class="priceazn" placeholder="<?php echo $row->pro_price?>" >
									<span id="spanPrice" class="odPrice"><b><?php echo $row->pro_price?></b> <strong id="azn">M</strong></span>
								</td>
							</tr>




							<tr>
								<td id="td-mob">ЛЕВЫЙ </td>
								<td id="td-mob"><small><?=$row->diametr?></small></td>
								<td>
									<select name="optik_sila_os" id="optik_sila_os" class="form-control">
										<?php echo $row->numberlist?>
									</select>
									<input type="hidden" name="os_color" value="">

										<input type="hidden" name="os_cyl" value="0">
									 	<input type="hidden" name="os_ax" value="0">

								</td>
								<?php 
									if($row->type_lens=="rengli-linzalar"){ ?>
									 <td>
									 	<select name="os_color" class="form-control">
									 		<?php echo $row->colorlist_ru?>
									 	</select>
									 	<input type="hidden" name="os_cyl" value="">
									 	<input type="hidden" name="os_ax" value="">
										<input type="hidden" name="odcyl" value="">
										<input type="hidden" name="odax" value="">
									 </td>
								<?php }

								elseif($row->type_lens=='astiqmat-linzalar'){ ?>
									<td>
									 	<select name="os_cyl"  class="form-control">
									 		<?php echo $row->cyl?>
									 	</select>
									 </td>
									 <td>
									 	<select name="os_ax"   class="form-control">
									 		<?php echo $row->ax?>
									 	</select>
									 </td>
								<?php }

								?>
								<td>
									<input type="number" name="quantity_os" id="qu-os" class="form-control" min=0 value="0">
								</td>
								<td>
									<input type="hidden" name="price_os" class="priceazn" placeholder="<?php echo $row->pro_price?>" >
									<span id="spanPrice" class="odPrice-os"><b>0.00</b> <strong id="azn">M</strong></span>
								</td>
							</tr>
							<tr>
								<?php
									if($row->type_lens=='rengli-linzalar'){ ?>

									<?php
										if($row->pro_id==$key->pro_id){ ?>

											<td colspan="6" style="text-align:right">
											    <a  href="javascript::void" id="add-wish"><i class="far fa-bookmark" style="color:red;"></i> Избранное</a>
												<a href="javascript::void" id="addtocard" class="btn btn-primary" tavarid="<?php echo $row->pro_id?>" ><i class="fas fa-cart-plus"></i> Корзина</a>
											</td>

									<?php	}else{ ?>

											<td colspan="6" style="text-align:right">
												<a href="javascript::void" id="add-wish" onclick="wishing_ru('<?php echo $row->pro_id?>');"><i class="far fa-bookmark"></i> Избранное</a>
												<a href="javascript::void" id="addtocard" class="btn btn-primary" tavarid="<?php echo $row->pro_id?>" ><i class="fas fa-cart-plus"></i> Корзина</a>
											</td>
									<?php	}
									?>

								<?php }
								elseif($row->type_lens=='astiqmat-linzalar'){ ?>

									<?php
										if($row->pro_id==$key->pro_id){ ?>

											<td colspan="7" style="text-align:right">
											    <a  href="javascript::void" id="add-wish" ><i class="far fa-bookmark" style="color:red;"></i> Избранное</a>
												<a href="javascript::void" id="addtocard" class="btn btn-primary" tavarid="<?php echo $row->pro_id?>" ><i class="fas fa-cart-plus"></i> Корзина</a>
											</td>

									<?php	}else{ ?>

											<td colspan="7" style="text-align:right">
												<a href="javascript::void" id="add-wish" onclick="wishing_ru('<?php echo $row->pro_id?>');"><i class="far fa-bookmark"></i> Избранное</a>
												<a href="javascript::void" id="addtocard" class="btn btn-primary" tavarid="<?php echo $row->pro_id?>" ><i class="fas fa-cart-plus"></i> Корзина</a>
											</td>
									<?php	}
									?>

								<?php }

								else{ ?>

									<?php
										if($row->pro_id==$key->pro_id){ ?>

											<td colspan="6" style="text-align:right">
											    <a  href="javascript::void" id="add-wish" ><i class="far fa-bookmark" style="color:red;"></i> Избранное</a>
												<a href="javascript::void" id="addtocard" class="btn btn-primary" tavarid="<?php echo $row->pro_id?>" ><i class="fas fa-cart-plus"></i> Корзина</a>
											</td>

									<?php	}else{ ?>

											<td colspan="6" style="text-align:right">
												<a href="javascript::void" id="add-wish" onclick="wishing_ru('<?php echo $row->pro_id?>');"><i class="far fa-bookmark"></i> Избранное</a>
												<a href="javascript::void" id="addtocard" class="btn btn-primary" tavarid="<?php echo $row->pro_id?>" ><i class="fas fa-cart-plus"></i> Корзина</a>
											</td>
									<?php	}
									?>

								<?php	}
								?>
							</tr>
						</table>
						<?php	}

						?>


							<input type="hidden" name="proName" value="<?php echo $row->pro_name?>">
							<input type="hidden" name="proImage" value="<?php echo $row->pro_image?>">
							<input type="hidden" name="price_od" value="<?php echo $row->pro_price?>" >
							<input type="hidden" name="typelens" value="<?php echo $row->type_lens?>" >					

							<input type="hidden" name="price_os" value="">
						</form>
					</div>
				</div>
			</div>
		</div>
<script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>
<script>
	$(document).ready(function(){

	$('#addtocard').on('click', function(){
			// e.preventDefault();


	URL = $('#url').val();

	//alert(odColor);


		jQuery(function(){
			$.ajax({
				
				url:URL+"home/addtoCard",
				type:'POST',
				data:$('form').serialize(),

				success:function(data){
					window.location.href=URL+"ru/card";
				}
			});
		})
})

})
</script>
		<div id="dcb_tabs">
			<nav>
			  <div class="nav nav-tabs" id="nav-tab" role="tablist">
			    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">О продукте</a>
			    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Комментария</a>
			  </div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
			  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
			  	<h6 style="color:#079dbf;font-weight:bold"><?php echo $row->pro_name?></h6>
			  	<hr>
			  	<?php echo $row->pro_detail_ru?>
			  </div>
			  
			  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
			  	<h4><?php echo $row->pro_name?></h4>
			  	<hr>
			  	<form action="" method="post">
			  		<div class="form-group">
			  			<label for="">Имя</label>
			  			<input type="text" name="ad" class="form-control" style="width:200px;padding-left:5px">
			  		</div>
			  		<div class="form-group">
			  			<textarea name="description" id="description" class="form-control" cols="10" rows="5"></textarea>
			  			<small id="max_length" class="form-text text-muted"></small>
			  		</div>
			  		<br>
			  		<div class="form-group">
			  			<button class="btn btn-primary" id="btn_comment">Поделитесь своим отзывом</button>
			  		</div>

			  		<input type="hidden" name="proID" value="<?php echo $row->pro_id?>">
			  	</form>
			  </div>
			</div>
		</div>

	</div><!-- end container -->

	<?php $this->load->view('ru/commentlist')?>
	<!-- end commentBox -->

	<?php $this->load->view('ru/brendbox')?>
	<!-- end brands -->

<?php $this->load->view('include/footer_ru')?>