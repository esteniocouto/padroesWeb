<?php

/* criando conexão com o banco de dados*/

$usuario = 'root';
$senha = '';
$database = 'test';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

/* verificar se a conexão com o banco de dados obteve exito  */

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

?>

