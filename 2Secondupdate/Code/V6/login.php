<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "taskmanagerpinf";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection fail " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usr = $_POST["username"];
    $pass = $_POST["password"];

    $sql = "SELECT * FROM login WHERE usr = '$usr' AND pass = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        header("Location: tasklog.html");
        exit();
    } else {
        echo "Incorrect credentials. Please try again.";
    }
}

$conn->close();
?>
