<?php
include('db-update.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Editar contato</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Editar contato</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/projeto-crud/index.php">Lista de contatos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <form action="back-update.php" method="POST" class="row g-3"  style="margin: 15px;">
        <div class="col-md-10">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id" name="id" value="<?php echo $perfil['id']; ?>" readonly>
        </div>
        <div class="col-md-10">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $perfil['nome']; ?>" required>
        </div>
        <div class="col-md-10">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $perfil['email']; ?>" required>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Editar</button>
        </div>
    </form>
</body>
</html>