$(document).ready(function(){
    $("#enviar").click(function(){
        datos();
        cheked();

    });    
    /*     $.ajax({
        type:'POST',
        url:'../php/clases.php'
    })
    .done(function(r){
        $("#formulario").html(r);
    })
    .fail(function(){
        alert("Error en la salida de las clases");
    }); */
    
});
$('#continuar').click(function(){

});  
/*     $.ajax({
        type:'POST',
        url:'../php/subclases.php',
        success:function(re){
            $('#categoria').html(re);
        }
    }); */
var datos = function(){
    var datosFormulario = $('#datosFormulario').serialize();
    alert (datosFormulario);
}
var cheked = function(){
    var formSolicitud = $("#solicitudFormulario input[type=text]").serialize();
    alert (formSolicitud);
    var selected='';
    $('#solicitudFormulario input[type=checkbox').each(function(){
        if (this.checked){
            selected+=$(this).val()+" - ";
        }
    });
    if(selected != ''){
        alert ('Has seleccionado: '+ selected);
    }else{
        alert('Debes seleccionar al menos una opcion.');
    }

};


