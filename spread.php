<?php
include "funciones.php";
function multiplicar(...$masArgs){
    $result = true;
  
    foreach ($masArgs as $num){
        $result *= $num;
    }   

    print_r($result);
}
multiplicar(...$arrayEjemplo);

// function suma(...$cosas) {
//     $result = $cosas[0];
//     for ($i = 1; $i < count($cosas); $i++){
//         $result += $cosas[$i];
//     }
//     return $result;
// }
// print_r(suma(1,2,3,4,5,6,7,8,9,10));



// $array1 =[ 1,2,3,4,5];
// $array2 =["cosa1", "cosa2", "cosa3"];
// $arrayTotal = [...$array1, ...$array2];
// print_r($arrayTotal);
?>