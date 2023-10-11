<?php
include __DIR__.'/../sql/conexao.php';
$conn->select_db('FEIRATECNOLOGICA');

$email = $conn->real_escape_string($_POST['email_login']);
$senha = $conn->real_escape_string($_POST['password_login']);

$sql = "SELECT * FROM ADM WHERE email = '$email' LIMIT 1";
$sql_query = $conn->query($sql) or die("Falha na execução do código SQL");

$admin = $sql_query->fetch_assoc();

if(isset($admin) && $senha == $admin['SENHA']){
    include 'sessionStart.php';

    $_SESSION['user'] = $admin['COD_ADMIN'];
    $_SESSION['name'] = $admin['EMAIL'];

    header('Location: ./src/registros.php');
}else{
    echo "<p class ='msg'>Falha ao logar! E-mail ou senha incorretos</p>";
}
?>