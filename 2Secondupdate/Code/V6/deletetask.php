<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task_id = $_POST['task_id'];

    // Conectar a la base de datos (reemplaza con tus credenciales)
    $servername = "tu_servidor";
    $username = "tu_usuario";
    $password = "tu_contraseña";
    $dbname = "taskmanagerpinf";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Conection fail " . $conn->connect_error);
    }

    // Borrar la tarea de la tabla
    $sql = "DELETE FROM taskmanager WHERE id = $task_id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Task delete succesfull";
    } else {
        echo "Error triying delete task " . $conn->error;
    }

    $conn->close();
}
?>
