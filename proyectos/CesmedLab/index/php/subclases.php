<?php
require_once ("../../conexion/php/conexion.php");
function showSubCategoria(){
    $conexion=getConnect();
    $query="SELECT * FROM subcategoria";
    $respuesta=$conexion->query($query);
    $subCategoria="<li></li>";
    while($row=$respuesta->fetch_array(MYSQLI_ASSOC)){
        $subCategoria.= "<li>$row[nombre]</li>";
        
/*             "<input type='' name='' id=''>
        <label for=''>Biometria Hemática completa </label>"; */
    }
    return $subCategoria;
}
echo showSubCategoria();
?>