<?php 
//inicializando a sessão
session_start();

//verificando se o usuário já está logado
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: account.php");
    exit;
}

//Incluir arquivo de configuração
require_once "config.php";

//Definindo as varáveis e inicializando com valores vazios
$username = $password = "";
$username_err = $password_err = $login_err = "";

//Processando dados do formulário quando o formulário é enviado
if($_SERVER["REQUEST_METHOD"] == "POST"){

    //Verificando se o nome de usuário está vazio
    if(empty(trim($_POST["username"]))){
        $username_err = "Por favor, insira o nome de usuário.";
    } else {
        $username = trim($_POST["username"]);
    }

    //Verificando se a senha está vazia
    if(empty(trim($_POST["password"]))){
        $password_err = "Por favor, insira sua senha.";
    } else {
        $password = trim($_POST["password"]);
    }

    //Validando as credenciais
    if(empty($username_err) && empty($password_err)) {
        //preparando uma declaração selecionada
        $sql = "SELECT id, username, password FROM auth WHERE username = :username";

        if($stmt = $pdo->prepare($sql)){
            //Vinculando as variáveis às instruções preparadas como parâmetros
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

            //Definindo os parâmetros
            $param_username = trim($_POST["username"]);

            //Tentando executar a declaração preparada
            if($stmt->execute()){
                //verificando se o nome de usuário existe, se sim, verifique a senha
                if($stmt->rowCount() == 1){
                    if($row = $stmt->fetch()){
                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password = $row["password"];
                        if(password_verify($password, $hashed_password)){
                            //A senha está correta, então iniciando uma nova sessão
                            session_start();

                            //Armazenando os dados em variáveis de sessão
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

                            //Redirecionando o usuário para a página de boas-vindas
                            header("location: account.php");
                        } else {
                            //A senha não é válida, exibindo uma mensagem de erro genérica
                            $login_err = "Nome de usuário ou senha inválidos.";
                        }
                    }
                } else {
                    // O nome de usuário não existe, exibindo uma mensagem de erro genérica
                    $login_err = "Nome de usuário ou senha inválidos.";
                }
            } else {
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde";
            }

            //fechando declaração
            unset($stmt);
        }
    }

    // Fechando conexão
    unset($pdo);
}

?>