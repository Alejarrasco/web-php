<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $task_id = $_POST["task_id"];

    $sql = "DELETE FROM tasks WHERE id=$task_id";

    if ($conn->query($sql) === TRUE) {
        echo "Tarea eliminada exitosamente.";
    } else {
        echo "Error al eliminar la tarea: " . $conn->error;
    }
}
?>
