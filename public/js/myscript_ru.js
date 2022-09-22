
$(document).ready(function(){

	$('#draverMenu li').click(function(){
		$(this).children('#mod-dropdown').slideToggle();
	})


// $("#myInput").on("keyup", function() {
	
//     var value = $(this).val().toLowerCase();
//     $("#filter").filter(function() {
//       $(this).toggle($(this).text().toLowerCase().indexOf(value) > 1)

//     });
//   });

// $('#filter').load('http://localhost/linzalar.az/home/search');
	


        load_data();
        function load_data(query)
        {
        	var URL = $('#url').val();
            $.ajax({
                url:URL+"ru/search",
                method:"POST",
                data:{query:query},
                success:function(data){
                    $('#filter').html(data);
                }
            })
        }

        $('#myInput').keyup(function(){
            var search = $(this).val().toLowerCase();
            $('#filter').toggle($(this).text().toLowerCase().indexOf(search));
            if(search !='')
            {
            	$('#filter').toggle($(this).text().toLowerCase().indexOf(search));
                load_data(search);
            }else
            {
            	$('#filter').toggle($(this).text().toLowerCase().indexOf(search));
                load_data();
            }
        })


	$('#send_call').click(function(e){
		e.preventDefault();
		var URL = $('#url').val();

		$.ajax({
			url:URL+"home/call_query",
			method:'POST',
			data:$('form').serialize(),
			success:function(r){
				if(r==1){

					swal({
					  title: "İstək Göndərildi",
					  text: "Ən qısa zamanda sizinlə əlaqə saxlanılacaq ",
					  type: "success",
					  confirmButtonClass: "btn-primary",
					  closeOnConfirm: false,
					  closeOnCancel: false
					},
					function(isConfirm) {
					  if (isConfirm) {
					    	window.location.href=URL;
					  	}
					});

					setTimeout(function(){
						location.reload();
					},3000);

				}else{
					swal({
					  title: "Xəta!",
					  text: "Məcburi xanaları doldurun",
					  type: "error",
					  confirmButtonClass: "btn-primary",
					  closeOnConfirm: false,
					  closeOnCancel: false
					});
				}
			}
		})

	});


	$('#send_call_ru').click(function(e){
		e.preventDefault();
		var URL = $('#url').val();

		$.ajax({
			url:URL+"home/call_query",
			method:'POST',
			data:$('form').serialize(),
			success:function(r){
				if(r==1){

					swal({
					  title: "Запрос отправлен",
					  text: "Мы свяжемся с вами как можно скорее. ",
					  type: "success",
					  confirmButtonClass: "btn-primary",
					  closeOnConfirm: false,
					  closeOnCancel: false
					},
					function(isConfirm) {
					  if (isConfirm) {
					    	window.location.href=URL;
					  	}
					});

					setTimeout(function(){
						location.reload();
					},3000);

				}else{
					swal({
					  title: "Ошибка!",
					  text: "Заполните обязательные поля",
					  type: "error",
					  confirmButtonClass: "btn-primary",
					  closeOnConfirm: false,
					  closeOnCancel: false
					});
				}
			}
		})

	});



	$('#login_btn').on('click',function(e){
		e.preventDefault();
		var URL = $('#url').val();

		$.ajax({
			url:URL+"home/signin",
			method:'POST',
			data:$('form').serialize(),
			success:function(r){
				if(r=="ok"){


					swal({
					  title: "Təbriklər",
					  text: "Uğurlu addım",
					  type: "success",
					  confirmButtonClass: "btn-primary",
					  closeOnConfirm: false,
					  closeOnCancel: false
					},
					function(isConfirm) {
					  if (isConfirm) {
					    	window.location.href=URL;
					  	}
					});

					setTimeout(function(){
						window.location.href=URL;
					},3000);



				}else{

					swal({
					  title: "Xəta!",
					  text: "İstifadəçi adı və ya Şifrə yanlışdır",
					  type: "error",
					  confirmButtonClass: "btn-primary",
					  closeOnConfirm: false,
					  closeOnCancel: false
					});

				}
			}
		})
	});



	$('#login_btn_ru').on('click',function(e){
		e.preventDefault();
		var URL = $('#url').val();

		$.ajax({
			url:URL+"home/signin",
			method:'POST',
			data:$('form').serialize(),
			success:function(r){
				if(r=="ok"){


					swal({
					  title: "Поздравляю",
					  text: "Успешные шаг",
					  type: "success",
					  confirmButtonClass: "btn-primary",
					  closeOnConfirm: false,
					  closeOnCancel: false
					},
					function(isConfirm) {
					  if (isConfirm) {
					    	window.location.href=URL+"ru";
					  	}
					});

					setTimeout(function(){
						window.location.href=URL+"ru";
					},3000);



				}else{

					swal({
					  title: "Ошибка!",
					  text: "Неверное имя пользователя или пароль",
					  type: "error",
					  confirmButtonClass: "btn-primary",
					  closeOnConfirm: false,
					  closeOnCancel: false
					});

				}
			}
		})
	})


	$('#doorpay').on('change',function(){
		$('.div_card').fadeOut(100);
		$('.div_doorpay').fadeIn(100);
	});
	$('#cartpay').on('change',function(){
		$('.div_card').fadeIn(100);
		$('.div_doorpay').fadeOut(100);
	})


	// $('input[type=radio]').change(function(){
	// 	var value = $(this).val();
	// 	var URL = $('#url').val();
	// 	if(value=="doorpay"){
	// 		$('#btn_end_pay').click(function(e){
	// 			e.preventDefault();
	// 			swal({
	// 				  title: "Təbriklər",
	// 				  text: "Sifarişiniz tamamlandı",
	// 				  type: "success",
	// 				  confirmButtonClass: "btn-primary",
	// 				  closeOnConfirm: false,
	// 				  closeOnCancel: false
	// 				},
	// 				function(isConfirm) {
	// 				  if (isConfirm) {
	// 				    	window.location.href=URL;
	// 				  	}
	// 				});
	// 		})

	// 	}else{
	// 		$('#btn_end_pay').click(function(e){
	// 			e.preventDefault();
	// 			window.location.href="https://www.azericard.com/";
	// 		})
	// 	}
	// })

	$('.confirm').click(function(){
		location.reload();
	})



	
	$('#dcb_active').click(function(){
		$('.dcbDropdownMenu').fadeToggle();
		$('.dropAntireflection').fadeToggle(300);

	});

	$('.dropAntireflection').click(function(){
		$('.dcbDropdownMenu').fadeOut();
		$('.dropAntireflection').fadeOut();
	})

	$('#notf_close').click(function(){
		$('.notification').fadeOut();
	});

	
	$('#up').click(function(){
		$('html, body').animate({
		    scrollTop: 0
		  }, 800);
	});


	$('.w_app').hover(function(){
		$('.w_app').animate({
			width:'190'
		},100);
		$('.w_app b').addClass('number');
	});

	$('.w_app').on('mouseleave',function(){
		$('.w_app').animate({
			width:'36'
		},100);
		$('.w_app b').removeClass('number');

	});



	$('#dcbdropdownMenuLink').on('click',function(){
		$('.profileDropdown').toggle();
		$('.fixedbox').addClass('dcb_show');
	});



	$(window).bind('mousedown',function(e){
		var contain = $('.profileDropdown');
		if(!contain.is(e.target)&&contain.has(e.target).length==0){
			contain.hide();
			$('.fixedbox').removeClass('dcb_show');
		}
		
	});


	$('#login').on('click',function(e){
		e.preventDefault();
		var URL = $('#url').val();
		$.ajax({
			url:URL+"home/signin",
			type:'POST',
			data:$('form').serialize(),
			success:function(r){
				alert(r);
			}
		})
	})
	
	



	//var nav = document.getElementById('navbar');
	window.onscroll = function(){
		if(window.pageYOffset >100){
			$('#navbar').css({'box-shadow':'0 3px 5px'});
			$('#up').addClass('updown');
		}else{
			$('#navbar').css({'box-shadow':'0 0 0 0'});
			$('#up').removeClass('updown');
		}
	}







$("#cvc").on("keypress keyup blur",function (event) {
            //this.value = this.value.replace(/[^0-9\.]/g,'');
     $(this).val($(this).val().replace(/[^0-9\.]/g,''));
            if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
});


$("#cardnumber").on("keypress keyup blur",function (event) {
            //this.value = this.value.replace(/[^0-9\.]/g,'');
     $(this).val($(this).val().replace(/[^0-9\.]/g,''));
            if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
                event.preventDefault();
            }
});


$('#btn_register').on('click',function(e){
	e.preventDefault();
	var URL = $('#url').val();
	$.ajax({
		url:URL+"ru/create_account",
		method:'POST',
		data:$('form').serialize(),
		dataType:'html',
		beforeSend:function(){
			$('#btn_register').text("Пожалуйста, подождите минутку...");
			$('#btn_register').prop('disabled',true);
		},
		success:function(r){
			if(r==1){


				swal({
					  title: "Поздравляю",
					  text: "Успешные шаги",
					  type: "success",
					  confirmButtonClass: "btn-primary",
					  closeOnConfirm: false,
					  closeOnCancel: false
					},
					function(isConfirm) {
					  if (isConfirm) {
					    	window.location.href=URL+'ru';
					  	}
					});

					setTimeout(function(){
						window.location.href=URL+'ru';
					},3000);



			}else{
				swal({
					  title: "Ошибка",
					  text: r,
					  type: "error",
					  confirmButtonClass: "btn-primary"
					});

				$('#btn_register').text("Создать аккаунт");
				$('#btn_register').prop('disabled',false);

					// setTimeout(function(){
					// 	window.location.href=URL;
					// },3000);
			}
			//window.location.href=URL;
		}
	})
})



})

