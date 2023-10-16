<?php
$host = 'localhost'; // Endereço do servidor MySQL
$username = 'root'; // Nome de usuário do MySQL
$password = 'Vini2mil7@'; // Senha do MySQL
$database = 'formulario-univap'; // Nome do banco de dados

// Conectar ao banco de dados
$mysqli = new mysqli($host, $username, $password, $database);

// Verificar a conexão
if ($mysqli->connect_error) {
    die("Erro de conexão: " . $mysqli->connect_error);
} else {
    echo "Conexão efetuada com sucesso";
}

// Agora você pode executar consultas SQL usando esta conexão
// Por exemplo:
$sql = "SELECT * FROM tabela";
$result = $mysqli->query($sql);

// Processar o resultado da consulta
if ($result) {
    while ($row = $result->fetch_assoc()) {
        echo "Nome: " . $row['nome'] . "<br>";
    }
} else {
    echo "Erro na consulta: " . $mysqli->error;
}

// Fechar a conexão quando terminar
$mysqli->close();
?>
