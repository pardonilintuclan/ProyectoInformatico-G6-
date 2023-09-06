
<?php
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "sys";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

// Obtiene el nombre de usuario y la contraseña del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["User"];
    $password = $_POST["inputPassword"];

    // Consulta SQL para verificar las credenciales
    $sql = "SELECT * FROM login WHERE name='$user' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Las credenciales son válidas, redirige a una página de éxito
        header("Location: login_success.html");
    } else {
        // Las credenciales son inválidas, muestra un mensaje de error
        echo "Credenciales incorrectas. Por favor, inténtalo nuevamente.";
    }
}

// Cierra la conexión a la base de datos
$conn->close();
?>