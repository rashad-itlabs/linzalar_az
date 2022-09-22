<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Linzalar.az</title>
	<link rel="icon" type="image/x-icon" href="<?=base_url('public/images/')?>favicon.ico">
	<link rel="stylesheet" href="<?php echo base_url('public/')?>css/style.css">
	<link rel="stylesheet" href="<?php echo base_url('public/')?>css/mobile.css">
	<link rel="stylesheet" href="//cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url('public/')?>css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url('public/')?>css/slick.css">
	<link rel="stylesheet" href="<?php echo base_url('public/')?>css/slick-theme.css">
	<link rel="stylesheet" href="<?php echo base_url('public/')?>css/sweetalert.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
</head>
<body class="open" style="background:#eeeeee">
<input type="hidden" id="url" value="<?php echo base_url()?>">
<?php
	$sessionID = $this->session->userdata('sessionID');
	if(!isset($sessionID) or $sessionID=="" or empty($sessionID)){
		$chars='qazxswedcvfrtgbnhyujmkiolp1234567890QAZXSWEDCVFRTGBNHYUJMKIOLP';
		$max=25;
		$size=strlen($chars)-1;
		$session=null;
		while ($max--)
			$session.=$chars[rand(0,$size)];
			$newdata = array(
				'sessionID'   =>$session,
				'logged_in'   =>TRUE
			);
		$this->session->set_userdata($newdata);
	}

?>


<div class="mobileHeader">
	<a href="https://api.whatsapp.com/send?phone=++994(51)636-00-36&text=Salam" id="w_app">
		<img src="<?php echo base_url('public/')?>images/icons/whatsapp.png" alt="">
	</a>

	<div class="overlay_bg"></div>
	<div class="draver">
		<div class="dr_menu" style="background-image: url('https://www.laconiaeye.com/wp-content/uploads/contact-lenses.jpg');">
			<div class="antireflection"></div>
			<div class="profile_box">
				<?php  if($this->session->email) { ?>
					<div class="pro_image"></div>
				<?php	}else{ ?>

				<?php	}

				?>
				
				<span><?php echo $this->session->email?></span>
			</div>
		</div>
		<ul id="draverMenu">
			<?php  if($this->session->email) { ?>
				<li><a href="<?php echo base_url('ru/order')?>"><span><i class="fas fa-dolly"></i></span> Моя корзина</a></li>
			<?php	}else{ ?>

			<?php	}

			?>
		</ul>
		<ul id="draverMenu" class="draverMenu">
			<li><a href="javascript::void"><span><i class="fas fa-globe-americas"></i></span> Ru/Az</a>
				<ul id="mod-dropdown">
					<li><a href="<?php echo base_url()?>">Az</a></li>
				</ul>
			</li>
			<li ><a href="javascript::void"><span><i class="fas fa-globe"></i></span> ПО ПРОИЗВОДИТЕЛЯМ</a></li>
			<?php
			foreach ($brands as $row) {
			 ?>
				<li><a href="<?php echo base_url('ru/brend/'.$row->marka_seflink)?>"><?php echo $row->marka_name?></a></li>
			<?php }
			?>
			
			<li><a href="javascript::void"><span><i class="far fa-circle"></i></span> ПО ТИПУ</a></li>
			<?php
				foreach ($lenstype as $row) { ?>
					<li><a href="<?php echo base_url('ru/category/'.$row->type_seflink)?>"><?php echo $row->lens_name_ru?></a></li>
			<?php }
			?>
			
			<li><a href="<?php echo base_url('ru/category/linza-suyu')?>"><span><i class="fas fa-tint"></i></span> Раствор для линз</a></li>
			<li><a href="<?php echo base_url('category/goz-damcisi')?>"><span><i class="fas fa-eye-dropper"></i></span> Капли для глаз</a></li>
			<li><a href="javascript::void"><span><i class="far fa-clock"></i></span> Оптические оправы</a></li>
			<?php
				foreach ($uselens as $row) { ?>
					<li><a href=""><?php echo $row->use_lens_name?></a></li>
			<?php }
			?>
			<li><a href="<?php echo base_url('ru/bookmark')?>"><span><i class="far fa-star"></i></span> Избранноеar</a></li>
			<li><a href="<?php echo base_url('ru/kompaniya')?>"><span><i class="fas fa-tag"></i></span> Компания</a></li>
			
			<?php  if($this->session->email) { ?>
				<li><a href="<?php echo base_url('ru/logout')?>"><span><i class="fas fa-sign-out-alt"></i></span> Выход</a></li>
			<?php	}else{ ?>
				<li><a href="<?php echo base_url('ru/login')?>"><span><i class="fas fa-sign-in-alt"></i></span> Войти</a></li>
			<?php	}

			?>
			
		</ul>

	<div class="mob_social">
		<a href="https://www.facebook.com/linzalaraz/"><i class="fab fa-facebook-f"></i></a>
		<a href="https://www.instagram.com/linzalar.az/?hl=ru"><i class="fab fa-instagram"></i></a>
		<a href="#"><i class="fab fa-twitter"></i></a>
		<a href="#"><i class="fab fa-youtube"></i></a>
	</div>

	</div>

	<div class="mobHeader">
		<button id="openSidebar"><i class="fas fa-bars"></i></button>
		<div id="logo"><a href="<?php echo base_url('ru')?>"><img src="<?php echo base_url('public/')?>images/yatay.jpg" alt=""></a></div>
		<div id="header_link">
			<?php 
			if($this->session->email){ ?>

			<?php }else{ ?>

				<a href="#" data-toggle="modal" data-target="#exampleModal"><img src="<?php echo base_url('public/')?>images/icons/adduser.png" alt=""></a>

		<?php }
			?>
			
			<a href="<?php echo base_url('ru/card')?>"><img src="<?php echo base_url('public/')?>images/icons/shopping-cart.png" alt="">
				<span class="badge badge-danger mob-badge"><?php echo $shopcount ?></span>
			</a>
		</div>
	</div>

