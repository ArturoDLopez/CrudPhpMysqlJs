DROP SCHEMA IF EXISTS tesistas_db;

CREATE SCHEMA tesistas_db CHAR SET utf8mb4;

USE tesistas_db;

CREATE TABLE tesistas_db.usuarios
(
    id int AUTO_INCREMENT,
    nombre varchar(55) NOT NULL,
    apellido_p varchar(55) NOT NULL,
    apellido_m varchar(55) NULL,
    telefono varchar(15) NULL,
    CONSTRAINT usuarios_pk
        PRIMARY KEY (id)
);
