<?php
$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Nombre de la tarea: " . $row["task_name"] . "<br>";
        echo "Descripción de la tarea: " . $row["task_description"] . "<br>";
        echo "<hr>";
    }
} else {
    echo "No hay tareas registradas.";
}
?>
