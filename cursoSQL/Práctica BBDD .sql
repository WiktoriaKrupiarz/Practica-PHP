CREATE DATABASE curso_sql;

USE curso_sql;

CREATE TABLE usuario(
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30) NOT NULL,
    apellido VARCHAR(30),
    email VARCHAR(20)
);

INSERT INTO usuario(nombre, apellido, email) VALUES('Nombre', 'Apellido', 'Email');