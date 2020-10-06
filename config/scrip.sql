CREATE DATABASE app_odoo

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    host CHAR(100)  NULL,
    name CHAR(100)  NULL,
    user CHAR(100)  NULL,
    email CHAR(100)  NULL,
    datestart TIMESTAMP null,
    datestop TIMESTAMP null,
    active boolean not null default 0,
    token CHAR(250)  NULL,
    UNIQUE KEY(user,token)
);

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
CREATE TABLE version_apk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name CHAR(100)  NULL,
    mandatory boolean not null default 1,
    versioncode INTEGER  NOT NULL,
    versionname CHAR(100)  not NULL,
    download_url TINYTEXT,
    UNIQUE KEY(versioncode)
);
ALTER TABLE version_apk MODIFY versioncode  DECIMAL(6,1) NOT NULL;