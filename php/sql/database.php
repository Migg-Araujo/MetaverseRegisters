<?php
include "connection.php";

$dbName = "METAVERSE";

$sql = "CREATE DATABASE $dbName";

if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Banco de dados criado com sucesso.')</script>";
} else {
    $conn->close();

    header("Location: ../../index.php");
}

$conn->select_db($dbName);

//Admin table
$sql = 'CREATE TABLE ADMIN(
COD_ADMIN INT NOT NULL AUTO_INCREMENT,
EMAIL VARCHAR(255),
PASSWORD VARCHAR(255),
    
PRIMARY KEY (COD_ADMIN)
)'; 

if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Tabela criada com sucesso.')</script>";
} else {
    echo "<script>console.log('Erro ao criar a tabela: " .')</script>';   
}

//User table
$sql = 'CREATE TABLE USER(
COD_USER INT NOT NULL AUTO_INCREMENT,
NAME VARCHAR(255),
EMAIL VARCHAR(255),
PHONE VARCHAR(255),
PERIOD VARCHAR(255),
CURSE VARCHAR(255),
    
PRIMARY KEY (COD_USER)
)'; 

if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Tabela criada com sucesso.')</script>";
} else {
    echo "<script>console.log('Erro ao criar a tabela: " .')</script>';   
}

//Add data in ADMIN
$sql = "INSERT INTO ADMIN (EMAIL, PASSWORD)
VALUES ('miguelbzr6@gmail.com','$2y$10$8X/wG2Ep6HqkUdE5kVIDMOV.Mz2melc2HJ0Da8ZFFwQBoKBJTEx0e'),
('michelesantuss@gmail.com', '$2y$10$1I43Icl586mGyDvsFSlGle5H2cfyG.Lh.QPGrJ8KoeiqgsxDStYdC'),
('mikaelfeira@gmail.com', '$2y$10$8JZOwfgcQdqXiNgZyiDE5u1g39YfZCi0fLQPYNP/JDjc7aqSvsEtO')";

if ($conn->query($sql) === TRUE) {
    echo "<script>console.log('Dados adicionados com sucesso.')</script>";
} else {
    echo "<script>console.log('Erro ao adicionar dados: ".')</script>';   
}

$conn->close();

header("Location: ../../index.php");
?>