<?php
$nombre = $_GET["nombre"];
$apellido1 = $_GET["apellido1"];

$users = ["Santi", "Jaime", "Esteban"];

if(in_array($nombre, $users)){
    print_r("Hola $nombre");
}else{
    print_r($url);
    header("localhost:8080/change_password.php");

}

?>