function go_detail($seflink){

	var seflink = $seflink;
	var URL = $('#url').val();
	$.ajax({
		// url:"show_detail/"+seflink,
		method:'GET',
		data:{seflink:seflink},
		success:function(){
			window.location.href=URL+"show_detail/"+seflink;
		}

	})
}

function go_detail_ru($seflink){

	var seflink = $seflink;
	var URL = $('#url').val();
	$.ajax({
		// url:"show_detail/"+seflink,
		method:'GET',
		data:{seflink:seflink},
		success:function(){
			window.location.href=URL+"ru/show_detail/"+seflink;
		}

	})
}






jQuery(document).ready(function() {
  jQuery("input[name='quantity_os']").on('keyup mouseup', function() {
	var qty = jQuery("input[name='quantity_os']").val(),
	price = jQuery("input[name='price_os']").attr('placeholder'),
	newprice = price * parseInt( qty );

	$('.odPrice-os b').html(newprice.toFixed(2));

	jQuery("input[name='price_os']").val( newprice.toFixed(2));
  });

});


jQuery(document).ready(function() {
  jQuery("input[name='quantity_od']").on('keyup mouseup', function() {
	var qty_od = jQuery("input[name='quantity_od']").val(),
	price_od = jQuery("input[name='price_od']").attr('placeholder'),
	newprice_od = price_od * parseInt( qty_od );

	$('.odPrice b').html(newprice_od.toFixed(2));

	jQuery("input[name='price_od']").val( newprice_od.toFixed(2));
  });

});

