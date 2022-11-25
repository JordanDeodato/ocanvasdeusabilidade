<?php 

    include('db.php');
	
	// SELECIONANDO DADOS NO BANCO DE DADOS
	
    $sql = $pdo->query("SELECT * FROM contato");

    $lista = [];

    // COLOCANDO DADOS NO ARRAY
    if($sql->rowCount() > 0) {
        $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
    }
?>