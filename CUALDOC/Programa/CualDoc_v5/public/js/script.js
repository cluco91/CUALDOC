$("#registro").click(function(){

    var dato = $("#especialidad").val(); /*Obtener Valor*/
    var route = "http://localhost:8000/especialidad"; /*Variable ruta*/
    var token = $("#token").val();

    /*peticion ajax*/

    $.ajax({
       url: route,
        headers: {'X-CSRF-TOKEN':token},
       type: 'POST',
       dataType: 'json',
        data:{especialidad:dato},

        success:function(){
            $("#msj-success").fadeIn();
        },
        error:function(msj){
            //console.log(msj.responseJSON.especialidad);
            $("#msj").html(msj.responseJSON.especialidad);
            $("#msj-error").fadeIn();
        }
    });

});