CREATE USER 'gestor'@'localhost' IDENTIFIED BY 'tesistas';

GRANT ALL PRIVILEGES ON tesistas_db.* TO 'gestor'@'localhost';

FLUSH PRIVILEGES;

