<?php
// Database connection
$servername = "localhost"; // Change this to the address of your MySQL server
$username = "root"; // Change this to your database username
$password = " "; // Change this to your database password
$database = "login.sql"; // Change this to the name of your database

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Login verification
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["contraseña"];

    // Make the query to verify the credentials
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // The credentials are correct, redirect the user to the desired page
        header("Location: https://proyectoinformatico1.atlassian.net/jira/software/projects/G6/boards/7");
        exit();
    } else {
        echo "Credenciales incorrectas. Por favor, inténtalo de nuevo.";
    }
}
?>

<!-- HTML code continued here -->

<html>
    <head>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="style.css" rel="stylesheet" id="bootstrap-css">
    </head>
    <body id="LoginForm">
        <div class="container">
            <div class="login-form">
                <div class="main-div">
                    <div class="panel">
                        <h2>Iniciar Sesión</h2>
                        <p>Por favor ingrese Usuario y Contraseña</p>
                    </div>
                    <form id="Login">

                        <div class="form-group">


                            <input type="text" class="form-control" id="inputEmail" placeholder="Usuario">

                        </div>

                        <div class="form-group">

                            <input type="password" class="form-control" id="inputPassword" placeholder="Contraseña">

                        </div>
                        <div class="forgot">
                            <a href="reset.html">¿Olvide Contraseña?</a>
                        </div>
                        <button type="submit" class="btn btn-primary"><a href="" style="color: white;">Iniciar</a></button>

                    </form>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
