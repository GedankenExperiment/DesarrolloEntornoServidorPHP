<?php
include "funciones.php";
    $semana = [ "lunes", "martes", "miércoles",
    "jueves", "viernes", "sábado", "domingo" ];


function duplicarPorValor($semana) {
    array_push($semana, "hola");
    //print_r("Duplicar por valor: ");    
    //imprimirArray(($semana));
    //print_r("<br>");
}

function duplicarPorReferencia(&$semana) {
    array_push($semana, "adios");
    //imprimirArray($semana);
}

//duplicarPorValor($semana);

duplicarPorReferencia($semana);
imprimirArray($semana);
?>