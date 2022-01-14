<?php
Class ControladorPlantilla{
    /* Lamada plantilla */
    public function ctrTraerPlantilla(){
        #Include() se utiliza para invocar el archivo que contiene htmml o php
        include "vistas/plantilla.php";
    }
}