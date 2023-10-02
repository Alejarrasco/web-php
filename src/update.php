<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task_id = $_POST["task_id"];
    $new_task_name = $_POST["new_task_name"];
    $new_task_description = $_POST["new_task_description"];

    $sql = "UPDATE tasks SET task_name='$new_task_name', task_description='$new_task_description' WHERE id=$task_id";

    if ($conn->query($sql) === TRUE) {
        echo "Tarea actualizada exitosamente.";
    } else {
        echo "Error al actualizar la tarea: " . $conn->error;
    }
}
?>
