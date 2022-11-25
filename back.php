<?php

session_start(); //Salvar os dados do formulário e permanecer na mesma página
$dbname = "projeto1programacaoweb"; //Nome do banco de dados criado
$dbhost = "127.0.0.1"; //Porta onde o banco de dados é executado
$dbuser = "root"; //Nome do usuário
$dbpass = ""; //Senha do usuário

$pdo = new PDO("mysql:dbname=" . $dbname . ";host:" . $dbhost . "", "" . $dbuser . "", $dbpass); //Comando para criar uma nova requisição para o BD

$nome = $_REQUEST["nome"]; //Recebendo nome do usuario do formulário
$email = $_REQUEST["email"]; //Recebendo o email do usuario do formulário

unset($_POST["btn"]);  //Utilizado para não contar o botão como informação enviada para o teste

// TESTE REALIZADO PARA VERIFICAR SE O CAMPO DE EMAIL ESTÁ VAZIO OU NAO, SE ESTIVER NADA ACONTECE, SE CONTER UM EMAIL DIGITADO SERÁ CADASTRADO UM NOVO EMAIL
if($nome && $email) {
    $pdo->query("INSERT INTO `contato` (nome, email) VALUES ('$nome', '$email')");
}

header("location: index.php");

?>