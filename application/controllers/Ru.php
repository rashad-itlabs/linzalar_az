<?php




class Ru extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('account_model');
		$this->load->model('category_model');
		$this->load->model('products');
		$this->load->model('process_model');
		$this->load->model('menu');
		$this->load->helper('menu');
		$this->load->model('search');
		$this->load->model('card_model');
		$this->load->helper('cookie');


	}


	public function index()
	{
		$data['navbarmenu'] = $this->menu->navbar();
		$data['brands'] = $this->category_model->brands();
		$data['lenstype'] = $this->category_model->lenstype();
		$data['allPro']	= $this->products->view_all();
		$data['allProLimit']	= $this->products->view_all_limit();

		

		$where=array(
			'brand_name'=>'Johnson'
		);
		$data['johnson']	= $this->products->view_johnson($where);

		$where=array(
			'sessionID'=>$this->session->sessionID
		);
		$data['shopcount'] = $this->products->get_count($where);

		$data['uselens'] = $this->category_model->use_lens();
		$data['onePro'] = $this->products->all_header_menu();
		$data['readcomment'] = $this->process_model->read_cooment();

		$this->load->view('ru/home',$data);
	}



	public function show_detail($seflink)
	{
		//$seflink = $_GET['seflink'];
		$data['navbarmenu'] = $this->menu->navbar();
		$where = array(
			'seflink' => $seflink
		);

		
		$data['detail'] = $this->products->detail($where);

		$where=array(
			'sessionID'=>$this->session->sessionID
		);
		$data['shopcount'] = $this->products->get_count($where);

		$data['brands'] = $this->category_model->brands();
		$data['lenstype'] = $this->category_model->lenstype();
		$data['allPro']	= $this->products->view_all();
		$data['allProLimit']	= $this->products->view_all_limit();
		$data['uselens'] = $this->category_model->use_lens();
		$data['onePro'] = $this->products->all_header_menu();
		$where=array(
			'brand_name'=>'Johnson'
		);
		$data['johnson']	= $this->products->view_johnson($where);

		$where = array(
			'user_email'=>$this->session->email
		);
		// $data['readwishing'] = $this->products->readWishing($where);
		$data['readcomment'] = $this->process_model->read_cooment();

		$this->load->view('ru/show_detail',$data);
	}



	public function card()
	{
		$data['navbarmenu'] = $this->menu->navbar();
		$where=array(
			'sessionID'=>$this->session->sessionID
		);
		$data['shopcount'] = $this->products->get_count($where);

		$data['brands'] = $this->category_model->brands();
		$data['lenstype'] = $this->category_model->lenstype();
		$data['allPro']	= $this->products->view_all();
		$data['allProLimit']	= $this->products->view_all_limit();
		$data['uselens'] = $this->category_model->use_lens();
		$data['onePro'] = $this->products->all_header_menu();
		$where=array(
			'brand_name'=>'Johnson'
		);
		$data['johnson']	= $this->products->view_johnson($where);
		$data['readcomment'] = $this->process_model->read_cooment();

		
		$this->load->view('ru/card',$data);
	}





	public function showCard()
	{
		$data['navbarmenu'] = $this->menu->navbar();
		$sessionID = $this->session->sessionID;
		$result = $this->products->viewCard($sessionID);

		


		$where = array(
			'sessionID' 	=>$this->session->sessionID
		);
		$rows = $this->products->show_Card($where);

		$count = array(
			'sessionID'	=> $this->session->sessionID
		);

		$countrow = $this->products->get_sum($count);

		$viewData = new stdClass();
		$viewData->rows=$rows;
		$viewData->countrow=$countrow;

		

		

		if($result== 1 ){ 

			echo '<div class="card_detail">';
			foreach ($rows as $row) {
				error_reporting(0);
				$url = 'qazxswedcvfrtgbnhyujmkiolp123456789QAZXSWEDCVFRTGBNHYUJMKIOLP';
				$max = 25;
				$size=strlen($url)-1;
				while ($max--)
				$link.= $url[rand(0,$size)];

				$courier = 2;
				$toplam = $countrow + $courier;
		?>

		
			<div id="boxList" class="<?php echo $row->card_id?>">
				<div class="basket_remove">
					<a href="javascript::" onclick="deleteCard('<?php echo $row->card_id?>')" id="btn_close"><i class="fas fa-times"></i></a>
				</div>
				<div class="basket_image">
					<div id="basket_image_box">
						<img src="<?php echo base_url('upload/'.$row->pro_image)?>" alt="">
					</div>
				</div>
				<div class="basket_items">
					<div id="basliq"><h4><?php echo $row->pro_name?></h4></div>
					<table id="detail_table" border="0">
						<?php

							if($row->typelens=="rengli-linzalar"){ ?>

								<tr>
									<th>Оптическая сила</th>
									<th>Цвет</th>
									<th style="width:110px;">Количество</th>
								</tr>
								<tr>
									<td><?php echo $row->optic_sila?></td>
									<td><?php echo $row->color?></td>
									<td ><?php echo $row->quantity?></td>
								</tr>

							<?php
								}elseif($row->typelens=="linzasuyu"){ ?>

									<table style="width:100px;margin:0;margin-left:15px;">
										<tr>
											<th style="font-size:13px;text-align: center;color:#079dbf;font-weight:600">Количество</th>
										</tr>
										<tr>
											<td align="center" style="font-size:13px;"><?php echo $row->quantity?></td>
										</tr>
									</table>

							<?php }elseif($row->typelens=="astiqmat-linzalar"){ ?>

								<tr>
									<th>Оптическая сила</th>
									<th>Цилиндра</th>
									<th>Ось</th>
									<th style="width:110px;">Количество</th>
								</tr>
								<tr>
									<td><?php echo $row->optic_sila?></td>
									<td><?php echo $row->cyl?></td>
									<td><?php echo $row->ax?></td>
									<td ><?php echo $row->quantity?></td>
								</tr>

						<?php	}else{ ?>

							<tr>
								<th>Оптическая сила</th>
								<th style="width:110px;">Количество</th>
							</tr>
							<tr>
								<td><?php echo $row->optic_sila?></td>
								<td ><?php echo $row->quantity?></td>
							</tr>

						<?php	}

						?>
						
					</table>
					<div class="quantity">
						<span><?php echo $row->price ?> <b>M</b></span>
					</div>
				</div>
			</div>

		<?php 
		}

		?>
			</div>

			<div class="finish_bar">
				<div class="finis_card_price">
					<span>Общая сумма:</span>
					<span><?php echo $countrow ?>.00<b>M</b></span>
					<small>+2,00 <b>M</b> доставка</small>
				</div>
				<strong>Общий: <?php echo number_format($toplam) ?>.00 <small style="font-family:JISAZNRegular"><b>M</b></small></strong>
				<a href="<?php echo base_url('ru/adress/'.$row->sessionID)?>" id="btn_pay"><i class="fas fa-cart-arrow-down"></i> Купить продукт</a>
			</div>
			<script src="https://code.jquery.com/jquery-3.4.1.js" ></script>
			<script>
				
			function deleteCard($id){
				var id = $id;
				var URL = $('#url').val();
				$.ajax({
					url:URL+"home/deleteCard/"+id,
					method:'GET',
					data:{'id':id},
					success:function(r){
						$('#boxList').hide();
						location.reload();
					}
				})
			}

			</script>


		<?php

	}else{ ?>
				<div id="freeCard">
					<img id="sebetJPG" src="<?php echo base_url('public/')?>images/sebet.jpg">
					<h2>Нет товаров в корзине...</h2>
				</div>
		<?php }
	}



	public function deleteCard()
	{
		$id = $_GET['id'];
		$where = array(
			'card_id' => $id
		);
		echo $delete = $this->products->delete_Card($where);
	}






	public function login()
	{
		if($this->session->email){

			redirect(base_url());

		}else{

			$data['navbarmenu'] = $this->menu->navbar();
			$data['brands'] = $this->category_model->brands();
			$data['lenstype'] = $this->category_model->lenstype();
			$data['allPro']	= $this->products->view_all();
			$data['allProLimit']	= $this->products->view_all_limit();
			$data['uselens'] = $this->category_model->use_lens();
			$data['onePro'] = $this->products->all_header_menu();
			$where=array(
				'brand_name'=>'Johnson'
			);
			$data['johnson']	= $this->products->view_johnson($where);

			$where=array(
				'sessionID'=>$this->session->sessionID
			);
			$data['shopcount'] = $this->products->get_count($where);
			$data['readcomment'] = $this->process_model->read_cooment();

			$this->load->view('ru/login', $data);

		}
		
	}



	public function brend($brand)
	{
		$data['navbarmenu'] = $this->menu->navbar();
		$data['brands'] = $this->category_model->brands();
		$data['lenstype'] = $this->category_model->lenstype();
		$data['uselens'] = $this->category_model->use_lens();
		$data['allProLimit']	= $this->products->view_all_limit();
		$data['allPro']	= $this->products->view_all();
		$data['onePro'] = $this->products->all_header_menu();
		$where=array(
			'brand_name'=>'Johnson'
		);
		$data['johnson']	= $this->products->view_johnson($where);

		$where = array(
			'brand_name' => $brand
		);

		$data['proBrands']	= $this->products->brands($where);
		$where=array(
			'sessionID'=>$this->session->sessionID
		);
		$data['shopcount'] = $this->products->get_count($where);
		$data['readcomment'] = $this->process_model->read_cooment();


		$this->load->view('ru/brend',$data);
	}



	public function category($category)
	{
		$data['navbarmenu'] = $this->menu->navbar();
		$data['brands'] = $this->category_model->brands();
		$data['lenstype'] = $this->category_model->lenstype();
		$data['uselens'] = $this->category_model->use_lens();
		$data['allProLimit']	= $this->products->view_all_limit();
		$data['allPro']	= $this->products->view_all();
		$data['onePro'] = $this->products->all_header_menu();
		$where=array(
			'brand_name'=>'Johnson'
		);
		$data['johnson']	= $this->products->view_johnson($where);
		$where=array(
			'sessionID'=>$this->session->sessionID
		);
		$data['shopcount'] = $this->products->get_count($where);
		$data['readcomment'] = $this->process_model->read_cooment();

		

		$cat = array(
			'category' => $category
		);

		$data['procategory']= $this->products->lenstype($cat);


		$color = array(
			'type_lens' => $category
		);
		$data['procolor']= $this->products->lenstype($color);

		$this->load->view('ru/category',$data);
	}


	public function addRefreshtoCard()
	{

			$sessionID = $this->session->sessionID;
			$card = array(

					'pro_name'=>$_POST['proName'],
					'pro_image'=>$_POST['proImage'],
					'color'=>$_POST['color'],
					'cyl'=>$_POST['cyl'],
					'ax'=>$_POST['ax'],
					'optic_sila'=>$_POST['sph'],
					'quantity'=>$_POST['quantity'],
					'price' =>$_POST['price'],
					'zakaz_kodu' => $_POST['sifariskodu'],
					'sessionID'=>$sessionID
				);

				$this->db->insert('card', $card);
				redirect(base_url('ru/card'));
			
		
	}


	public function addtoCard()
	{
		$sessionID = $this->session->userdata('sessionID');

			if(isset($_POST['add'])){
				echo 'Hello Regard';

				$card = array(
					'pro_name'=>$_POST['proName'],
					'pro_image'=>$_POST['proImage'],
					'quantity'=>$_POST['quantity_od'],
					'price' =>$_POST['price_od'],
					'typelens' =>$_POST['typelens'],
					'sessionID'=>$sessionID
				);

				$this->db->insert('card', $card);
				redirect(base_url('ru/card'));



			}else{


				if($_POST['price_os']==0.00){

				$card = array(
					'pro_name'=>$_POST['proName'],
					'pro_image'=>$_POST['proImage'],
					'color'=>$_POST['od_color'],
					'cyl'=>$_POST['odcyl'],
					'ax'=>$_POST['odax'],
					'optic_sila'=>$_POST['optik_sila_od'],
					'quantity'=>$_POST['quantity_od'],
					'price' =>$_POST['price_od'],
					'typelens' =>$_POST['typelens'],
					'sessionID'=>$sessionID
				);

				$this->db->insert('card', $card);
				//$this->db->insert('card', $card2);

			}else{

				$card = array(
					'pro_name'=>$_POST['proName'],
					'pro_image'=>$_POST['proImage'],
					'color'=>$_POST['od_color'],
					'cyl'=>$_POST['odcyl'],
					'ax'=>$_POST['odax'],
					'optic_sila'=>$_POST['optik_sila_od'],
					'quantity'=>$_POST['quantity_od'],
					'price' => $_POST['price_od'],
					'typelens' =>$_POST['typelens'],
					'sessionID'=>$sessionID
			);



				$card2 = array(
					'pro_name'=>$_POST['proName'],
					'pro_image'=>$_POST['proImage'],
					'color'=>$_POST['os_color'],
					'cyl'=>$_POST['os_cyl'],
					'ax'=>$_POST['os_ax'],
					'optic_sila'=>$_POST['optik_sila_os'],
					'quantity'=>$_POST['quantity_os'],
					'price' =>$_POST['price_os'],
					'typelens' =>$_POST['typelens'],
					'sessionID'=>$sessionID
				);

				


				$this->db->insert('card', $card);
				$this->db->insert('card', $card2);

			}



		}


			


			
		



		
		
	}










	public function adress($id)
	{
		if($this->session->email){

			$data['navbarmenu'] = $this->menu->navbar();
			$where = array(
				'sessionID'=>$id,
			);
			$data['adress'] = $this->process_model->show_card_item($where);



			$where = array('username'=>$this->session->email);
			$data['user'] = $this->account_model->viewUser($where);

			$data['brands'] = $this->category_model->brands();
			$data['lenstype'] = $this->category_model->lenstype();
			$data['allPro']	= $this->products->view_all();
			$data['allProLimit']	= $this->products->view_all_limit();
			$data['uselens'] = $this->category_model->use_lens();
			$data['onePro'] = $this->products->all_header_menu();
			$where=array(
				'sessionID'=>$this->session->sessionID
			);
			$data['shopcount'] = $this->products->get_count($where);
			$where=array(
				'brand_name'=>'Johnson'
			);
			$data['johnson']	= $this->products->view_johnson($where);

			$count = array(
				'sessionID'	=> $this->session->sessionID
			);

			$data['countrow'] = $this->products->get_sum($count);

			$where = array(
				'username' => $this->session->email
			);
			$data['adres'] = $this->products->viewAdress($where);
			$data['readcomment'] = $this->process_model->read_cooment();

			

			$this->load->view('ru/adress', $data);

		}else{
			redirect(base_url('ru/login'));
		}

		
	}





	public function unregistered_page($sessionID)
	{
		
			$data['navbarmenu'] = $this->menu->navbar();
			$where = array(
				'sessionID'=>$sessionID,
			);

			$data['adress'] = $this->process_model->show_card_item($where);



			$where = array('email'=>$this->session->email);
			$data['user'] = $this->account_model->viewUser($where);

			$data['brands'] = $this->category_model->brands();
			$data['lenstype'] = $this->category_model->lenstype();
			$data['allPro']	= $this->products->view_all();
			$data['allProLimit']	= $this->products->view_all_limit();
			$data['uselens'] = $this->category_model->use_lens();
			$data['onePro'] = $this->products->all_header_menu();
			$where=array(
				'sessionID'=>$this->session->sessionID
			);
			$data['shopcount'] = $this->products->get_count($where);
			$where=array(
				'brand_name'=>'Johnson'
			);
			$data['johnson']	= $this->products->view_johnson($where);

			$count = array(
				'sessionID'	=> $this->session->sessionID
			);

			$data['countrow'] = $this->products->get_sum($count);



			$this->load->view('ru/unregistered_page',$data);
	}











	public function viewsAdressCard()
	{
			
			$data['navbarmenu'] = $this->menu->navbar();
			$result = $this->process_model->view_adress_control($this->session->email);

			$where = array(
				'username' => $this->session->email
			);

			$rows = $this->process_model->view_adress($where);

			$viewData = new stdClass();
			$viewData->rows = $rows;

			if($result==1){ ?>
				
				<div id="adressBoxx">
				<strong>Выберите адрес для доставки</strong>
				<div class="adres_content">

			<?php	foreach ($rows as $row) { ?>
				
				
					<label for="" id="adress_item">
						<div id="item_input">
							<input type="radio" required="" name="selectAdress" id="selectAdress" value="<?php echo $row->adress?>">
						</div>
						<div id="item_body">
							<span>Адрес</span>
							<span><?php echo $row->namesurname?></span>
							<span>/<?php echo $row->phone?>/</span>
							<span><?php echo $row->adress?></span>
						</div>
						<div id="item_footer">
							<a href="javascript::void" onclick="refresh_card('<?php echo $row->adress_id?>');" data-toggle="modal"  data-target=".bd-example-modal-lg-xl-refresh"><i class="mdi mdi-pen"></i> Редактировать</a>

							<a href="<?php echo base_url('home/remove_adress/'.$row->adress_id)?>"><i class="fas fa-trash-alt"></i> Удалить</a>
						</div>
					</label>
					<hr>

					<script src="https://code.jquery.com/jquery-3.4.1.js" ></script>
					<script>
						
					</script>
				

			<?php	}
				echo '</div>
				</div>';


			}else{
				echo '';
			}

			
	}


	public function show_adress($id)
	{
		$where = array(
			'adress_id' =>$id
		);

		$rows = $this->process_model->showAdress($where);
		$viewData = new stdClass();
		$viewData->rows = $rows;

		foreach ($rows as $row) {  ?>
				
	
			<form action="<?php echo base_url('home/updateAdress')?>" method="post" id="adressForm">
       			<table style="padding-left:0;padding-right:0;width:100%">
       				<tr>
       					<td colspan="2">
       						<div class="form-group">
       							<label for="">Адрес</label>
       							<?php
	       							
       								if($this->session->email){
       									echo '<textarea name="adres" class="form-control" id="" cols="10" >'.$row->adress.'</textarea>';
       								}else{ ?>

       									<textarea name="" class="form-control" id="" cols="10" ></textarea>

       								<?php }
       							?>
       							
       						</div>
       					</td>
       				</tr>
       				<tr>
       					<td colspan="2">
       						<div class="form-group">
       							<label for="">Ad/Soyad</label>
       							<?php
	       							
       								if($this->session->email){
       									echo '<input type="text" name="ad_soyad" class="form-control" value="'.$row->namesurname.'">';
       									echo '<input type="hidden" name="email"  value="'.$row->sessionEmail.'">';
       									echo '<input type="hidden" name="id"  value="'.$row->adress_id.'">';
       								}else{ ?>

       									

       								<?php }
       							?>
       						</div>
       					</td>
       				</tr>
       				<tr>
       					<td style="width:50%">
       						<div class="form-group">
       							<label for="">Şəhər</label>
       							<select name="city" class="form-control" id="">
       								<option value="Abşeron">Abşeron</option>
       								<option value="Sumqayıt">Sumqayıt</option>
       								<option value="Bakı" selected="">Bakı</option>
       							</select>
       						</div>
       					</td>
       					<td>
       						<div class="form-group">
       							<label for="">Telefon</label>
       							<input type="text" name="phone" class="form-control" value="<?php echo $row->phone?>">
       						</div>
       					</td>
       				</tr>
       				<tr>
       					<td style="width:50%">
       						<div class="form-group">
       							<label for="">Ölkə</label>
       							<input type="text" class="form-control" value="Azərbaycan" disabled="disabled">
       							<input type="hidden" value="Azərbaycan" name="countri">
       						</div>
       					</td>
       					<td>
       						<div class="form-group">
       							<label for="">Poçt kodu</label>
       							<input type="text" name="postcode" class="form-control" value="<?php echo $row->post_code?>">
       						</div>
       					</td>
       				</tr>
       				<tr>
       					<td colspan="2">
       						<button class="btn btn-primary">Məlumatları yenilə</button>
       					</td>
       				</tr>
       			</table>
       		</form>


		<?php }
	}



	public function updateadress()
	{
		$where = array(
			'adress_id' => $_POST['id']
		);

		$data = array(
			'namesurname' => $_POST['ad_soyad'],
			'phone' => $_POST['phone'],
			'city' => $_POST['city'],
			'post_code' => $_POST['postcode'],
			'adress' => $_POST['adres']
		);

		$update = $this->process_model->updateAdress($data, $where);
		header("Location:" .$_SERVER['HTTP_REFERER']);
	}


	public function remove_adress($id)
	{
		$where = array(
			'adress_id'=>$id
		);

		$remove = $this->process_model->remove($where);
		header('Location:'.$_SERVER['HTTP_REFERER']);
	}


	public function select_pay()
	{
		if($_POST){
			


		if($this->session->email || $this->session->sessionID){

			if(empty($_POST['selectAdress'])){ 
				
				echo 'Bir adres seçin';


			}else{
				
				$data['navbarmenu'] = $this->menu->navbar();
				$where = array(
				'sessionID'=>$this->session->sessionID,
				);
				$data['adress'] = $this->process_model->show_card_item($where);

				$where=array(
					'sessionID'=>$this->session->sessionID
				);
				$data['shopcount'] = $this->products->get_count($where);
				$data['brands'] = $this->category_model->brands();
				$data['lenstype'] = $this->category_model->lenstype();
				$data['allPro']	= $this->products->view_all();
				$data['allProLimit']	= $this->products->view_all_limit();
				$data['uselens'] = $this->category_model->use_lens();
				$data['onePro'] = $this->products->all_header_menu();
				$where=array(
					'brand_name'=>'Johnson'
				);
				$data['johnson']	= $this->products->view_johnson($where);

				$where = array(
					'sessionID' 	=>$this->session->sessionID
				);
				$data['pay_page'] = $this->products->show_Card($where);
				$count = array(
					'sessionID'	=> $this->session->sessionID
				);

				$data['countrow'] = $this->products->get_sum($count);

				$where = array(
					'username' 	=>$this->session->email
				);
				$data['user'] = $this->account_model->viewUser($where);
				$data['readcomment'] = $this->process_model->read_cooment();

				$this->load->view('ru/select_pay', $data);

			}

			

		}else{
			redirect(base_url());
		}

		}else{
			redirect(base_url());
		}

		
	}




	public function finished_card()
	{

		if($this->input->post('selectCard')=="Yerində Ödəmə"){
			sleep(2);
			$number = rand(10000, 99999);

			$where = array(
				'sifaris_kodu' =>$_POST['zakazkodu']
			);
			$refresh = $this->card_model->order_refresh($where);

			for ($i=0; $i < count($_POST['say']); $i++) { 
			
			if($this->session->email){

				$data = array(
					'sifaris_kodu' 	=>'10000'.$number,
					'pro_name' 		=>$_POST['proname'][$i],
					'pro_image' 	=>$_POST['proimage'][$i],
					'lenstype' 		=>$_POST['typelens'][$i],
					'sph' 			=>$_POST['sph'][$i],
					'cyl' 			=>$_POST['cyl'][$i],
					'ax' 			=>$_POST['ax'][$i],
					'color' 		=>$_POST['color'][$i],
					'quantity' 		=>$_POST['quantity'][$i],
					'price' 		=>$_POST['price'][$i],
					'adress' 		=>$_POST['adress'],
					'pay_select' 	=>$_POST['selectCard'],
					'sessionID' 	=>$_POST['sessionID'][$i],
					'sessionEmail' 	=>$_POST['email'],
					'username' 		=>$_POST['user'],
					// 'namesurname'	=>$_POST['username']
				);

			}else{
				$data = array(
					'sifaris_kodu' 	=>'10000'.$number,
					'pro_name' 		=>$_POST['proname'][$i],
					'pro_image' 	=>$_POST['proimage'][$i],
					'lenstype' 		=>$_POST['typelens'][$i],
					'sph' 			=>$_POST['sph'][$i],
					'cyl' 			=>$_POST['cyl'][$i],
					'ax' 			=>$_POST['ax'][$i],
					'color' 		=>$_POST['color'][$i],
					'quantity' 		=>$_POST['quantity'][$i],
					'price' 		=>$_POST['price'][$i],
					'adress' 		=>$_POST['adress'],
					'pay_select' 	=>$_POST['selectCard'],
					'sessionID' 	=>$_POST['sessionID'][$i],
					'username' 		=>$_POST['username'],
				);
			}

			

			

			$insert = $this->process_model->finished($data);
			

			if($insert){
				echo $_POST['selectCard'];
				$where = array(
					'sessionID'=>$this->session->sessionID,
				);
				$this->process_model->delete_card($where);
			}

		}

			if($this->session->email){
				$card = array(
				'sifaris_kodu' 	=>'10000'.$number,
				'namesurname' 	=>$_POST['username'],
				'phone' 		=>$_POST['phone'],
				'adress' 		=>$_POST['adress'],
				'username'		=>$_POST['user'],
				'sessionEmail'	=>$_POST['email'],
				'comments'	=>$_POST['comment']
			);
			}else{
				$card = array(
				'sifaris_kodu' 	=>'10000'.$number,
				'namesurname' 		=>$_POST['username'],
				'phone' 		=>$_POST['phone'],
				'adress' 		=>$_POST['adress'],
				'username'		=>$_POST['username'],
				'old_year'		=>$_POST['oldyear'],
				'comments'		=>$_POST['comment'],
			);
			}
			$insertArxiv = $this->process_model->arxiv($card);

		
			

			

		}else{

		}
		
	}







