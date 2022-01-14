$(document).ready(function(){
    $("#generar").on("click",function(){
        var numRandom = Math.random();
        var saves = (Math.floor(numRandom*(6-1)));
        if(saves != 0){
            $("#respuesta").html(saves);        

        }
        else{
            var mensaje = "TE AMO MI AMOR, pero trate nuevamente. Y dele un besito a su esposito 😍";
            $("#respuesta").html(mensaje);
        }
        
    })
})