<?php $this->load->view('include/header')?>
<?php
error_reporting(0);
foreach ($adres as $row_ad) {
  

}
?>

<div class="modal fade bd-example-modal-lg-xl-new" tabindex="-1" role="dialog" aria-labelledby="	myLargeModalLabel" 		aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header">
	        <h4 id="modalTitle">Çatdırılacaq ünvan</h4>
	        <button id="btn_close_modal" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	     </div>
     	<div class="modal-body">
       		<form action="<?php echo base_url('home/addAdress')?>" method="post" id="adressForm">
       			<table style="padding-left:0;padding-right:0;width:100%">
       				<tr>
       					<td colspan="2">
       						<div class="form-group">
       							<label for="">Ünvan</label>
       							<?php
	       							
       								if($this->session->email){
       									foreach ($user as $row) {

       									}
       									echo '<textarea name="adres" class="form-control" id="" cols="10" >'.$row->address.'</textarea>';
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
       									foreach ($user as $row) {

       									}
       									echo '<input type="text" name="ad_soyad" class="form-control" value="'.$row->name.' '.$row->surname.'">';
       									echo '<input type="hidden" name="username" class="form-control" value="'.$row->username.'">';
       									echo '<input type="hidden" name="email"  value="'.$row->email.'">';
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
       							<input type="text" name="phone" class="form-control" value="<?=$row->phone?>">
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
                    <?php
                      if($row_ad->username==""){ ?>

                        <input type="text" name="postcode" class="form-control" value="" >

                    <?php  }else{ ?>

                      <input type="text" name="postcode" class="form-control" value="<?php echo $row_ad->post_code?>" >

                    <?php  }
                    ?>
       							
       						</div>
       					</td>
       				</tr>
       				<tr>
       					<td colspan="2">
       						<button class="btn btn-primary">Yadda saxla</button>
       					</td>
       				</tr>
       			</table>
       		</form>
        </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg-xl-refresh" tabindex="-1" role="dialog" aria-labelledby="	myLargeModalLabel" 		aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	<div class="modal-header">
	        <h4 id="modalTitle">Dəyişiklik et</h4>
	        <button id="btn_close_modal" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	     </div>
     	<div class="modal-body" >
       		<div class="dcbForm">
       			
       		</div>
        </div>
    </div>
  </div>
</div>

<div class="container" style="padding-left:0;">	

	<div class="content">
		<div class="card_header">
			<div class="c_yol">
				<span id="firstspan" >1</span>
				<span>Səbət</span>
			</div>
			<div class="c_yol">
				<span id="firstspan" class="c_activ">2</span>
				<span>Çatdırılacaq ünvan</span>
			</div>
			<div class="c_yol">
				<span id="firstspan">3</span>
				<span>Ödəmə seçimi</span>
			</div>
			<div class="c_yol">
				<span id="firstspan">4</span>
				<span>Sifarişi tamamla</span>
			</div>
		</div>
	</div><!--end content -->
<form action="<?php echo base_url('select_pay')?>" method="post">
	<div class="card_content">

		<div class="card_detail">
			<section id="adress_items">
				
					
				
			</section>

    <div class="form-group">
      <label for="">Qeydlər</label>
      <textarea name="comment" id="" class="form-control"></textarea>
    </div>
			

<script src="https://code.jquery.com/jquery-3.4.1.js" ></script>
<script>
	
	function loadPage(){
		$('#adress_items').load("<?php echo base_url('home/viewsAdressCard')?>");
	}
	loadPage();

</script>	
			

			<div id="boxList" class="adres_box">
				<strong>Çatdırılacaq ünvanınızı qeyd edin</strong>
				<a href="" id="addAdress" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg-xl-new">Yeni adresinizi qeyd edin</a>
			</div>



		</div>

		<div class="finish_bar">
			
			<div class="finis_card_price">
				<span>Toplam qiymət:</span>
				<span><?php echo $countrow ?>.00<b>M</b></span>
				<small>+2,00 <b>M</b> çatdırılma</small>
			</div>
			
			<strong>Total: <?php 
				$courier = 2;
				$toplam = $countrow + $courier;
			echo number_format($toplam) ?>.00 <small style="font-family:JISAZNRegular"><b>M</b></small></strong>
			<button id="btn_pay" ><i class="fas fa-angle-double-right"></i> Davam et</button>

			
</form>
		</div>

	</div>


</div><!-- end container -->


<?php $this->load->view('commentlist')?>
<!-- end commentBox -->

<?php $this->load->view('brendbox')?>
<!-- end brands -->

<?php $this->load->view('include/footer')?>