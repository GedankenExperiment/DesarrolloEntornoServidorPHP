<?php
// $fibonacci = [1,1];
// $index = 2;
// while ($index <= 10) {
//     $anterior = $fibonacci[$index -1];
//     $anteriorDelAnterior = $fibonacci[$index -2];
//     $nuevoTermino =  $anterior + $anteriorDelAnterior;
//     $fibonacci[$index] = $nuevoTermino;
//     $index++;
// }
// print_r($fibonacci);

$n = 5;
$resultado = 1;
for ($i = $n; $i > 0; $i--) {
    $resultado *= $i;
}
print_r($resultado);
?>