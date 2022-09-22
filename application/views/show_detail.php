<?php $this->load->view('include/header')?>
<?php
	foreach ($detail as $row) {
		error_reporting(0);
	}
	// foreach ($readwishing as $key) {
	// 	error_reporting(0);
	// }
?>

	<div class="container" style="padding-left:0;">
		<div class="show_box">
			<div class="s_content">
				<img id="proImage" src="<?php echo base_url('upload/'.$row->pro_image)?>" data-image="<?php echo $row->pro_image?>" alt="">
			</div>
			<div class="detail_content">

				<div class="d_content">
					<h3 id="proName"><?php echo $row->pro_name?></h3>
					<p><?php echo $row->pro_small_text?></p>
					<span><?php echo $row->pro_price?> <span id="azn">M</span></span>
					<div class="deliveri_box">
						<div class="d_box">
							<span><img src="<?php echo base_url('public/')?>images/icons/original.png" alt=""></span>
							Orijinal məhsul
						</div>
						<div class="d_box">
							<span><img src="<?php echo base_url('public/')?>images/icons/shipping.png" alt=""></span>
							Gün ərzində çatdırılma
						</div>
						<div class="d_box">
							<span><img src="<?php echo base_url('public/')?>images/icons/wallet.png" alt=""></span>
							Yerində ödəmə
						</div>
					</div>

					<div class="options">
						<form  action="<?php echo base_url('home/addtoCard')?>" method="post">
						<?php 

							if($row->type_lens=='optiksuseler'){ ?>

							<table class="table">
								<tr>
									<td>Marka adı</td>
									<td>2 ədədin qiyməti</td>
								</tr>
								<tr>
									<td>
										<select name="linzatype" class="form-control" id="linzatype">
											<?php
												foreach ($optiklinza as $row) { ?>
													
												<option value="<?=$row->linza_type?>"><?=$row->linza_type?></option>

											<?php	}
											?>
										</select>
									</td>
									<td>
										<input type="hidden" name="price_od" class="priceazn" placeholder="<?php echo $row->pro_price?>" >
										<strong id="lens_price">68</strong> <b id="azn">M</b></td>
								</tr>
								<tr>
									<td colspan="2" style="text-align:right">
										<a href="" data-toggle="modal" data-target="#exampleModalResept" class="btn btn-primary">Reseptinizi yazın</a>
									</td>
								</tr>
							</table>


						<?php


						}elseif($row->type_lens=='gozdamcisi'){ ?>

						<table class="table">
							<tr>
								<td width="150">Ədəd</td>
								<td>Məbləğ</td>
								<td>1 ədədin məbləği</td>
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
											    <a  href="javascript::void" id="add-wish"><i class="far fa-bookmark" style="color:red;"></i> Seçilmiş məhsul</a>
												<button name="add" class="btn btn-primary" tavarid="<?php echo $row->pro_id?>" ><i class="fas fa-cart-plus"></i> Səbətə at</button>
											</td>

									<?php	}else{ ?>

											<td colspan="6" style="text-align:right">
												<a href="javascript::void" id="add-wish" onclick="wishing('<?php echo $row->pro_id?>');"><i class="far fa-bookmark"></i> Seçilmiş məhsul et</a>
												<button name="add" class="btn btn-primary" tavarid="<?php echo $row->pro_id?>" ><i class="fas fa-cart-plus"></i> Səbətə at</button>
											</td>
									<?php	}
									?>
							</tr>
						</table>


						<?php


						}elseif($row->type_lens=='linzasuyu'){ ?>

						<table class="table">
							<tr>
								<td width="150">Ədəd</td>
								<td>Məbləğ</td>
								<td>1 ədədin məbləği</td>
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
											    <a  href="javascript::void" id="add-wish"><i class="far fa-bookmark" style="color:red;"></i> Seçilmiş məhsul</a>
												<button name="add" class="btn btn-primary" tavarid="<?php echo $row->pro_id?>" ><i class="fas fa-cart-plus"></i> Səbətə at</button>
											</td>

									<?php	}else{ ?>

											<td colspan="6" style="text-align:right">
												<a href="javascript::void" id="add-wish" onclick="wishing('<?php echo $row->pro_id?>');"><i class="far fa-bookmark"></i> Seçilmiş məhsul et</a>
												<button name="add" class="btn btn-primary" tavarid="<?php echo $row->pro_id?>" ><i class="fas fa-cart-plus"></i> Səbətə at</button>
											</td>
									<?php	}
									?>
							</tr>
						</table>
						

					<?php	}else{ ?>

						
						<table class="table">
							<tr>
								<th style="width:20px">Göz</th>
								<th style="width:100px">Dia</th>
								<th>Optik gücü</th>
								<?php
								if($row->type_lens=='rengli-linzalar'){ ?>
									<th>Rəngi</th>
								<?php }

								elseif($row->type_lens=='astiqmat-linzalar'){ ?>
									<th>Silindir</th>
									<th>Dərəcə</th>
								<?php }
								?>
								<th>Qutu</th>
								<th>Qiymət</th>
							</tr>




							<tr>
								<td>Sağ</td>
								<td ><small id="dia"><?=$row->diametr?></small></td>
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
									 		<?php echo $row->colorlist?>
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
								<td>Sol</td>
								<td><small><?=$row->diametr?></small></td>
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
									 		<?php echo $row->colorlist?>
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
											    <a  href="javascript::void" id="add-wish"><i class="far fa-bookmark" style="color:red;"></i> Seçilmiş məhsul</a>
												<a href="javascript::void" id="addtocard" class="btn btn-primary" tavarid="<?php echo $row->pro_id?>" ><i class="fas fa-cart-plus"></i> Səbətə at</a>
											</td>

									<?php	}else{ ?>

											<td colspan="6" style="text-align:right">
												<a href="javascript::void" id="add-wish" onclick="wishing('<?php echo $row->pro_id?>');"><i class="far fa-bookmark"></i> Seçilmiş məhsul et</a>
												<a href="javascript::void" id="addtocard" class="btn btn-primary" tavarid="<?php echo $row->pro_id?>" ><i class="fas fa-cart-plus"></i> Səbətə at</a>
											</td>
									<?php	}
									?>

								<?php }
								elseif($row->type_lens=='astiqmat-linzalar'){ ?>

									<?php
										if($row->pro_id==$key->pro_id){ ?>

											<td colspan="7" style="text-align:right">
											    <a  href="javascript::void" id="add-wish" ><i class="far fa-bookmark" style="color:red;"></i> Seçilmiş məhsul</a>
												<a href="javascript::void" id="addtocard" class="btn btn-primary" tavarid="<?php echo $row->pro_id?>" ><i class="fas fa-cart-plus"></i> Səbətə at</a>
											</td>

									<?php	}else{ ?>

											<td colspan="7" style="text-align:right">
												<a href="javascript::void" id="add-wish" onclick="wishing('<?php echo $row->pro_id?>');"><i class="far fa-bookmark"></i> Seçilmiş məhsul et</a>
												<a href="javascript::void" id="addtocard" class="btn btn-primary" tavarid="<?php echo $row->pro_id?>" ><i class="fas fa-cart-plus"></i> Səbətə at</a>
											</td>
									<?php	}
									?>

									


								<?php }



								else{ ?>

									<?php
										if($row->pro_id==$key->pro_id){ ?>

											<td colspan="6" style="text-align:right">
											    <a  href="javascript::void" id="add-wish" ><i class="far fa-bookmark" style="color:red;"></i> Seçilmiş məhsul</a>
												<a href="javascript::void" id="addtocard" class="btn btn-primary" tavarid="<?php echo $row->pro_id?>" ><i class="fas fa-cart-plus"></i> Səbətə at</a>
											</td>

									<?php	}else{ ?>

											<td colspan="6" style="text-align:right">
												<a href="javascript::void" id="add-wish" onclick="wishing('<?php echo $row->pro_id?>');"><i class="far fa-bookmark"></i> Seçilmiş məhsul et</a>
												<a href="javascript::void" id="addtocard" class="btn btn-primary" tavarid="<?php echo $row->pro_id?>" ><i class="fas fa-cart-plus"></i> Səbətə at</a>
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
					window.location.href=URL+"card";
				}
			});
		})
})

})
</script>
		<div id="dcb_tabs">
			<nav>
			  <div class="nav nav-tabs" id="nav-tab" role="tablist">
			    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Məhsul haqqında</a>
			    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Rəy bildir</a>
			  </div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
			  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
			  	<h6 style="color:#079dbf;font-weight:bold"><?php echo $row->pro_name?></h6>
			  	<hr>
			  	<?php echo $row->pro_detail?>
			  </div>
			  
			  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
			  	<h4><?php echo $row->pro_name?></h4>
			  	<hr>
			  	<form action="" method="post">
			  		<div class="form-group">
			  			<label for="">Adınız</label>
			  			<input type="text" name="ad" class="form-control" style="width:200px;padding-left:5px">
			  		</div>
			  		<div class="form-group">
			  			<textarea name="description" id="description" class="form-control" cols="10" rows="5"></textarea>
			  			<small id="max_length" class="form-text text-muted"></small>
			  		</div>
			  		<br>
			  		<div class="form-group">
			  			<button class="btn btn-primary" id="btn_comment">Rəy paylaş</button>
			  		</div>

			  		<input type="hidden" name="proID" value="<?php echo $row->pro_id?>">
			  	</form>
			  </div>
			</div>
		</div>

	</div><!-- end container -->

	<?php $this->load->view('commentlist')?>
	<!-- end commentBox -->

	<?php $this->load->view('brendbox')?>
	<!-- end brands -->


