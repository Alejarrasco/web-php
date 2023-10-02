<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task_name = $_POST["task_name"];
    $task_description = $_POST["task_description"];

    $sql = "INSERT INTO tasks (task_name, task_description) VALUES ('$task_name', '$task_description')";

    if ($conn->query($sql) === TRUE) {
        echo "Tarea creada exitosamente.";
    } else {
        echo "Error al crear la tarea: " . $conn->error;
    }
}
?>
