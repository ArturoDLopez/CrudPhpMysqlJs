-- Crear nuevo registro
INSERT INTO tesistas_db.usuarios (nombre, apellido_p, apellido_m, telefono)
VALUES ('','','','');

-- Consultar todos los registros
SELECT * FROM tesistas_db.usuarios;

-- Actualizar todos los campos
UPDATE tesistas_db.usuarios SET nombre='', apellido_p='', apellido_m='', telefono='';

-- Eliminar un registro por id
DELETE FROM tesistas_db.usuarios WHERE id=0;
