$(document).ready(function(){



	$('#openSidebar').click(function(){
		$('.overlay_bg').css({
			'visibility':'visible',
			'opacity':1
		});
		$('.draver').css({
			'transform':'translateX(0)'
		});
		$('body').addClass('bodyFix');

		$('.product_items').css({'overflow':'hidden'})
	});


	$('.overlay_bg').click(function(){
		$('.overlay_bg').css({
			'visibility':'hidden',
			'opacity':0
		});
		$('.draver').css({
			'transform':'translateX(-100%)'
		});
		$('.product_items').css('overflow','auto');
		$('body').removeClass('bodyFix');
	})




})