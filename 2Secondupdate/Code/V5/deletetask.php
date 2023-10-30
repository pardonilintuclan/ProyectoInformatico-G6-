<?php
$conn = new mysqli("localhost:90", "root", "", "taskmanagerpinf");

if ($conn->connect_error) {
    die("Conection fail: " . $conn->connect_error);
}

$data = json_decode(file_get_contents("php://input"));
$id = $conn->real_escape_string($data->id);

$sql = "DELETE FROM tasks WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    $response = ["success" => true];
} else {
    $response = ["success" => false, "error" => $conn->error];
}

echo json_encode($response);
$conn->close();
?>
