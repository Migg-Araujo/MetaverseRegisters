<?php
include "connection.php";

$conn->select_db('METAVERSE');

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];

$sql = "INSERT INTO USER (NAME, EMAIL, PHONE)
VALUES ('$name', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
} else {
    echo "<script>console.log('Erro ao adicionar dado: " . $conn->error.')</script>';   
}

$conn->close();
?>