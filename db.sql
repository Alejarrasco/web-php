CREATE DATABASE phpdatabase;

USE phpdatabase;

CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task_name VARCHAR(255) NOT NULL,
    task_description TEXT
);

INSERT INTO tasks (task_name, task_description) VALUES
('Tarea 1', 'Descripción de la tarea 1'),
('Tarea 2', 'Descripción de la tarea 2'),
('Tarea 3', 'Descripción de la tarea 3');
