<?php
function getConnect(){
    $conexion=mysqli_connect("localhost","root","","oytlab");
    $conexion->set_charset("utf8");
    return $conexion;
};

?>