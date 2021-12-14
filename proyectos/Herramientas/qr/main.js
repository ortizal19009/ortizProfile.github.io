$(document).ready(function(){
    // alert("Jquery listos");
    var form = $(".datos").serialize();
    
    $(".generateQr").on('click',function(){
        // e.preventeDefault();
        alert("QR: " + form);

    })
    
})