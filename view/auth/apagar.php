<?php 

    include('db.php');
	
	// SELECIONANDO DADOS NO BANCO DE DADOS
	
    $sql = $pdo->query("SELECT * FROM contato");

    $id = filter_input(INPUT_GET, 'id');

    if ($id){

        $sql = $pdo->prepare("DELETE FROM contato WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
      
      }
      
      // REDIRENCIONANDO PARA URL ....
      header("Location: account.php")
?>