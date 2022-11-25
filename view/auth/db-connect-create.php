<?php 

include('db.php');

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];

$pdo->query("INSERT INTO `contato` (nome, email) VALUES ('$nome', '$email')");

header("location: account.php");
  
?>