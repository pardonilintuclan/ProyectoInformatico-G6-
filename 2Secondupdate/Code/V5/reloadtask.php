<?php
$conn = new mysqli("localhost:90", "root", "", "taskmanagerpinf");

if ($conn->connect_error) {
    die("Conection fail: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM tasks");

if ($result->num_rows > 0) {
    $task = array();
    while ($row = $result->fetch_assoc()) {
        $task[] = array(
            "id" => $row["id"],
            "task" => $row["task"],
            "complete" => $row["complete"]
        );
    }
    $response = ["success" => true, "task" => $task];
} else {
    $response = ["success" => true, "task" => []];
}

echo json_encode($response);
$conn->close();
?>