<!-- Modal -->
<div class="modal fade" id="exampleModalResept" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width:100%;">
      <div class="modal-header" style="padding:1rem 1rem;border-bottom:1px solid #dee2e6">
        <h5 class="modal-title" id="exampleModalLabel" style="position:unset;">Elektron Resept</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position:unset;margin:0;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<?php
			foreach ($detail as $rrow) {
					
				}
      	?>
        <table class="table">
        	<tr>
        		<td colspan="2">
					<select name="linzatype" class="form-control" id="linzatypeModel">
						<?php
							foreach ($optiklinza as $row) { ?>
								
							<option value="<?=$row->linza_type?>"><?=$row->linza_type?></option>

						<?php	}
						?>
					</select>
				</td>
				<td>
					<input type="hidden" name="lens_price_modal" class="priceazn" value="68" >
					<strong id="lens_price_modal">68</strong> <b id="azn">M</b> (2 ədəd)</td>
				</td>
        	</tr>
        	<tr>
        		<td>
        			<div class="form-group">
        				<label for="">Ad</label>
        				<input type="text" class="form-control" style="padding-left:3px; font-size:13px">
        			</div>
        		</td>
        		<td>
        			<div class="form-group">
        				<label for="">Soyad</label>
        				<input type="text" class="form-control" style="padding-left:3px; font-size:13px">
        			</div>
        		</td>
        		<td>
        			<div class="form-group">
        				<label for="">Telefon</label>
        				<input type="tel" name="phone" placeholder="(050)000-00-00" class="form-control" style="font-size:13px; padding-left:3px;">
        			</div>
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<div class="form-group">
        				<label for="">Sağ göz</label>
        				<input type="text" maxlength="5" class="form-control onlyNumber" style="padding-left:5px">
        			</div>
        		</td>
        		<td>
        			<div class="form-group">
        				<label for="">Cyl(Astigmat)</label>
        				<input type="text" maxlength="5" class="form-control onlyNumber" style="padding-left:5px">
        			</div>
        		</td>
        		<td>
        			<div class="form-group">
        				<label for="">Ax</label>
        				<input type="text" maxlength="3" class="form-control onlyNumber" style="padding-left:5px">
        			</div>
        		</td>
        	</tr>
        	<tr>
        		<td>
        			<div class="form-group">
        				<label for="">Sol göz</label>
        				<input type="text" maxlength="5" class="form-control onlyNumber" style="padding-left:5px">
        			</div>
        		</td>
        		<td>
        			<div class="form-group">
        				<label for="">Cyl(Astigmat)</label>
        				<input type="text" maxlength="5" class="form-control onlyNumber" style="padding-left:5px">
        			</div>
        		</td>
        		<td>
        			<div class="form-group">
        				<label for="">Ax</label>
        				<input type="text" maxlength="3" class="form-control onlyNumber" style="padding-left:5px">
        			</div>
        		</td>
        	</tr>
        	<tr>
        		<td></td>
        		<td>
        			<div class="form-group">
        				<label for="">DPP <br>(göz arası məsafə)</label>
        				<input type="text" maxlength="5" class="form-control" style="padding-left:5px">
        			</div>
        		</td>
        		<td></td>
        	</tr>
        	<tr>
        		<td colspan="3">
        			<small>Qiymət hesablandıqdan sonra sizinlə əlaqə saxlanılacaq</small>
        		</td>
        	</tr>
        </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-success">Reseptinizi göndərin</button>
      </div>
    </div>
  </div>
</div>


<?php $this->load->view('include/footer')?>