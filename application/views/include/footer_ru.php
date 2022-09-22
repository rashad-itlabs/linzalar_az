	<div class="footer">
		<div class="container mt-3">
			<div class="row">
				<div class="col-md-3">
					<h5>ПО ТИПУ</h5>
					<ul>
						<?php
							foreach ($lenstype as $row) { ?>
								<li><a href="<?php echo base_url('ru/category/'.$row->type_seflink)?>"><?php echo $row->lens_name_ru?></a></li>
						<?php }
						?>
					</ul>

					<h5>Johnson & Johnson</h5>
					<ul>
						<?php
							foreach ($johnson as $row) { ?>
								<li><a href="<?php echo base_url('ru/show_detail/'.$row->seflink)?>"><?php echo $row->pro_name?></a></li>
						<?php }
						?>
					</ul>
				</div>
				<div class="col-md-3">
					<h5>Alcon (Ciba Vision)</h5>
					<ul>
						<?php
							foreach ($allProLimit as $row) { ?>
								<li><a href="<?php echo base_url('ru/show_detail/'.$row->seflink)?>"><?php echo $row->pro_name?></a></li>
						<?php }
						?>
					</ul>
				</div>
				<div class="col-md-3">
					<h5>Оптические оправы</h5>
					<ul>
						<?php
							foreach ($uselens as $row) { ?>
								<li><a href=""><?php echo $row->use_lens_name?></a></li>
						<?php }
						?>
					</ul>
					
					<h5>Оптические линзы</h5>
					<ul>
						<li><a href="">Rimlux(1.5, 1.61, 1.67, 1.74)</a></li>
					</ul>
					<hr>
					<ul>
						<img src="<?php echo base_url('public/')?>images/icons/visa.png" alt="">&nbsp;&nbsp;
						<img src="<?php echo base_url('public/')?>images/icons/mastercard.png" alt="">
					</ul>
				</div>
				<div class="col-md-3">
					<h5>ПО ПРОИЗВОДИТЕЛЯМ</h5>
					<ul>
						<?php
							foreach ($brands as $row) { ?>
								<li><a href="<?php echo base_url('ru/brend/'.$row->marka_seflink)?>"><?php echo $row->marka_name?></a></li>
						<?php }
						?>
					</ul>

					<h5>Аксессуары и средства по уходу</h5>
					<ul>
						<li><a href="<?php echo base_url('ru/category/linza-suyu')?>">Растворы для линз</a></li>
						<li><a href="<?php echo base_url('ru/category/goz-damcisi')?>">Капли для глаз</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="createrCompany">
		
	</div>
<span id="up"><i class="fas fa-chevron-up"></i></span>	




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="<?php echo base_url('public/')?>js/bootstrap.min.js"></script>

<!-- <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script> -->

<!-- <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script> -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="<?php echo base_url('public/')?>js/myscript_ru.js"></script>
<script src="<?php echo base_url('public/')?>js/mobile.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url('public/')?>js/slick.min.js"></script>
<script src="<?php echo base_url('public/')?>js/sweetalert.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
<script>
$( function() {
    $( "#datepicker" ).datepicker();
  });
</script>


<script>
$(document).ready(function(){
  $('.slickSlider').slick({
      infinite: true,
	  slidesToShow:2,
	  slidesToScroll: 1,
	  dots:true,
	  arrows:false,
	  responsive: [
        {
          breakpoint: 0,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 800,
          settings: {
          	slidesToShow: 1,
          }
        }

      ]



  });
});
</script>

</body>
</html>