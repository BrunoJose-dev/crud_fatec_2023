<?php

$host = "localhost"; // nome do servidor MySQL
$user = "id21333447_bruno"; // usuário do MySQL
$pass = "105117Kc&"; // senha do MySQL
$dbname = "id21333447_crudfatec"; // nome do banco de dados

// Conexão com o banco de dados MySQL
$conn = mysqli_connect($host, $user, $pass, $dbname);

// Verifica se houve erro na conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
