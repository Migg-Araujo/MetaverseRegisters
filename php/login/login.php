<?php
include __DIR__.'/../sql/connection.php';
$conn->select_db('METAVERSE');

$email = $conn->real_escape_string($_POST['email_login']);
$password = $conn->real_escape_string($_POST['password_login']);

$sql = "SELECT * FROM ADMIN WHERE email = '$email' LIMIT 1";
$sql_query = $conn->query($sql) or die("Falha na execução do código SQL");

$admin = $sql_query->fetch_assoc();

if(isset($admin) && password_verify($password, $admin['PASSWORD'])){
    include 'sessionStart.php';

    $_SESSION['user'] = $admin['COD_ADMIN'];
    $_SESSION['name'] = $admin['EMAIL'];

    header('Location: ./php/register.php');
}else{
    echo "<p class ='msg'>Falha ao logar! E-mail ou senha incorretos</p>";
}
?>