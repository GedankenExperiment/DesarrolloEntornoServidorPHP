<?php
/**
 * Dado un array de 30 stories, crear una forma(GET) con html para seleccionar una sublista.
 * a) Usar dos inputs, "left" y "right", de tipo "number" e imprimir el sub-array resultante.
 * b) Validar los inputs e informar al usuario si no son correctos.
 */
$biggerArray = array("Story0", "Story1", "Story2", "Story3", "Story4", "Story5", "Story6", 
"Story7", "Story8", "Story9","Story10", "Story11", "Story12", "Story13", "Story14", "Story15", 
"Story16", "Story17", "Story18", "Story19","Story20", "Story21", "Story22", "Story23", 
"Story24", "Story25", "Story26", "Story27", "Story28", "Story29");

$left = 0;
$right = 0;
if (isset($_GET['submit'])) {
    $left = $_GET['left'];
    $right = $_GET['right'];

    $valid = validate($left, $right, $biggerArray);
    if($valid){
        $smaller = array_slice($biggerArray, $left, $right-$left, false);
        for ($i=0; $i < count($smaller); $i++) { 
            print_r($smaller[$i]);
            print_r(", ");
        }
    }else {
        print_r("Input not valid");
    }
} 
function  validate($l,$r, $biggerArray) {
    if($l<0 || $l>count($biggerArray) ||$l == $r){
        return false;
    }else if($r < $l){
        return false;
    }else if($r>count($biggerArray)){
        return false;
    }else{
        return true;
    }
return true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E5</title>
</head>

<body>
    <form action="" method="get">
        <label for="left">Left: </label>
        <input type="number" name="left" id="left">
        <label for="right">Right: </label>
        <input type="number" name="right" id="right">
        <input type="submit" name="submit">
    </form>
</body>

</html>