</div>


	<div class="dropAntireflection"></div>
	<div class="call_me">
		<a href="" data-toggle="modal" data-target=".bd-example-modal-lg">
			<img src="<?php echo base_url('public/')?>images/call_me_ru.jpg" alt="">
		</a>
	</div>
	<div class="w_app">
		<span><i class="fab fa-whatsapp"></i></span>
		
		<a style="color:#fff;" href="https://api.whatsapp.com/send?phone=++994(51)636-00-36&text="><b>+99451 636 00 36</b></a>
	</div>

	<div class="social_header">
		<div class="s_box"><a href="https://www.facebook.com/linzalaraz/"><i class="fab fa-facebook-f"></i></a></div>
		<div class="s_box"><a href="https://www.instagram.com/linzalar.az/?hl=ru"><i class="fab fa-instagram"></i></a></div>
		<div class="s_box"><a href="#"><i class="fab fa-twitter"></i></a></div>
		<div class="s_box"><a href="#"><i class="fab fa-youtube"></i></a></div>
	</div>
	<div id="call_phone_header" style="background:#fff;">
	    <div id="call-phone" style="text-align:right;width:1110px;margin:auto;font-size:27px;font-weight:600;color:#079dbf;"><i class="fas fa-phone-volume"></i> +994516360036</div>
	</div>
	<header>
		<div class="dcb_header">
			<div id="dcb_items">
				<div id="logo">
					<a href="<?php echo base_url('ru')?>"><img src="<?php echo base_url('public/')?>images/yatay.jpg" alt=""></a>
				</div>
			</div>
			<div id="dcb_items">
					<input type="text" id="myInput" class="form-control" placeholder="Поиск">

				<span id="icon-search"><ion-icon name="search"></ion-icon></span>
				<div id="filter">
					
				</div>
			</div>
			<div id="dcb_items">
				<div class="registration">
					<?php
						if($this->session->email){ ?>
							<div class="dcb_dropdown_menu">
								<div class="fixedbox"></div>
								<a href="javascript::void" id="dcbdropdownMenuLink">
									<span id="svg"><img src="<?php echo base_url('public/')?>images/icons/user.png" alt=""></span>
									<?php echo $this->session->email?>
								</a>
							</div>
							<div class="profileDropdown" data-labelable="dcbdropdownMenuLink">
								<a href="<?php echo base_url('ru/order')?>"><i class="fas fa-dolly"></i> Моя корзина</a>
								<div class="dropdown-divider"></div>
								<a href="<?php echo base_url('ru/logout')?>"><i class="fas fa-sign-out-alt"></i> Выход</a>
							</div>

							
							
						<?php }else{ ?>

							<a href="" data-toggle="modal" data-target="#exampleModal">
								<span id="svg"><img src="<?php echo base_url('public/')?>images/icons/adduser.png" alt=""></span>
								Регистрация
							</a>
							<a href="<?php echo base_url('ru/login')?>">
								<span id="svg"><img src="<?php echo base_url('public/')?>images/icons/login.png" alt=""></span>
								Войти
							</a>

					<?php	}
					?>
					
					<a href="<?php echo base_url('ru/card')?>">
						<span id="svg"><img src="<?php echo base_url('public/')?>images/icons/shopping-cart.png" alt=""></span>
						Корзина
						<span class="badge badge-pill badge-danger"><?php echo $shopcount ?></span>
					</a>
				</div>
			</div>
		</div>
	</header>
	<div class="dcb_navbar dropmenu" id="navbar">
		<div class="dcb-nav">
			<ul id="dcb_menu">
				<li><a href="javascript::void" id="dcb_active" dropdown-toggle  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-format-list-bulleted"></i>&nbsp; Все продукты</a></li>
				<?php 
					foreach ($navbarmenu as $key) { 

					?>
						<li class="<?php echo active_link('ru/category/'.$key->seflink)?>"><a href="<?php echo base_url('ru/category/'.$key->seflink)?>"><?php echo $key->menu_name_ru?></a></li>
				<?php	}
				?>
				<li><a href="<?php echo base_url('ru/kompaniya')?>">Компания</a></li>
			</ul>
			<div class="dcb_language">
				<div class="btn-group">
				  <a style="cursor:pointer;" id="lang" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Ru <i class="fas fa-chevron-down"></i>
				  </a>
				  <div class="dropdown-menu">
				    <a class="dropdown-item" href="<?php echo base_url()?>">Az</a>
				  </div>
				</div>
			</div>
			<div class="dcbDropdownMenu" >
				<div class="dropMenu">
					<div class="row" style="margin-right:0">
						<div class="col-md-8 dcb_alt_category">
							<div class="row">
								<div class="col-md-4">
									<ul id="dropMenu_list">
										<li class="disabled">ПО БРЕНДАМ</li>
										<?php
											foreach ($allProLimit as $row) { ?>
												<li><a href="<?php echo base_url('ru/show_detail/'.$row->seflink)?>"><?php echo $row->pro_name?></a></li>
										<?php }
										?>
									</ul>
								</div>
								<div class="col-md-4">
									<ul id="dropMenu_list">
										<li class="disabled">Johnson & Johnson</li>
										<?php
											foreach ($johnson as $row) { ?>
												<li><a href="<?php echo base_url('ru/show_detail/'.$row->seflink)?>"><?php echo $row->pro_name?></a></li>
										<?php }
										?>
									</ul>
									<ul id="dropMenu_list">
										<li class="disabled">ПО ТИПУ</li>
										<?php
											foreach ($lenstype as $row) { ?>
												<li><a href="<?php echo base_url('ru/category/'.$row->type_seflink)?>"><?php echo $row->lens_name_ru?></a></li>
										<?php }
										?>
									</ul>
								</div>
								<div class="col-md-4">
									<ul id="dropMenu_list">
										<li class="disabled">Оптические линзы</li>
										<li><a href="">Rimlux(1.5, 1.61, 1.67, 1.74)</a></li>
									</ul>
									<ul id="dropMenu_list">
										<li class="disabled">ПО ПРОИЗВОДИТЕЛЯМ</li>
										<?php
											foreach ($brands as $row) { ?>
												<li><a href="<?php echo base_url('ru/brend/'.$row->marka_seflink)?>"><?php echo $row->marka_name?></a></li>
										<?php }
										?>
									</ul>

									<ul id="dropMenu_list">
										<li class="disabled">Оптические оправы</li>
										<?php
											foreach ($uselens as $row) { ?>
												<li><a href=""><?php echo $row->use_lens_name?></a></li>
										<?php }
										?>
									</ul>
								</div>
							</div>
						</div>

						<?php
							foreach ($onePro as $row) { 
									$row->pro_small_text_ru = substr($row->pro_small_text_ru, 0, 61);
								?>

								<div class="col-md-4 dcp_Product">
									<div class="card" style="text-align:center;width: 18rem;margin-left:15px;">
									  <img style="width:50%;margin:auto" src="<?php echo base_url('upload/'.$row->pro_image)?>" class="card-img-top" alt="...">
									  <h6 style="font-weight:700;color:#12127b"><?php echo $row->pro_name?></h6>
									  <div class="card-body">
									    <p cstyle="margin:10px;">
									    	<?php echo $row->pro_small_text_ru?>
									    </p>
									  </div>
									  <span><?php echo $row->pro_price?> <span id="azn">M</span></span>
									  <a href="<?php echo base_url('ru/show_detail/'.$row->seflink)?>" class="btn btn-primary"><i class="fas fa-cart-plus"></i> Корзина</a>
									</div>
								</div>
								
						<?php }
						?>
						
					</div>
				</div>
			</div>
			
		</div>
	</div>


	<!-- Modal account-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      	<span id="login-icon"><i class="fas fa-user-plus"></i></span>
        <h5 class="modal-title" id="exampleModalLabel">Cоздать новый аккаунт</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="form-account" action="" method="post">
      <div class="modal-body">
        <div class="form-group">
        	<span id="form-icon"><i class="fas fa-user-circle"></i></span>
        	<input type="text" name="name" required="required" class="form-control" placeholder="Имя">
        </div>
        <div class="form-group">
        	<span id="form-icon"><i class="fas fa-caret-right"></i></span>
        	<input type="text" name="surname" required="required" class="form-control" placeholder="Фамилия">
        </div>
        <div class="form-group">
        	<span id="form-icon"><i class="fas fa-caret-right"></i></span>
        	<input type="text" name="username" class="form-control" placeholder="Имя пользователя">
        </div>
        <div class="form-group">
        	<span id="form-icon"><i class="fas fa-phone"></i></span>
        	<input type="text" name="tel" class="form-control" placeholder="Телефон">
        </div>
        <div class="form-group">
        	<span id="form-icon"><i class="fas fa-envelope"></i></span>
        	<input type="text" name="mail" class="form-control" placeholder="Емайл">
        </div>
        <div class="form-group">
        	<span id="form-icon"><i class="fas fa-map-marker-alt"></i></span>
        	<input type="text" name="adress" class="form-control" placeholder="Адрес">
        </div>
        <div class="form-group">
        	<span id="form-icon"><i class="fas fa-key"></i></span>
        	<input type="password" name="password" class="form-control" placeholder="Пароль">
        </div>
        <div class="form-group">
        	<label>Я хочу быть в курсе специальных кампаний</label>
        	<br>
			<input 	type="radio" name="news" value="Bəli"> <small>Да</small>
			&nbsp;
			<input  type="radio" name="news" checked="checked" value="Yox"> <small>Нет</small>
		</div>
        <div class="form-group">
        	<button class="btn btn-primary" id="btn_register">Создать аккаунт</button>
        	
        </div>
        <small>Если у вас есть регистрация тогда <a href="<?php echo base_url('ru/login')?>">Войти</a> </small>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal for Callme -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header">
        <h3>Позвоним тебе</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('home/call_query')?>" method="post">
      <table id="callQuery">
      	<tr>
      		<td>
      			<div class="form-goup">
      				<label for="">Имя <span style="color:red">*</span></label>
      				<input type="text" name="ad"  class="form-control">
      			</div>
      		</td>
      		<td>
      			<div class="form-goup">
      				<label for="">Фамилия <span style="color:red">*</span></label>
      				<input type="text" name="soyad"  class="form-control">
      			</div>
      		</td>
      	</tr>
      	<tr>
      		<td colspan="2">
      			<div class="form-goup">
      				<label for="">Емайл <span style="color:red">*</span></label>
      				<input type="email"  name="email"  class="form-control">
      			</div>
      		</td>
      	</tr>
      	<tr>
      		<td>
      			<div class="form-goup">
      				<label for="">Тема <span style="color:red">*</span></label>
      				<input type="text"  name="subject" class="form-control">
      			</div>
      		</td>
      		<td>
      			<div class="form-goup">
      				<label for="">Телефон <span style="color:red">*</span></label>
      				<input type="tel"  name="phone" class="form-control">
      			</div>
      		</td>
      	</tr>
      	<tr>
      		<td colspan="2">
      			<div class="form-goup">
      				<label for="">Сообщения </label>
      				<textarea name="text" id="" cols="30" rows="5" class="form-control"></textarea>
      			</div>
      		</td>
      	</tr>
      	<tr>
      		<td colspan="2">
      			<div class="form-goup">
      				<br>
      				<button id="send_call_ru" class="btn btn-primary">Отправить</button>
      			</div>
      		</td>
      	</tr>
      </table>
      </form>
    </div>
  </div>
</div>