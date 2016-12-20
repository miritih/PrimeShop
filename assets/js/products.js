/**
 * Created by eric on 9/18/15.
 */
$('.subcategory').click(function (e) {
    e.preventDefault();
    $('#gifloader').modal('show');
    var category=$(this).attr('category');
    var id=$(this).attr('value');
    //alert(category+'   '+id);
    $.get(
     'http://localhost/prime/ajaxProduct/'+id+'/'+category,
        {},
        function(data) {
           $('.features_items').html(data);
           $('.recommended_items').html('');
            $('#gifloader').modal('hide');
        });
});

$('#search_frm').click(function (e) {
    e.preventDefault();
    var filter=$('#search_input').val();
    if(filter !=''){
        $('#gifloader').modal('show');
         $.get(
          'http://localhost/prime/searchProduct/'+filter,
             {},
             function(data) {
                $('.features_items').html(data);
                $('.recommended_items').html('');
                 $('#gifloader').modal('hide');
             });
    }else{
        $('#search_input').focus();
    }

});
