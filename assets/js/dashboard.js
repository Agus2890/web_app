/* globals Chart:false, feather:false */

(function () {
  'use strict'

  feather.replace()

  $(document).on('click','.delete_table',function(e){
    e.preventDefault();
    var form=$(this);
    var id=$(this).parent().parent().data('id');
    var table=$(this).parent().parent().data('table');
    
    var url='index.php?url=index/delete_table/'+id;

    var pregunta = confirm('¿Esta seguro de eliminar?');
    if(pregunta==true){
        $.ajax({
            type:'GET',
            url:url,
            data:{table:table},
            success: function(registro){
                form.parents("tr").remove();
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert(jqXHR.responseText);
            }
        });
        return false;
    }else{
        return false;
    }
});



  
}())


