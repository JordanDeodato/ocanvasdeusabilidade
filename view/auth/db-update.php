<?php

include('db.php');


$perfil = [];
$id = filter_input(INPUT_GET, 'id');

if ($id) {

  $sql = $pdo->prepare("SELECT * FROM contato WHERE id = :id");
  $sql->bindValue(':id', $id);
  $sql->execute();

  if ($sql->rowCount() > 0) {
    $perfil = $sql->fetch(PDO::FETCH_ASSOC);
  } else {
    header("Location: account.php");
    exit;
  }
} else {
  header("Location: account.php");
  exit;
}

?>