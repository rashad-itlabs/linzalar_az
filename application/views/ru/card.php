<?php $this->load->view('include/header_ru')?>

<div class="container" style="padding-left:0;">	

	<div class="content">
		<div class="card_header">
			<div class="c_yol">
				<span id="firstspan" class="c_activ">1</span>
				<span>Корзина</span>
			</div>
			<div class="c_yol">
				<span id="firstspan">2</span>
				<span>Адрес для доставки</span>
			</div>
			<div class="c_yol">
				<span id="firstspan">3</span>
				<span>Варианты оплаты</span>
			</div>
			<div class="c_yol">
				<span id="firstspan">4</span>
				<span>Завершить ваш заказ</span>
			</div>
		</div>
	</div><!--end content -->

	<div class="card_content">

		
	</div>


</div><!-- end container -->
<script
			  src="https://code.jquery.com/jquery-3.4.1.js"
			  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous"></script>
<script>
	$(document).ready(function(){
		var URL = $('#url').val();
		$.ajax({
			url:"<?php echo base_url('ru/showCard')?>",
			success:function(r){
				$('.card_content').html(r);
			}
		})
	})
</script>

<?php $this->load->view('ru/commentlist')?>
<!-- end commentBox -->

<?php $this->load->view('ru/brendbox')?>
<!-- end brands -->


<?php $this->load->view('include/footer_ru')?>