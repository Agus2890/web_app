$(document).ready();


$(function(){
    $(".FormularioAjaxCustom").bind("submit",function(e){
        e.preventDefault();
        var form=$(this);
        var data = new FormData(this);
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            datafrom:$(this).attr("data-form"),
            data:data,//$(this).serialize(),
            enctype:$(this).attr("enctype"),
            contentType: false,
            cache: false,
            processData: false,

            beforeSend: function(){
                $("#div_conten").addClass('show');
                $("#btn_confirm").text("Registrando...");
            },
            complete:function(data){
                $("#div_conten").removeClass('show');
                $("#btn_confirm").text("Confirmar");
            },
            success: function(data){
                if(data.success){
                    var array_keys=Object.keys(data);
                    if( jQuery.inArray("redirec", array_keys)!== -1 ){
                        window.location=data.redirec;
                    }else{
                        swal("Aviso", data.message, "success");
                    }
                }else{
                    swal({html:true,title:"Aviso",text:data.message,type:"error"});
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                swal({
                    html:true, 
                    title:"Aviso",
                    text:jqXHR.responseText,
                    type:"error",
                });
            }
        });
        return false;
    });


});