public function search()
{
        
        $query='';
        if($this->input->post('query'))
        {
            $query = $this->input->post('query');
            $rows = $this->search->filter_search($query);
            echo '<ul id="filter_search">';
            foreach ($rows as $row) 
            { ?>

					<li>
						<span id="s_image"><img src="<?php echo base_url('upload/'.$row->pro_image)?>" alt=""></span>
						<a href="<?php echo base_url('ru/show_detail/'.$row->seflink)?>"><?php echo $row->pro_name?></a>
					</li>

         <?php   }
         echo '</ul>';
        }
        
        
        
    }




    public function order()
    {
    	if($this->session->email){

    		$data['navbarmenu'] = $this->menu->navbar();
			$data['brands'] = $this->category_model->brands();
			$data['lenstype'] = $this->category_model->lenstype();
			$data['allPro']	= $this->products->view_all();
			$data['allProLimit']	= $this->products->view_all_limit();

			$where=array(
				'brand_name'=>'Johnson'
			);
			$data['johnson']	= $this->products->view_johnson($where);

			$where=array(
				'sessionID'=>$this->session->sessionID
			);
			$data['shopcount'] = $this->products->get_count($where);

			$data['uselens'] = $this->category_model->use_lens();
			$data['onePro'] = $this->products->all_header_menu();
			$data['readcomment'] = $this->process_model->read_cooment();

			$where = array(
				'username'=>$this->session->email
			);

			$data['cardView'] = $this->card_model->card_view($where);

			$where = array(
				'username'=>$this->session->email
			);
			$data['userProfile'] = $this->account_model->viewUser($where);


	    	$this->load->view('ru/order',$data);

    	}else{
    		redirect(base_url('ru'));
    	}
    	
    }











