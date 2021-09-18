$(document).ready(function(){

    $(".section").html("<button onclick = 'imp()'>Imprimiendo</button>");
})
const titulo = ("<h1>Hola mundo</h1>");
function imp(){
    $(".section").html(titulo);
}