$('.finis_btn').click(function(e){
	e.preventDefault();
	var URL = $('#url').val();
	var card = $('input[name=selectCard]:checked').val();
	$.ajax({
		url:URL+"home/finished_card",
		method:'POST',
		data:$('form').serialize(),
		beforeSend:function(){
			$('body').css({'opacity':'0.3'},'slow');
		},
		success:function(r){
			if(card =="Yerində Ödəmə"){
				$('body').css({'opacity':'1'},'slow');
				swal({
					  title: "Təbriklər",
					  text: "Sifarişiniz tamamlandı",
					  type: "success",
					  confirmButtonClass: "btn-primary",
					  closeOnConfirm: false,
					  closeOnCancel: false
					},
					function(isConfirm) {
					  if (isConfirm) {
					    	window.location.href=URL;
					  	}
					});
			}else{
				window.location.href="https://www.azericard.com/";
			}
		}
	})
})



$('.finis_btn_ru').click(function(e){
	e.preventDefault();
	var URL = $('#url').val();
	var card = $('input[name=selectCard]:checked').val();
	$.ajax({
		url:URL+"home/finished_card",
		method:'POST',
		data:$('form').serialize(),
		beforeSend:function(){
			$('body').css({'opacity':'0.3'},'slow');
		},
		success:function(r){
			if(card =="Yerində Ödəmə"){
				$('body').css({'opacity':'1'},'slow');
				swal({
					  title: "Поздравляю",
					  text:"Ваш заказ выполнен",
					  type: "success",
					  confirmButtonClass: "btn-primary",
					  closeOnConfirm: false,
					  closeOnCancel: false
					},
					function(isConfirm) {
					  if (isConfirm) {
					    	window.location.href=URL+"ru";
					  	}
					});
			}else{
				window.location.href="https://www.azericard.com/";
			}
		}
	})
})



