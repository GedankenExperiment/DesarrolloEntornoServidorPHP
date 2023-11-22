<?php
function imprimirArray($semana){
    for ($i=0; $i < count($semana); $i++) { 
        print_r($semana[$i]);
        print_r(", ");
    }
}

$arrayEjemplo = [1,2,3,4,5];

?>