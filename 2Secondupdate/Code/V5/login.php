<?php
// Database connection
$conn = new mysqli("localhost:80", "root", "", "taskmanagerpinf");

if ($conn->connect_error) {
    die("Database connection fail: " . $conn->connect_error);
}

// Login verification
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usr = $_POST["username"];
    $pass = $_POST["password"];

    // Make the query to verify the credentials
    $sql = "SELECT * FROM login WHERE usr = '$usr' AND pass = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // The credentials are correct
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => "Incorrect credentials. Please try again."]);
    }
}
?>
