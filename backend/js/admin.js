$(document).ready(function(){






  var URL = $('#url').val();
      $.ajax({

          url:URL+"admin/coment_alert",
          success:function(r){
              if(r==0){
                  $('#rey_comment').append(r);
              }else{
                  $('#rey_comment').append(r);
              }
          }
      });

      $.ajax({
          url:URL+"admin/call_alert",
          success:function(r){
              if(r==0){
                  $('#call_me').append(r);
              }else{
                  $('#call_me').append(r);
              }
          }
      });



      $.ajax({
          url:URL+"admin/card_alert",
          success:function(r){
              if(r==0){
                  $('#card').append(r);
              }else{
                  $('#card').append(r);
              }
          }
      });

      $.ajax({
          url:URL+"admin/card_alert",
          success:function(r){
              if(r==0){
                  $('#badge').css({'display':'none'});
              }else{
                  $('#card-count').append(r);
                  $('#badge').show();
              }
          }
      });





$('a').on('click',function(){
    $('tr').removeAttr('onclick');
})




 })

function view(id){
  $('#open-detail'+id).slideToggle();
}

function desc(id){
  var URL = $('#url').val();
  $.ajax({
    url:URL+"admin/icerikgoster",
    type:'POST',
    data:{'id':id},
    success:function(r){
      $('.modal-dialog').html(r);
    }
  })
}



$(document).ready(function(){
        load_data();
        function load_data(query)
        {
            var URL = $('#url').val();
            $.ajax({
                url:URL+"admin/search",
                method:"POST",
                data:{query:query},
                success:function(data){
                    $('#result').html(data);
                }
            })
        }

        $('#search').keyup(function(){
            var search = $(this).val();
            if(search !='')
            {
                load_data(search);
            }else
            {
                load_data();
            }
        })
    })



$(document).ready(function(){
        $('#src_card').change(function(){
          var cardVal = $('#src_card').val();
          var URL = $('#url').val();

            if(cardVal==0){
              $('#test').show();
              $('#tab_filter').hide();
            }else{

              $.ajax({
                  url:URL+"admin/filter",
                  method:"POST",
                  data:'cardVal='+cardVal,
                  success:function(data){
                      $('#result_card').html(data);
                      $('#test').hide();
                      $('#tab_filter').show();
                  }
              })

            }
            

        })
    })