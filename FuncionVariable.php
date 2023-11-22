<?php
function suma($a,$b) {
    return $a +$b;
}

$miFuncionSuma = "suma";
echo $miFuncionSuma(3,4); // invoca a la función suma



$miFuncionSuma = function($a,$b) {
    return $a +$b;
};
echo $miFuncionSuma(3,4); // invoca a la función suma


// Uso de variables externas a la función anónima --> `use`
$mensaje = "Hola";
$miClosure = function() {
      global $mensaje;
      echo $mensaje;
};
$miClosure();
?>