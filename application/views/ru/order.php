<?php $this->load->view('include/header_ru')?>


<div class="container" style="padding-left:0;">	
	
	<div class="order_content">
		<div class="order_left">
			<div class="orderBox">
				<h3>Профиль Сервис</h3>
				<ul>
					<li>
						<a href="?my=adress">
							<?php
								error_reporting(0);
								if($_GET['my']=="adress"){ ?>
									<span style="color:#079dbf"><i class="fas fa-truck-loading"></i></span>
									Личная информация
									<span><i class="fas fa-chevron-right"></i></span>
								<?php }else{ ?>

									<span><i class="fas fa-truck-loading"></i></span>
									Личная информация
									<span><i class="fas fa-chevron-right"></i></span>

							<?php	}
							?>
							
						</a>
					</li>
					<li>
						<a href="?my=orders">
							<?php
								error_reporting(0);
								if($_GET['my']=="orders"){ ?>
									<span style="color:#079dbf"><i class="fab fa-opencart"></i></span>
									Мои заказы
									<span><i class="fas fa-chevron-right"></i></span>
								<?php }else{ ?>

									<span><i class="fab fa-opencart"></i></span>
									Мои заказы
									<span><i class="fas fa-chevron-right"></i></span>

							<?php	}
							?>
							
						</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="order_center">

			<?php
				error_reporting(0);
				$url = $_GET['my'];
				switch ($url) {
					case 'orders': ?>

					<div class="order_order">
						<table class="order_tab" >
							<th>Мои заказы</th>
								<?php
								error_reporting(0);
									foreach ($cardView as $row) { 
											if($color=="#dbdbdb"){
												$color = '#f0f0f0';
											}else{
												$color="#dbdbdb";
											}
										?>
										<?php
											if($row->activation=="0"){ ?>

												<tr style="background: #ff00002b">
													<td><?php echo $row->sifaris_kodu?></td>
													<td id="mobTD"><?php echo $row->pro_name?></td>
													<td><?php echo $row->price?> Azn</td>
													<td><?php echo $row->data?></td>
													<td><a style="color:red"><i class="fas fa-exclamation"></i></a></td>
												</tr>
												<tr>
													<td colspan="5">
														<div  class="openCard" id="openCard-<?php echo $row->shop_id?>">
														<form action="<?php echo base_url('home/addRefreshtoCard')?>" method="post">
															<input type="hidden" id="proName" name="proName" value="<?php echo $row->pro_name?>">
															<input type="hidden" id="proImage" name="proImage" value="<?php echo $row->pro_image?>">
															<input type="hidden" id="sph" name="sph" value="<?php echo $row->sph?>">
															<input type="hidden" id="cyl" name="cyl" value="<?php echo $row->cyl?>">
															<input type="hidden" id="ax" name="ax" value="<?php echo $row->ax?>">
															<input type="hidden" id="color" name="color" value="<?php echo $row->color?>">
															<input type="hidden" id="quantity" name="quantity" value="<?php echo $row->quantity?>">
															<input type="hidden" id="price" name="price" value="<?php echo $row->price?>">
															<input type="hidden" id="" name="sifariskodu" value="<?php echo $row->sifaris_kodu?>">
															<button class="btn btn-refresh">Повторите ваш заказ</button>


														</form>
														</div>
													</td>
												</tr>

										<?php	}else{ ?>

											<tr  bgcolor="<?php echo $color;?>" onclick="viewCard('<?php echo $row->shop_id?>');">
												<td><?php echo $row->sifaris_kodu?></td>
												<td id="mobTD"><?php echo $row->pro_name?></td>
												<td><?php echo $row->price?> Azn</td>
												<td><?php echo $row->data?></td>
												<td><a style="color:green"><i class="fas fa-check"></i></a></td>
											</tr>
											<tr>
												<td colspan="5">
													<div  class="openCard" id="openCard-<?php echo $row->shop_id?>">
													<form action="<?php echo base_url('ru/addRefreshtoCard')?>" method="post">
														<input type="hidden" id="proName" name="proName" value="<?php echo $row->pro_name?>">
														<input type="hidden" id="proImage" name="proImage" value="<?php echo $row->pro_image?>">
														<input type="hidden" id="sph" name="sph" value="<?php echo $row->sph?>">
														<input type="hidden" id="cyl" name="cyl" value="<?php echo $row->cyl?>">
														<input type="hidden" id="ax" name="ax" value="<?php echo $row->ax?>">
														<input type="hidden" id="color" name="color" value="<?php echo $row->color?>">
														<input type="hidden" id="quantity" name="quantity" value="<?php echo $row->quantity?>">
														<input type="hidden" id="price" name="price" value="<?php echo $row->price?>">
														<input type="hidden" id="" name="sifariskodu" value="<?php echo $row->sifaris_kodu?>">
														<button class="btn btn-refresh">Повторите ваш заказ</button>

														<a href="javascript::void" data-toggle="modal" id="showOrder" onclick="showOrder('<?php echo $row->shop_id?>');" data-target="#exampleModalShowOrder" class="btn btn-view"><i class="fas fa-eye"></i> Показать ваш заказ</a>

													</form>

														
													<!-- Modal -->
														
													</div>
												</td>
											</tr>

											<div class="modal fade" id="exampleModalShowOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog" role="document">
											    <div class="modal-content" style="width:100%">
											      	<div class="modal-body">
											         
														

											      	</div>
											      <div class="modal-footer">
											        <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
											      </div>
											    </div>
											  </div>
											</div>

										<?php	}
										?>
										
								<?php	}
								?>
						</table>
					</div>
						
					
			<?php break;

				case 'adress': ?>

					<?php foreach ($userProfile as $row) {
						
					} ?>
						
					<div class="adress_box">
						<div class="adress_box_header">
							<h4>Регистрационная информация</h4>
						</div>
						<form action="<?php echo base_url('home/updateUser')?>" method="post">
						<div class="adressContent">
							<div class="adressContentLeft">
								<div class="form-group">
									<label for="">Имя</label>
									<input type="text" name="name" class="form-control" value="<?php echo $row->name ?>">
									<input type="hidden" name="uid" value="<?php echo $row->uid ?>">
								</div>
								<div class="form-group">
									<label for="">Телефон</label>
									<input type="text" name="phone" class="form-control" value="<?php echo $row->phone ?>">
								</div>
								<div class="form-group">
									<label for="">Емайл</label>
									<input type="text" name="email" class="form-control" value="<?php echo $row->email ?>">
								</div>
								<div class="form-group">
									<button class="btn btn-primary" id="btn-mac">Обновить данные</button>
								</div>
							</div>
							<div class="adressContentRight">
								<div class="form-group">
									<label for="">Фамилия</label>
									<input type="text" name="surname" class="form-control" value="<?php echo $row->surname ?>">
								</div>
								
								<div class="form-group">
									<label for="">Поль </label>
									<small>(<?php echo $row->gender?>)</small>
									<select name="gender" id="" class="form-control">
										<option value="Kişi">Мужчина</option>
										<option value="Qadın">Женщина</option>
									</select>

								</div>
								<div class="form-group">
									<table style="width:100%">
										<tr>
											<td>
												<div class="form-group">
													<label for="">День рождения</label>
													<input name="day" maxlength="2" value="<?php echo $row->old_year?>" placeholder="25" type="date" class="form-control">
												</div>
											</td>
										</tr>
									</table>
								</div>
								<div class="form-group">
									<button class="btn btn-primary" id="btn-mob">Обновить данные</button>
								</div>

							</div>
						</div>
						</form>
					</div>


				<?php break;
					



					default: ?>


							<?php foreach ($userProfile as $row) {
						
					} ?>
						
					<div class="adress_box">
						<div class="adress_box_header">
							<h4>Регистрационная информация</h4>
						</div>
						<form action="<?php echo base_url('home/updateUser')?>" method="post">
						<div class="adressContent">
							<div class="adressContentLeft">
								<div class="form-group">
									<label for="">Имя</label>
									<input type="text" name="name" class="form-control" value="<?php echo $row->name ?>">
									<input type="hidden" name="uid" value="<?php echo $row->uid ?>">
								</div>
								<div class="form-group">
									<label for="">Телефон</label>
									<input type="text" name="phone" class="form-control" value="<?php echo $row->phone ?>">
								</div>
								<div class="form-group">
									<label for="">Емайл</label>
									<input type="text" name="email" class="form-control" value="<?php echo $row->email ?>">
								</div>
								<div class="form-group">
									<button class="btn btn-primary" id="btn-mac">Обновить данные</button>
								</div>
							</div>
							<div class="adressContentRight">
								<div class="form-group">
									<label for="">Фамилия</label>
									<input type="text" name="surname" class="form-control" value="<?php echo $row->surname ?>">
								</div>
								
								<div class="form-group">
									<label for="">Поль </label>
									<small>(<?php echo $row->gender?>)</small>
									<select name="gender" id="" class="form-control">
										<option value="Kişi">Мужчина</option>
										<option value="Qadın">Женщина</option>
									</select>

								</div>
								<div class="form-group">
									<table style="width:100%">
										<tr>
											<td>
												<div class="form-group">
													<label for="">День рождения</label>
													<input name="day" maxlength="2" value="<?php echo $row->old_year?>" placeholder="25" type="date" class="form-control">
												</div>
											</td>
										</tr>
									</table>
								</div>
								<div class="form-group">
									<button class="btn btn-primary" id="btn-mob">Обновить данные</button>
								</div>

							</div>
						</div>
						</form>
					</div>

						
				<?php	break;
				}

			?>


		</div>
	</div>

</div><!-- end container -->


<?php $this->load->view('ru/commentlist')?>
<!-- end commentBox -->

<?php $this->load->view('ru/brendbox')?>
<!-- end brands -->


<?php $this->load->view('include/footer_ru')?>