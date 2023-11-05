<?php
// Conect to the database

$servername = "localhost";
$username = "root";
$password = "";
$database = "taskmanagerpinf";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Conection fail " . $conn->connect_error);
}

// Check to get all tasks
$sql = "SELECT * FROM taskmanager";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li class='list-group-item'>Task Name: " . $row["taskname"] . ", Assigned To: " . $row["asignedto"] . ", Deadline: " . $row["deadline"] . ", Comment: " . $row["comment"] . "</li>";
    }
} else {
    echo "<li class='list-group-item'>No tasks available.</li>";
}

$conn->close();
?>