// =================== INSERT =============================

	public function create_account()
	{
		sleep(3);

			$sessionUser = array('email' => $this->input->post('username'));
			$this->session->set_userdata($sessionUser);

			if($this->input->post('name')==""){
				echo "Введите ваше имя";
			}elseif($this->input->post('surname')==""){

				echo 'Введите свою фамилию';

			}elseif($this->input->post('username')==""){

				echo 'Введите ваше имя пользователя';

			}elseif($this->input->post('tel')==""){

				echo 'Введите номер телефона';

			}elseif($this->input->post('mail')==""){

				echo 'Пожалуйста, введите ваш адрес электронной почты';

			}elseif($this->input->post('password')==""){

				echo 'Введите пароль';

			}


		else{

			$username = $this->input->post('username');
			$email = $this->input->post('mail');

			if($this->account_model->email_available($email)){

				echo 'Этот почтовый адрес уже используется';

			}elseif($this->account_model->username_available($username)){

				echo "Это имя пользователя уже занято";

			}else{

			

				$data = array(
					'name'	=>ucwords($this->input->post('name')),
					'surname'	=>ucwords($this->input->post('surname')),
					'username'	=>$this->input->post('username'),
					'phone'	=>$this->input->post('tel'),
					'email'	=>$this->input->post('mail'),
					'address'	=>$this->input->post('adress'),
					'password'	=>md5($this->input->post('password')),
					'news'	=>$this->input->post('news')
				);

				//echo $this->input->post('mail');


				$create = $this->account_model->add_account($data);

				echo $create;

			}

		
		}


	}



	public function updateUser()
	{
		$where = array(
			'uid'=>$_POST['uid']
		);

		$data = array(
			'name' => $_POST['name'],
			'surname' => $_POST['surname'],
			'phone' => $_POST['phone'],
			'email' => $_POST['email'],
			'gender' => $_POST['gender'],
			'old_year' => $_POST['day'],
		);

		$this->account_model->user_update($data,$where);
		header('Location:' .$_SERVER['HTTP_REFERER']);

	}



	public function showOrder($id)
	{
		$where = array(
			'shop_id'=>$id
		);

		$rows= $this->card_model->show_order($where);

		foreach ($rows as $row) { ?>
			<div class="modalleft"><img src="<?php echo base_url('upload/'.$row->pro_image)?>" alt=""></div>
			<strong><?php echo $row->pro_name?></strong>
				<div class="modalright">
					<div id="divTable" class="orderTable">
						<span>Оптическая сила</span>
						<span>Цилиндра</span>
						<span>Ось</span>
						<span>Цвет</span>
						<span>Количество</span>
						<span>Цена</span>
					</div>
					<div id="divTable">
						<span><?php echo $row->sph?></span>
						<span><?php echo $row->cyl?></span>
						<span><?php echo $row->ax?></span>
						<span><?php echo $row->color?></span>
						<span><?php echo $row->quantity?></span>
						<span><?php echo $row->price?></span>
					</div>
				</div>
	<?php	}
	}




	// ================= LogIN / LogOut ========================


	public function signin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$result = $this->account_model->log_in($username, md5($password) );

		if($result==1){
			$sessionUser = array('email' => $this->input->post('username'));
			$this->session->set_userdata($sessionUser);
			//redirect(base_url());
			echo "ok";
		}else{
			echo 'İstifadəçi adı ve ya Şifrə yanlışdır';
		}
	}


	public function logout()
	{
		session_destroy();
		redirect(base_url('ru'));
	}






	public function addAdress()
	{


		$data = array(
			'username'	=>$this->input->post('username'),
			'sessionEmail'	=>$this->input->post('email'),
			'namesurname'	=>$this->input->post('ad_soyad'),
			'phone'			=>$this->input->post('phone'),
			'city'			=>$this->input->post('city'),
			'countri'		=>$this->input->post('countri'),
			'post_code'		=>$this->input->post('postcode'),
			'adress'		=>$this->input->post('adres')
		);

		$insert = $this->process_model->add_adress($data);
		header('Location:'.$_SERVER['HTTP_REFERER']);
	}



	public function call_query()
	{
		
			$this->load->library('form_validation');

			$this->form_validation->set_rules('ad', 'Ad', 'required');
			$this->form_validation->set_rules('soyad', 'Soyad', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('subject', 'Subject', 'required');
			$this->form_validation->set_rules('phone', 'Phone', 'required');

			if ($this->form_validation->run() == FALSE)
                {
                       echo 'Xeta';
                }
                else
                {
                       $data = array(
							'name'  	=>$_POST['ad'],
							'surname'  	=>$_POST['soyad'],
							'email'  	=>$_POST['email'],
							'subject'  	=>$_POST['subject'],
							'phone'  	=>$_POST['phone'],
							'text'  	=>$_POST['text'],
						);

						$insert = $this->process_model->call_center($data);
						echo $insert;
                }

			
			
		
		
	}



	public function addComment()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('proID','ProID','required');
		$this->form_validation->set_rules('ad','Ad','required');
		$this->form_validation->set_rules('description','Description','required');


		if ($this->form_validation->run() == FALSE){
				echo "Xəta";
		}else{

			$data = array(
				'pro_id' 	=> $this->input->post('proID'),
				'name' 	=> ucfirst($this->input->post('ad')),
				'text' 	=> $this->input->post('description'),
			);

			echo $insert = $this->process_model->add_comment($data);

		}

		
	}




	public function kompaniya()
	{
		$data['navbarmenu'] = $this->menu->navbar();
		$data['brands'] = $this->category_model->brands();
		$data['lenstype'] = $this->category_model->lenstype();
		$data['allPro']	= $this->products->view_all();
		$data['allProLimit']	= $this->products->view_all_limit();
		$where=array(
			'brand_name'=>'Johnson'
		);
		$data['johnson']	= $this->products->view_johnson($where);

		$where=array(
			'sessionID'=>$this->session->sessionID
		);
		$data['shopcount'] = $this->products->get_count($where);

		$data['uselens'] = $this->category_model->use_lens();
		$data['onePro'] = $this->products->all_header_menu();
		$data['company'] = $this->process_model->read_company();
		$data['readcomment'] = $this->process_model->read_cooment();



		$this->load->view('ru/kompaniya', $data);
	}


	public function add_wishing()
	{
		if($this->session->email){
			$data = array(
				'user_email'=>$this->session->email,
				'pro_id' 	=>$_POST['id'],
				'activation' =>1
			);
			$insert = $this->products->addWishing($data);
			
			echo $insert;
		}else{

			redirect(base_url('login'));
		}
		
	}



	public function bookmark()
	{

		
		if($this->session->email){
			$data['navbarmenu'] = $this->menu->navbar();
			$data['brands'] = $this->category_model->brands();
			$data['lenstype'] = $this->category_model->lenstype();
			$data['allPro']	= $this->products->view_all();
			$data['allProLimit']	= $this->products->view_all_limit();

			

			$where=array(
				'brand_name'=>'Johnson'
			);
			$data['johnson']	= $this->products->view_johnson($where);

			$where=array(
				'sessionID'=>$this->session->sessionID
			);
			$data['shopcount'] = $this->products->get_count($where);

			$data['uselens'] = $this->category_model->use_lens();
			$data['onePro'] = $this->products->all_header_menu();

			$where = array(
				'user_email'=>$this->session->email
			);
			$data['readwishing'] = $this->products->readWishing($where);
			$data['readcomment'] = $this->process_model->read_cooment();

			$this->load->view('ru/bookmark',$data);

		}else{
			redirect(base_url('ru/login'));
		}
		

				

	}

	public function deletebookmark($id)
	{	
		$where = array(
			'pro_id' =>$id
		);

		$delete = $this->products->deleteWishing($where);
		
		redirect(base_url('ru/bookmark'));
	}












}





?>