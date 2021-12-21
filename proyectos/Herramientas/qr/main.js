$(document).ready(function () {
  $("#generateQr").click(function () {


      saludo();
  });
  $("#clean").click(function () {
    // recargar();
    location.reload(); // then reload the page.(3)
  });
});
function saludo() {
  var form = $("form").serialize();
  if ($("#link").val() == ""){
    alert("Llenar todos los campos");
  }else{
    $.ajax({
      async: false,
      data: form,
      url: "qrGenerate.php",
      type: "POST",
      success: function (r) {
        $("#codigoQR").html(r);
      },
    });

  }

}
