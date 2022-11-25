<?php 

$dbname = "projeto1programacaoweb"; //Nome do banco de dados criado
$dbhost = "127.0.0.1"; //Porta onde o banco de dados é executado
$dbuser = "root"; //Nome do usuário
$dbpass = ""; //Senha do usuário

$pdo = new PDO("mysql:dbname=" . $dbname . ";host:" . $dbhost . "", "" . $dbuser . "", $dbpass); //Comando para criar uma nova requisição para o BD

?>