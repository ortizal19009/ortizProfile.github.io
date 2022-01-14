<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e632f1f723.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styles/style.css">
    <title>Document</title>
</head>

<body>
    <!-- =============================
    LOGOTIPO
===================================== -->
    <div class="container-fluid">
        <h3 class="text-center py-3">CLP-CARCHI-N°1</h3>
    </div>
    <!-- =============================
    BOTONERA
===================================== -->
    <div class="container-fluid bg-light">
        <div class="container">
            <ul class="nav nav-justified py-2 nav-pills">
                <?php if (isset($_GET['pagina'])) : ?>
                    <?php if ($_GET['pagina'] == 'inicio') : ?>
                        <li class="nav-item "><a href="index.php?pagina=inicio" class="nav-link active">Inicio</a></li>

                    <?php else : ?>
                        <li class="nav-item"><a href="index.php?pagina=inicio" class="nav-link">Inicio</a></li>
                    <?php endif ?>
                    <?php if ($_GET['pagina'] == 'ingreso') : ?>
                        <li class="nav-item "><a href="index.php?pagina=ingreso" class="nav-link active">Ingreso</a></li>

                    <?php else : ?>
                        <li class="nav-item"><a href="index.php?pagina=ingreso" class="nav-link">Ingreso</a></li>
                    <?php endif ?>
                    <?php if ($_GET['pagina'] == 'registro_salida') : ?>
                        <li class="nav-item "><a href="index.php?pagina=registro_salida" class="nav-link active">Registro de salidas</a></li>

                    <?php else : ?>
                        <li class="nav-item"><a href="index.php?pagina=registro_salida" class="nav-link">Registro de salidas</a></li>
                    <?php endif ?>                  
                <?php else : ?>
                    <li class="nav-item "><a href="index.php?pagina=inicio" class="nav-link active">Inicio</a></li>
                    <li class="nav-item"><a href="index.php?pagina=ingreso" class="nav-link">Ingreso</a></li>
                    <li class="nav-item"><a href="index.php?pagina=registro_salida" class="nav-link">Registro de salidas</a></li>
                <?php endif ?>
                <!-- <li class="nav-item"><a href="#" class="nav-link active">Registro</a></li> -->
            </ul>
        </div>
    </div>
    <!-- =============================
CONTENIDO
===================================== -->
    <div class="container-fluid">
        <div class="container py-5">
            <?php
            if (isset($_GET['pagina'])) {
                if (
                    $_GET['pagina'] == 'ingreso' ||
                    $_GET['pagina'] == 'inicio' ||
                    $_GET['pagina'] == 'registro_salida'
                ) {

                    include "paginas/" . $_GET['pagina'] . ".php";
                }
            } else {
                include "paginas/inicio.php";
            }
            ?>
        </div>
    </div>


</body>

</html>