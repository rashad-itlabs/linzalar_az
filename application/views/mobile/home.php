<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=0">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo base_url('public/')?>css/mobile.css">
	<link rel="stylesheet" href="<?php echo base_url('public/')?>css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url('public/')?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url('public/')?>css/slide-and-swipe-menu.css">
	<link rel="stylesheet" href="//cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
</head>
<body class="mob_body">
<a href="" id="w_app">
	<img src="<?php echo base_url('public/')?>images/icons/whatsapp.png" alt="">
</a>

<div class="overlay_bg"></div>
<div class="draver">
	<div class="dr_menu" style="background-image: url(<?php echo base_url('public/')?>images/texture.jpg);">
		<div class="profile_box">
			<div class="pro_image"></div>
			<span>Resad.A</span>
		</div>
	</div>
	<ul id="draverMenu">
		<li><a href=""><span><i class="fas fa-globe"></i></span> Markalar</a></li>
		<li><a href=""><span><i class="far fa-circle"></i></span> Linza növləri</a></li>
		<li><a href=""><span><i class="far fa-clock"></i></span> İstifadə aralığına görə</a></li>
		<li><a href=""><span><i class="far fa-star"></i></span> Seçilmiş Məhsullar</a></li>
		<li><a href=""><span><i class="fas fa-percent"></i></span> Endirimli Linzalar</a></li>
		<li><a href=""><span><i class="fas fa-tag"></i></span> Kampaniyalar</a></li>
		<li><a href=""><span><i class="fas fa-tint"></i></span> Linza Suları</a></li>
	</ul>



</div>

	<div class="mobHeader">
		<button id="openSidebar"><i class="fas fa-bars"></i></button>
		<div id="logo"><img src="<?php echo base_url('public/')?>images/top_logo.jpg" alt=""></div>
		<div id="header_link">
			<a href="#" data-toggle="modal" data-target="#exampleModalAccount"><img src="<?php echo base_url('public/')?>images/icons/adduser.png" alt=""></a>
			<a href="<?php echo base_url('card')?>"><img src="<?php echo base_url('public/')?>images/icons/shopping-cart.png" alt=""></a>
		</div>
	</div>

<!-- account -->
<!-- Modal -->
<div class="modal fade" id="exampleModalAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
      	<span id="acc_ikon"><i class="fas fa-user-alt"></i></span>
        <h5 style="width:100%; display: block;">Yeni qeydiyyat</h5>
        <hr>
        <form action="">
	        <div class="form-group">
	        	<input type="text" class="form-control" placeholder="Ad/Soyad">
	        </div>
	        <div class="form-group">
	        	<input type="tel" class="form-control" placeholder="Telefon">
	        </div>
	        <div class="form-group">
	        	<input type="email" class="form-control" placeholder="@email.com">
	        </div>
	        <div class="form-group">
	        	<input type="email" class="form-control" placeholder="Ünvan">
	        </div>
	        <div class="form-group">
	        	<input type="email" class="form-control" placeholder="Şifrə">
	        </div>
	        <div class="form-group">
	        	<input type="email" class="form-control" placeholder="Təkrar şifrə">
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Bağla</button>
	      </div>
      </form>
      <small style="margin:10px;">Qeydiyyatınız var isə <a href="">daxil olun</a></small>
    </div>
  </div>
