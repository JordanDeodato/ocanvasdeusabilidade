<?php include('login-back.php');  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <style>
        body {
            margin: 10px;
        }
    </style>
    <title>Página de Login</title>
</head>

<body>
    <a href="../../index.php" class="btn btn-outline-info ml-3">Voltar para a página principal</a>
    <div class="wrapper">
        <h1>Página de Login</h1>
        <p>Por favor, preencha todos os campos para fazer login</p>

        <?php
        if (!empty($login_err)) {
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label for="username">Nome de usuário</label>
                <input type="text"  name="username" class="form-control  <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>
            <div class="form-group">
                <label for="password">Senha do usuário</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <button class="btn btn-primary " type="submit">Login</button>
            </div>
        </form>
        <p>Não tem uma conta? <a href="register.php">Cadastre-se agora.</a></p>
    </div>
</body>

</html>