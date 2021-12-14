$(document).ready(function(){
    // alert("Hola");
    var d = new Date($.now());
    var hor = d.getHours();
    var day = d.getDate(); 
    var month = d.getMonth();

    $(".time").html(d);
    $(".horas").html(hor);
    $(".day").html(day +" " +month);
    $("#mes").html(month);

    var diasSemana = ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado','Domingo'];
    // alert(diasSemana[2]);
    // alert(diasSemana.length);
    var i = 0;
    // for ( var i = 0 ; i <= diasSemana.length; i++){
        // }
        while (i <= diasSemana.length){
            // alert( typeof diasSemana[i]);
            $(".listDays").html(diasSemana[i]+'<br/>');
         i++;
    }
    $(".dias").html(getDaysInMonth(11,2021))
})
function getDaysInMonth(month, year) {
    var date = new Date(Date.UTC(year, month, 1));
    var days = [];
    while (date.getMonth() === month) {
       days.Push(new Date(date));
       date.setDate(date.getDate() + 1);
    }
    return days;
}