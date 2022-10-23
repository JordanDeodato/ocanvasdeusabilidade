<!DOCTYPE html>
<html lang="en">
<?php

session_start(); //Salvar os dados do formulário e permanecer na mesma página
$dbname = "projeto1programacaoweb"; //Nome do banco de dados criado
$dbhost = "127.0.0.1"; //Porta onde o banco de dados é executado
$dbuser = "root"; //Nome do usuário
$dbpass = "Naruto9caldas*"; //Senha do usuário

$pdo = new PDO("mysql:dbname=" . $dbname . ";host:" . $dbhost . "", "" . $dbuser . "", $dbpass); //Comando para criar uma nova requisição para o BD

$email = $_REQUEST["email"]; //Recebendo o email do formulário

unset($_POST["btn"]);  //Utilizado para não contar o botão como informação enviada para o teste

// TESTE REALIZADO PARA VERIFICAR SE O CAMPO DE EMAIL ESTÁ VAZIO OU NAO, SE ESTIVER NADA ACONTECE, SE CONTER UM EMAIL DIGITADO SERÁ CADASTRADO UM NOVO EMAIL
if(!empty(array_filter($_POST))) {
    $pdo->query("INSERT INTO `contato` (email) VALUES ('$email')");
}



?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Canvas Usabilidade</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#Canvas">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#oqueé">O que é o Canvas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#como">Como utilizar o Canvas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sucesso">Estudos de caso</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mais Opções
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#download">Download do Canvas</a>
                        <a class="dropdown-item" href="#newsletter">Fazer parte da Newsletter</a>
                        <div class="dropdown-divider"></div>
                    </div>
                </li>
            </ul>

        </div>
    </nav>
    <header id="Canvas" class="navbar">

        <div class="div-logo">
            <h2>Canvas Usabilidade</h2>
            <a href="#Canvas">
                <img class="logo" src="img/logo.png" alt="">
            </a>
        </div>

        <div>
            <a href="https://www.instagram.com/ocanvasdeusabilidade/" target="_blank"><img class="img-logo" src="img/instagram-icon.png" alt="icone-instagram"></a>
            <a target="_blank" href="https://www.facebook.com/ocanvasdeusabilidade/"><img class="img-logo" src="img/facebook-icon.png" alt="icone-facebook"></a>
        </div>
    </header>
    <section class="section-banner">
        <div class="banner">
            <p class="banner-info">Definir o propósito das empresas ainda não é uma prática comum no Brasil, no entanto,
                o modelo Canvas pode te ajudar a fazer isso, e como é uma forma simples e visual de estruturação, pode
                ser bem claro para seus funcionários.</p>
        </div>
    </section>
    <main class="text-banner" id="oqueé">
        <h1>O que é Canvas de Usabilidade?</h1>
        <p>Usabilidade é um atributo de qualidade de software relacionado à facilidade de se utilizá-lo e esse atributo
            é relevante para vários tipos de sistemas. Para verificar se o produto ou serviço pretendido atende aos
            atributos de usabilidade exigidos em relação aos usuários esperados, é feita uma avaliação de usabilidade. A
            avaliação de usabilidade é um nome genérico para um grupo de métodos baseados na avaliação e inspeção ou
            exame relacionado com aspectos de usabilidade da interface com o usuário. Existem várias alternativas para
            se realizar a avaliação da usabilidade de uma solução. <strong>OCAU (O canvas de avaliação de
                Usabilidade)</strong> é um artefato desenvolvido com a intenção de facilitar o planejamento da avaliação
            de usabilidade possuindo 8 dimensões.</p>
        <div>

        </div>
    </main>
    <div id="download" class="btn-download">
        <h3>Clique aqui para baixar o modelo do Canvas</h3>
        <a href="./download/ocanvasdeUsabilidade.docx" download><input class=" btn btn-primary" type="button" value="Download"></a>
    </div>

    <div id="sucesso">
        <h2 class="casos-title">Conheça nossos estudos de caso</h2>
        <div class="casos">
            <a class="olx casos-banner" href="download/linkedin-caso-de-exito-olx.pdf" download>
                <section>
                </section>
            </a>
            <a class="autopass casos-banner" href="download/autopass.pdf" download>
                <section>
                </section>
            </a>
        </div>
    </div>

    <h2 id="como" class="casos-title">Como utilizar o Canvas de Usabilidade?</h2>
    <ol class="list">
        <li>Defina a Solução</li>
        <p>O que será avaliado? </p>
        <li> Defina os Requisitos</li>
        <p>Qual requisito ou funcionalidade será avaliado? </p>
        <li>Defina os Usuários</li>
        <p>Quem são os participantes da avaliação?</p>
        <li>Defina a(s) Tarefas</li>
        <p>Quais tarefas os participantes irão realizar?</p>
        <li>Defina o Contexto</li>
        <p>Em quais contextos estão inseridos?</p>
        <li>Defina a(s) Alternativas</li>
        <p>Quais alternativas serão utilizadas?</p>
        <li>Defina os Critérios</li>
        <p>Quais são os critérios utilizados?</p>
        <li>Defina as Métricas </li>
        <p>Quais são as métricas utilizados?</p>
    </ol>

    <form action="index.php" method="post" id="newsletter" style="width: 50%;margin: auto; text-align:center; margin-bottom: 30px;">
        <div class="form-group">
            <label for="exampleInputEmail1">Faça parte da nossa newsletter!</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email aqui" name="email">
        </div>
        <button name="btn" type="submit" class="btn btn-primary" onclick="cadastrar()">Enviar</button>
        
    </form>


    <footer class="footer">
        <div>
            Desenvolvido por <a href="https://www.linkedin.com/in/jordandeodato/">Jordan Deodato</a>
        </div>
        <div>
            <a href="https://github.com/JordanDeodato"><img src="img/logotipo-do-github.png" alt="logotipo-do-github"></a>
            <a href="https://www.linkedin.com/in/jordandeodato/"><img src="img/linkedin.png" alt="linkedin"></a>
            <a href="https://www.instagram.com/jordan_deodato/"><img src="img/instagram.png" alt="instagram"></a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>