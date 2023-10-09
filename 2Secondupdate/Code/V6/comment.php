<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task_id = $_POST['task_id'];
    $comment_text = $_POST['comment_text'];

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

    // Update task comment in table
    $sql = "UPDATE taskmanager SET comment = '$comment_text' WHERE id = $task_id";
    
    if ($conn->query($sql) === TRUE) {
        echo "new comment insert succesfull.";
    } else {
        echo "Error adding comment " . $conn->error;
    }

    $conn->close();
}
?>