</div>
<!-- account -->

	<div class="search_box">
		<form action="">
			<span><i class="fas fa-search"></i></span>
			<input type="text" class="form-control" placeholder="Saytda axtar...">
		</form>
	</div>

	<div id="mob_info"></div>

	<div id="slider">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="<?php echo base_url('public/')?>images/slide1.jpg" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="<?php echo base_url('public/')?>images/slide2.jpg" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="<?php echo base_url('public/')?>images/slide1.jpg" class="d-block w-100" alt="...">
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>


	<div class="container">
		<div class="product_category">
			<div class="product_box">
				<h5>Gundelik linzalar <span><i class="fas fa-arrow-circle-down"></i></span> <a href="">Hamısı</a></h5>
				<div class="product_items">
					<div class="glider">
						<?php
							for ($i=0; $i < 6; $i++) { ?>

								<div class="glider_slider">
									<div class="product_image">
										<img src="<?php echo base_url('public/')?>images/oasys-transitions.jpg" alt="">
									</div>
									<div class="product_title">
										<span>Air Optix Plus HydraGlyde</span>
									</div>
									<div class="product_price">
										<span>35.00 Azn</span>
									</div>
								</div>

							<?php	
						}
							?>
					</div>
				</div>
			</div>

			<div class="product_box">
				<h5>Rengli linzalar <span><i class="fas fa-arrow-circle-down"></i></span> <a href="">Hamısı</a></h5>
				<div class="product_items">
					<div class="glider">
						<?php
							for ($i=0; $i < 6; $i++) { ?>

								<div class="glider_slider">
									<div class="product_image">
										<img src="<?php echo base_url('public/')?>images/oasys-transitions.jpg" alt="">
									</div>
									<div class="product_title">
										<span>Air Optix Plus HydraGlyde</span>
									</div>
									<div class="product_price">
										<span>35.00 Azn</span>
									</div>
								</div>

							<?php	
						}
							?>
					</div>
				</div>
			</div>

			<div class="product_box">
				<h5>Astigmat linzalar <span><i class="fas fa-arrow-circle-down"></i></span><a href="">Hamısı</a></h5>
				<div class="product_items">
					<div class="glider">
						<?php
							for ($i=0; $i < 6; $i++) { ?>

								<div class="glider_slider">
									<div class="product_image">
										<img src="<?php echo base_url('public/')?>images/oasys-transitions.jpg" alt="">
									</div>
									<div class="product_title">
										<span>Air Optix Plus HydraGlyde</span>
									</div>
									<div class="product_price">
										<span>35.00 Azn</span>
									</div>
								</div>

							<?php	
						}
							?>
					</div>
				</div>
			</div>


			<div class="product_box">
				<h5>Optik çərçivələr <span><i class="fas fa-arrow-circle-down"></i></span><a href="">Hamısı</a></h5>
				<div class="product_items">
					<div class="glider">
						<?php
							for ($i=0; $i < 6; $i++) { ?>

								<div class="glider_slider">
									<div class="product_image">
										<img src="https://www.ochkov.net/do/images/2019/07/09/131656.product.9669.jpg" alt="">
									</div>
									<div class="product_title">
										<span>Air Optix Plus HydraGlyde</span>
									</div>
									<div class="product_price">
										<span>35.00 Azn</span>
									</div>
								</div>

							<?php	
						}
							?>
					</div>
				</div>
			</div>

			<div class="product_box">
				<h5>Linza suları <span><i class="fas fa-arrow-circle-down"></i></span><a href="">Hamısı</a></h5>
				<div class="card">
					<img style="width:70%;margin:auto" src="http://linzalar.az/content/iblocks/files/goods/2018/Jul/279/Regard_60_i_100.jpg" alt="">
					<hr>
					<h4>REGARD 100ml </h4>
					<strong>12 <b id="azn">M</b></strong>
					<div id="more">
						<button id="btn_addtocard"><i class="fas fa-shopping-cart"></i></button>
						<button class="btn" id="btnprimary">Ətraflı</button>
					</div>
				</div>
			</div>


		</div>

		<div class="brandBox">
			<div id="brand_col" class="columBrand">
				<img src="https://cdn.lensmarket.com/sablon/lensmarket6/images/img-brand-johnson.png" alt="">
			</div>
			<div id="brand_col" class="columBrand">
				<img src="https://cdn.lensmarket.com/sablon/lensmarket6/images/img-brand-ciba.png" alt="">
			</div>
			<div id="brand_col" class="columBrand">
				<img src="https://cdn.lensmarket.com/sablon/lensmarket6/images/img-brand-cooper.png" alt="">
			</div>
			<div id="brand_col" class="columBrand">
				<img src="https://cdn.lensmarket.com/sablon/lensmarket6/images/img-brand-bausch.png" alt="">
			</div>
			<div id="brand_col" class="columBrand">
				<img src="https://cdn.lensmarket.com/sablon/lensmarket6/images/img-brand-sauflon.png" alt="">
			</div>
			<div id="brand_col" class="columBrand">
				<img src="<?php echo base_url('public/')?>images/essilor.jpg" alt="">
			</div>
		</div>

		<div id="socal_link">
			<div class="l_links">
				<a href=""><i class="fab fa-facebook-f"></i></a>
			</div>
			<div class="l_links">
				<a href=""><i class="fab fa-twitter"></i></a>
			</div>
			<div class="l_links">
				<a href=""><i class="fab fa-instagram"></i></a>
			</div>
			<div class="l_links">
				<a href=""><i class="fab fa-youtube"></i></a>
			</div>
		</div>






<div id="call">
	<a href=""><i class="fas fa-phone"></i></a>
</div>




</div>
<!-- end container -->


<!-- 	<nav>
        sdcdfcdfcdfs
    </nav>
    <main>
        [...]
        <a class="ssm-toggle-nav" href="#" title="Open / close">Open / close</a>
    </main>
    <div class="ssm-overlay ssm-toggle-nav">Menu</div> -->



<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



<script src="<?php echo base_url('public/')?>js/mobile.js"></script>
<script src="<?php echo base_url('public/')?>js/jquery.touchSwipe.js"></script>
<script src="<?php echo base_url('public/')?>js/jquery.slideandswipe.js"></script>


</body>
</html>