$(function(){

	var maxLength = 500;
	$('#max_length').text(maxLength + ' hərf sayı');
	$('#description').keydown(function(event){
		limitCharacters($(this));
	});
	$('#description').keyup(function(event){
		limitCharacters($(this));
	});

	function limitCharacters(description){
		if(description.val().length > maxLength){
			description.val(description.val().substring(0, maxLength));
		}else{
			var remaining = maxLength - description.val().length;
			$('#max_length').text(remaining + ' hərf sayı');
		}
	}


});

// $('input[name=selectCard]').on('change',function(){
// 	var card = $('input[name=selectCard]:checked').val();
// 	alert(card);
// })



$(function(){


	$('#btn_comment').click(function(e){
		e.preventDefault();
		var URL = $('#url').val();
		$.ajax({
			url:URL+"ru/addComment",
			method:'POST',
			data:$('form').serialize(),
			success:function(r){
				if(r==1){
					swal({
					  title: "Поздравляю",
					  text: "Ваш отзыв был отправлен",
					  type: "success",
					  confirmButtonClass: "btn-primary",
					  closeOnConfirm: false,
					  closeOnCancel: false
					},
					function(isConfirm) {
					  if (isConfirm) {
					    	location.reload();
					  	}
					});

				}else{
					swal({
					  title: "Ошибка",
					  text: "Заполните пробелы..",
					  type: "error",
					  confirmButtonClass: "btn-primary",
					  closeOnConfirm: false,
					  closeOnCancel: false
					});
				}
			}
		})
	})



	



});



function viewCard($id){
	var id = $id;

	
	$('#openCard-'+id).slideToggle();
}

function showOrder($id){

	var orderid = $id;
	var URL = $('#url').val();

	$.ajax({
		url:URL+'ru/showOrder/'+orderid,
		method:'POST',
		success:function(r){
			$('.modal-body').html(r);
		}
	})
}


function refresh_card($id){
	var adresid = $id;
	var URL = $('#url').val();

	//$('.modal-body').html(adresid);

	$.ajax({
		url:URL+'home/show_adress/'+adresid,
		method:'POST',
		success:function(r){
			$('.dcbForm').html(r);
		}
	})
}


function wishing(id){
	
	var URL = $('#url').val();
	$.ajax({
		url:URL+"home/add_wishing/"+id,
		type:'POST',
		data:'id='+id,
		success:function(r){
			if(r==1){
				location.reload();
			}else{
				window.location.href=URL+"login";
			}
		}
	})
}

function wishing_ru(id){
	
	var URL = $('#url').val();
	$.ajax({
		url:URL+"ru/add_wishing/"+id,
		type:'POST',
		data:'id='+id,
		success:function(r){
			if(r==1){
				location.reload();
			}else{
				window.location.href=URL+"ru/login";
			}
		}
	})
}



