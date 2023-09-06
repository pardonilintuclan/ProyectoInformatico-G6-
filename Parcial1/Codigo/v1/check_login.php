<?php
// Establecer la conexión a la base de datos
$conn = new mysqli("localhost", "usuario", "contraseña", "basededatos");

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$data = json_decode(file_get_contents("php://input"));

$username = $conn->real_escape_string($data->username);
$password = $conn->real_escape_string($data->password);

// Consultar la base de datos para verificar las credenciales
$sql = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows === 1) {
    $response = ["success" => true];
} else {
    $response = ["success" => false];
}

echo json_encode($response);

$conn->close();
?>
