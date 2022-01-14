$(document).ready(function(){
    var date = new Date();
    $("#fecha").html(date);
    $("#generar").on("click",function(){
        var numRandom = Math.random();
        var saves = (Math.floor(numRandom*(6-1)));

        if(saves != 0){
            var mensaje = "Hoy hay que ahorrar: $"+saves+"💰💵"
            $("#respuesta").html(mensaje);        

        }
        else{
            var mensaje = "TE AMO MI AMOR </br> Trate nuevamente y dele un besito a su esposito 😍";
            $("#respuesta").html(mensaje);
        }
        
    })
})