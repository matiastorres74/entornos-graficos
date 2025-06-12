CREATE DATABASE base2;
USE base2;

CREATE TABLE alumnos (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    codigocurso INT,
    mail VARCHAR(100) NOT NULL UNIQUE
);

INSERT INTO alumnos (nombre, codigocurso, mail) VALUES
('Juan Perez', 101, 'juan.perez@example.com'),
('Maria Gomez', 102, 'maria.gomez@example.com'),
('Lucas Fernandez', 103, 'lucas.fernandez@example.com');
