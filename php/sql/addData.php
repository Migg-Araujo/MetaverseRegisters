<?php
include "connection.php";

$conn->select_db('METAVERSE');

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$date = $_POST["date"];
$period = $_POST["period"];
$course = $_POST["course"];

$sql = "INSERT INTO USER (NAME, EMAIL, PHONE, DATE, PERIOD, COURSE)
VALUES ('$name', '$email', '$phone', '$date', '$period', '$course')";

if ($conn->query($sql) === TRUE) {
} else {
    echo "<script>console.log('Erro ao adicionar dado: " . $conn->error.')</script>';   
}

$conn->close();
?>