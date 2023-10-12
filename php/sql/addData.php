<?php
include "connection.php";

$conn->select_db('METAVERSE');

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$period = $_POST["period"];
$curse = $_POST["curse"];

$sql = "INSERT INTO USER (NAME, EMAIL, PHONE, PERIOD, CURSE)
VALUES ('$name', '$email', '$phone', '$period', '$curse')";

if ($conn->query($sql) === TRUE) {
} else {
    echo "<script>console.log('Erro ao adicionar dado: " . $conn->error.')</script>';   
}

$conn->close();
?>