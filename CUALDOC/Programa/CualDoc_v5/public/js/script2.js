$(document).ready(function(){
    Carga();
});

function Carga(){
    var tablaDatos = $("#datos");
    var route = "http://localhost:8000/especialidades";


    $("#datos").empty();
    /*Peticion ajax*/
    $.get(route, function(res){
        $(res).each(function(key, value){
            tablaDatos.append("<tr><td>"+value.especialidad+"</td><td>" +
                "<button value="+value.id+" OnClick='Mostrar(this);' class='btn btn-primary' data-toggle='modal'" +
                " data-target='#myModal'>Editar</button>" +
                "<button class='btn btn-danger' value="+value.id+" OnClick='Eliminar(this);'>Eliminar</button></td></tr>");
        });
    });
}

/*FUNCION ELIMINAR*/
function Eliminar(btn){

    var route = "http://localhost:8000/especialidad/"+btn.value+"";
    var token = $("#token").val();

    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'DELETE', /*DELETE ES PARA ELIMINAR*/
        dataType: 'json',
        success: function () {
            Carga();    /*Para actualizar tras peticion*/
            $("#msj-success").fadeIn();
        }
    });

}


/*FUNCION MOSTRAR*/
    function Mostrar(btn){
        //console.log(btn.value);
        var route = "http://localhost:8000/especialidad/"+btn.value+"/edit";
        /*Peticion Ajax*/
        /*El res es la respuesta de la peticion*/
        $.get(route, function(res){ /*Nos trae la especialidad correspondiente a su id*/
            $("#especialidad").val(res.especialidad);
            $("#id").val(res.id);
        });
    }

$("#actualizar").click(function(){
    var value = $("#id").val();
    var dato = $("#especialidad").val();
    var route = "http://localhost:8000/especialidad/"+value+"";
    var token = $("#token").val();

    $.ajax({
       url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'PUT', /*PUT ES PARA ACTUALIZAR*/
        dataType: 'json',
        data: {especialidad: dato},
        success: function () {
            Carga();    /*Para actualizar tras peticion*/
            $("#myModal").modal('toggle');
            $("#msj-success").fadeIn();
        }
    });
});