CREATE DATABASE app_odoo

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    host CHAR(100)  NULL,
    name CHAR(100)  NULL,
    user CHAR(100)  NULL,
    datestart TIMESTAMP null,
    datestop TIMESTAMP null,
    active boolean not null default 0,
    token TINYTEXT,
    UNIQUE KEY(user,token)
);

ALTER TABLE clientes ADD email CHAR(100)  NULL;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name CHAR(100)  NULL,
    user CHAR(100)  NULL,
    datestop TIMESTAMP null,
    active boolean not null default 0,
    password TINYTEXT,
    UNIQUE KEY(user)
);

CREATE TABLE contacto (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name CHAR(100)  NULL,
    mail CHAR(100)  NULL,
    mensaje TINYTEXT
);
CREATE TABLE paquetes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    mail CHAR(100)  NULL,
    paquete CHAR(100)  NULL,
    datestop TIMESTAMP null
);
