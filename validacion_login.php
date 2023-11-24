<!-- Formulario de validacion de email.
Con un password que tenga al menos un caracter especial y que el
usuario lo introduzca dos veces y que coincida. -->

<?php
    $email = '';
    $password = '';
    $confirmPassword = '';
    include "funciones.php";


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $confirmPassword = $_POST['confirm_password'] ?? '';

        $emailValid = filter_var($email, FILTER_VALIDATE_EMAIL);
        $passwordValid = false;

        // Check if password and confirm_password keys exist before validating
        if (isset($_POST['password'], $_POST['confirm_password']) && $password === $confirmPassword && preg_match('/[^\w\s]/', $password)) {
            $passwordValid = true;
        }

        if ($emailValid && $passwordValid) {
            //header("Location: dni.php");// Redirect the user to the dashboard page
            //exit(); // Ensure that no further code execution happens after the redirect
            echo "<p>Email: $email</p>";
            echo "<p>Password: $password</p>";
            echo "<p>Password Confirmation: $confirmPassword</p>";
            echo "<p>Both email and password are valid.</p>";
            

    
        } else {
            echo "<p>Validation failed. Please check your email and password.</p>";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Email and Password Validation</title>
</head>

<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label>Email:
            <input type="text" name="email" placeholder= "HolA">
        </label><br><br>
        <label>Password:
            <input type="password" name="password">
        </label><br><br>
        <label>Confirm Password:
            <input type="password" name="confirm_password">
        </label><br><br>
        <input type="submit" value="Validate">
    </form>
</body>

</html>
