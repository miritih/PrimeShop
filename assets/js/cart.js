/**
 * Created by eric on 9/12/15.
 */
$(function () {
    initPopover();
})
    var settings = {
        title:'My Cart',
        width:700,
        constrains: 'horizontal',
        closeable:true,
        trigger:'hover',
        animation:'fade',//fade
        multi: true,
        delay:{show:500,hide:1000},
        placement:'auto-bottom',
        type:'async',
        url:'cartpop',
        cache:false,
        content: function(data){
            return data;
        }
    };
    function initPopover(){
   					$('#cart-pop').webuiPopover('destroy').webuiPopover(settings);
   				}

    $('.add_to_cart').on('click', function (e) {
      var id=$(this).attr('productId');
        alert(id)
    });
