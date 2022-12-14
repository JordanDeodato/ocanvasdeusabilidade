<?php 
// Incluindo arquivos de configuração
require_once "config.php";

//Definindo as varáveis e inicializando com valores vazios
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

//Processando dados do formulário quando o formulário é enviado
if($_SERVER["REQUEST_METHOD"] == "POST") {

    //Validando nome do usuário
    if(empty(trim($_POST["username"]))) {
        $username_err = "Por favor coloque um nome de usuário.";
    } elseif(!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))){
        $username_err = "O nome de usuário pode conter apenas letras, números e sublinhados.";
    } else{
        //Preparando uma declaração de select
        $sql = "SELECT id FROM auth WHERE username = :username";

        if($stmt = $pdo->prepare($sql)){
            //Vinculando as variáveis às instruções preparadas como parâmetros
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

            //Definindo Parâmetros
            $param_username = trim($_POST["username"]);

            //Tentando executar a declaração preparada
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    $username_err = "Este nome de usuário já está em uso.";
                } else {
                    $username = trim($_POST["username"]);
                }
            } else {
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde";
            }

            //Fechando declaração
            unset($stmt);
        }
    }

    // Validando senha
    if(empty(trim($_POST["password"]))) {
        $password_err = "Por favor insira uma senha.";
    } elseif (strlen(trim($_POST["password"])) < 6){
        $password_err = "A senha deve ter pelo menos 6 caracteres.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validando e confirmando a senha
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Por favor, confirme a senha.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "A senha não confere.";
        }
    }

    //Verificando os erros de entrada antes de inserir no banco de dados
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        //Preparando uma declaração de inserção
        $sql = "INSERT INTO auth (username, password) VALUES (:username, :password)";

        if($stmt = $pdo->prepare($sql)) {

            //Vinculando as variáveis às instruções preparadas como parâmetros
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);

            //Definindo Parâmetros
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT);
            //Criando uma senha criptografada

            //Tentando executar a declaração preparada
            if($stmt->execute()){
                //Redirecionando para a página de login
                header("location: login.php");
            } else {
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            //Fechando declaração
            unset($pdo);
        }
    }
    //Fechando conexão
    unset($pdo);
}

?>