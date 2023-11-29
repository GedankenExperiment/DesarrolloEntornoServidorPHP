<?php
/**
 * E1_Nov23_Solution.php
 * Crear una sucesion de números impares y que no sean múltiplos
 * de 3. Dentro de los 50 primeros números naturales
 */
$sucesion = array();
$i=1;
while($i<50){
    if($i%2!=0 && $i%3!=0 && $i%5!=0){
        print_r($i.", ");
    }
    $i++;
}
?>