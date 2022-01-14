$(document).ready(function(){
    $("#generar").on("click",function(){
        var numRandom = Math.random();
        var saves = (Math.floor(numRandom*(6-1)));
        $("#respuesta").html(saves);        
        
    })
})