<?php
/*verificando a conexão com o banco de dados */
include('conexao.php');

/* verificando se o E-mail digitado e a senha correspondem a dados existentes no banco  */

if(isset($_POST['email']) || isset($_POST['senha'])) {

    /* VERIFICANDO SE O E-MAIL OFI PREENCHIDO EM BRANCO  */

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";

        /* VERIFICANDO SE A SENHA FOI PREENCHIDA EM BRANCO */

    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";

        /* codigo do login */

    } else {
    /* limpando falha do php onde or 1=1 acessa o banco de dados */

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

    /* criando a query sql */

        $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
            /* executando a query */

        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
    /* verificar se a quantidade de registro retornado pela consuta é igual a 1 */

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
/*criando uma sessão para o usuario */
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['email'] = $usuario['email'];

/* apos criar a sessão redirecionar para o painel do usuario  */

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Acesse sua conta</h1>
    <form action="" method="POST">
        <p>
            <label>E-mail</label>
            <input type="text" name="email">
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha">
        </p>
        <p>
            <button type="submit">Entrar</button>
            <button type="RESET">LIMPAR</button>
        </p>
    </form>
</body>
</html>