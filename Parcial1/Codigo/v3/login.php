<?php
// Establecer la conexión a la base de datos
$conn = new mysqli("localhost", "mysqladmin", "root", "login");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$data = json_decode(file_get_contents("php://input"));

$username = $conn->real_escape_string($data->username);
$password = $conn->real_escape_string($data->password);

    // Consulta SQL para verificar las credenciales
    $sql = "SELECT * FROM login WHERE name='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Las credenciales son válidas, redirige a una página de éxito
        header("Location: login_success.html");
        $response = ["success" => true];
    } else {
        // Las credenciales son inválidas, muestra un mensaje de error
        echo "Credenciales incorrectas. Por favor, inténtalo nuevamente.";
        $response = ["success" => false];
    }

echo json_encode($response);
// Cierra la conexión a la base de datos
$conn->close();
?>