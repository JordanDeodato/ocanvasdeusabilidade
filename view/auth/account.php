<?php
// Inicialize a sessão
session_start();

// Verifique se o usuário está logado, se não, redirecione-o para uma página de login
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Agenda</title>
</head>

<body>
    <div style="display: flex; justify-content:space-between; margin: 10px;">
        <h2>Olá, <?php echo htmlspecialchars($_SESSION["username"]); ?>. Seja bem vindo</h2>
        <a href="logout.php" class="btn btn-danger ml-3">Sair da conta</a>
    </div>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Lista de contatos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/ocanvasdeusabilidade/view/auth/create.php">Criar novo contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <table class="table table-dark table-striped" style="margin: 15px;">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">email</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php include('contact-list.php'); ?>
        </tbody>
    </table>
    <?php if (!$lista) : ?>
        <div class="alert alert-dark text-center" role="alert">
            Nenhum contato cadastrado
        </div>
    <?php endif ?>
</body>

</html>