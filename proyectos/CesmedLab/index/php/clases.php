<?php
require_once ("../../conexion/php/conexion.php");
function showCategoria(){
    $conexion=getConnect();
    $query="SELECT * FROM categoria";
    $respuesta=$conexion->query($query);
    $categoria="<ul id='categoria'></ul>";
    while($row=$respuesta->fetch_array(MYSQLI_ASSOC)){
        echo ("<ul id='categoria'><h3>$row[nombre]</h3>");
        echo showSubCategoria();
        echo("</ul>");
/*             "<input type='' name='' id=''>
        <label for=''>Biometria Hemática completa </label>"; */
/*         echo "<li>". showCategoria()."</li>";
 */  }
}
echo showCategoria();
function showSubCategoria(){
    $conexion=getConnect();
    $query="SELECT * FROM subcategoria";
    $res=$conexion->query($query);
    $subCategoria="<li></li>";
    while($row=$res->fetch_array(MYSQL_ASSOC)){
        echo("<li>$row[nombre]</li>");
    }
    
}

?>