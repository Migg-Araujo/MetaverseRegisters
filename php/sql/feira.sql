DROP DATABASE IF EXISTS METAVERSE;
CREATE DATABASE METAVERSE;
USE METAVERSE;

CREATE TABLE ADMIN(
COD_ADMIN INT NOT NULL AUTO_INCREMENT,
EMAIL VARCHAR(255),
PASSWORD VARCHAR(255),

PRIMARY KEY (COD_ADMIN)
);

CREATE TABLE USER(
COD_USER INT NOT NULL AUTO_INCREMENT,
NAME VARCHAR(255), 
EMAIL VARCHAR(255),
PHONE VARCHAR(20),
DATE VARCHAR(20),
PERIOD VARCHAR(255),
COURSE VARCHAR(255),

PRIMARY KEY (COD_USER)
);
INSERT INTO ADMIN (EMAIL, PASSWORD)
VALUES ('miguelbzr6@gmail.com','$2y$10$8X/wG2Ep6HqkUdE5kVIDMOV.Mz2melc2HJ0Da8ZFFwQBoKBJTEx0e'),
('michelesantuss@gmail.com', '$2y$10$1I43Icl586mGyDvsFSlGle5H2cfyG.Lh.QPGrJ8KoeiqgsxDStYdC'),
('mikaelfeira@gmail.com', '$2y$10$8JZOwfgcQdqXiNgZyiDE5u1g39YfZCi0fLQPYNP/JDjc7aqSvsEtO');