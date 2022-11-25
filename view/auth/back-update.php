<?php 

    include('db.php');
	
    $id = $_REQUEST['id'];
    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];

    $new = $pdo->prepare('UPDATE contato SET nome = :nome, email = :email WHERE id = :id');
    $new->execute(array(
    ':id'   => $id,
    ':nome' => $nome,
    ':email' => $email
  ));
      
      // REDIRENCIONANDO PARA URL ....
    header("Location: account.php")

?>