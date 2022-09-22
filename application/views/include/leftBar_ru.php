<div class="leftBar">
	<div class="l_content">
		<div class="listContent">
			<h5><span><i class="fas fa-globe"></i></span>ПО БРЕНДАМ</h5>
			<ul>
				<?php
					foreach ($brands as $row) {
					 ?>
						<li><i class="fas fa-chevron-right"></i><a href="<?php echo base_url('ru/brend/'.$row->marka_seflink)?>"><?php echo $row->marka_name?></a></li>
				<?php }
				?>
			</ul>
		</div>
		<div class="seperator"></div>

		<div class="listContent">
			<h5><span><i class="far fa-circle"></i></span>ПО ТИПУ</h5>
			<ul>
				<?php
					foreach ($lenstype as $row) { ?>
						<li><i class="fas fa-chevron-right"></i><a href="<?php echo base_url('ru/category/'.$row->type_seflink)?>"><?php echo $row->lens_name_ru?></a></li>
				<?php }
				?>
			</ul>
		</div>
		<div class="seperator"></div>

		<div class="listContent">

			<h5><span><i class="fas fa-glasses"></i></span>Оптические оправы</h5>
			<ul>
				<?php
					foreach ($uselens as $row) { ?>
						<li><i class="fas fa-chevron-right"></i><a href="<?php echo base_url('ru/category/'.$row->use_lens_seflink)?>"><?php echo $row->use_lens_name?></a></li>
				<?php }
				?>
			</ul>
		</div>

		<div class="seperator"></div>

		<div class="listContent">

			<h5><span><i class="fas fa-burn"></i></span>Oптические линзы для очков</h5>
			<ul>
				<li><i class="fas fa-chevron-right"></i><a href="<?php echo base_url('ru/category/rimlux')?>">Rimlux</a></li>
			</ul>
		</div>
		<div class="seperator"></div>

		<div class="listContent">
			<h6>
				<span><i class="far fa-star"></i></span>
				<a href="<?php echo base_url('ru/bookmark')?>">Избранное</a>
			</h6>
			<h6>
				<span><i class="fas fa-tag"></i></span>
				<a href="<?php echo base_url('ru/kompaniya')?>">Компания</a>
			</h6>
			<h6>
				<span><i class="fas fa-tint"></i></span>
				<a href="<?php echo base_url('ru/category/linza-suyu')?>">Раствор для линз</a>
			</h6>
			<h6>
				<span><i class="fas fa-eye-dropper"></i></span>
				<a href="<?php echo base_url('ru/category/goz-damcisi')?>">Капли для глаз</a>
			</h6>
		</div>
		<div class="seperator"></div>

		<div class="listContent">
			<div class="banner_box"><img src="<?php echo base_url('public/')?>images/delivery.jpg" alt=""></div>
			<div class="banner_box"><img src="<?php echo base_url('public/')?>images/callcenter.jpg" alt=""></div>
		</div>
		<div class="seperator"></div>

		<div class="listContent">
			<h5>Подпишитесь на нас в Facebook</h5>
		</div>
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v5.0"></script>
		<div class="fb-page" data-href="https://www.facebook.com/linzalaraz/" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/linzalaraz/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/linzalaraz/">Linzalar.az</a></blockquote></div>
	</div>

</div>