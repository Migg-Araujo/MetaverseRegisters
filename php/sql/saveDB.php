<?php
include "connection.php";
$dbname = 'METAVERSE';
$conn->select_db('METAVERSE');

$backup_file = 'C:/wamp64/www/backup.sql';


$command = "C:\wamp64\bin\mysql\mysql8.0.31\bin\mysqldump --user={$username} --password={$password} --host={$servername} {$dbname} > {$backup_file}";

// Executando o comando
exec($command, $output, $return_var);

// Verificando se o comando foi executado com sucesso
if ($return_var === 0) {
    echo "Backup criado com sucesso!";
} else {
    echo "Erro ao criar o backup.";
}

$conn->close();

header("Location: ../register.php");
?>