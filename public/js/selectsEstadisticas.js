

$("#municipio2").change(function(event){
    $.get("filtroColonias/"+event.target.value+"", function(response, municipio){
        $("#colonia").empty();
        $("#colonia").append("<option value=''>Seleccione una colonia</option>");
        for(i=0; i<response.length; i++){
            $("#colonia").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});

$("#region2").change(function(event){
    $.get("filtroUnidades/"+event.target.value+"", function(response, unidad){
        $("#unidad").empty();
        $("#unidad").append("<option value=''>Seleccione una unidad</option>");
        for(i=0; i<response.length; i++){
            $("#unidad").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});