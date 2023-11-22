<!-- EJECUTAR -->
<!-- php -S localhost:8080 -->
<!DOCTYPE html>
<html>

<head>
    <title>Ejemplo</title>
</head>

<body>
<?php echo "Hello World! Today is " . date('l'); ?>

   
    <form id="addForm">
        <input type="number" id="num1" placeholder="Enter a number">
        <input type="number" id="num2" placeholder="Enter another number">
        <button type="button" onclick="addNumbers()">Add</button>
    </form>

    <p id="result"></p>

  

</body>

</html>