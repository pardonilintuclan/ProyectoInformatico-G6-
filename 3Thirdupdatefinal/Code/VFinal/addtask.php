<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $taskname = $_POST['taskname'];
    $asignedto = $_POST['asignedto'];
    $deadline = $_POST['deadline'];
    $comment = $_POST['comment'];

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

    // Insert the new task
    $sql = "INSERT INTO taskmanager (taskname, asignedto, deadline, comment) VALUES ('$taskname', '$asignedto', '$deadline', '$comment')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Task insert succesfull.";
    } else {
        echo "Error adding new task: " . $conn->error;
    }

    $conn->close();
}
?>
