<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" >
    <title> Formulário de Acesso ao site </title>
</head>

<body>
    <form action="" method="POST">

        <fieldset>
            <legend>Painel de Login</legend>

            <input type=text name="login" placeholder="Informe seu Login" required>
            <input type="password" name="senha" placeholder="Insira sua Senha" required>

            <button type="submit">Entrar</button>

        </fieldset>

    </form>

    <br><br><br>

</body>
</html>

<?php

include('conexao.php');

if(isset($_POST['login']) || isset($_POST['senha'])) {

    if(strlen($_POST['login']) == 0 ){
        echo "Preencha seu login!";
    }
    else if(strlen($_POST['senha']) == 0 ){
        echo "Preencha sua senha!";
    }
    else{

        $bancoDados = new db();

        $mysqli = $bancoDados->conecta_mysql();


        $login = $mysqli->real_escape_string($_POST['login']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){

            $consulta = "SELECT * FROM cadastro";
            $con = $mysqli->query($consulta) or die("Falha na execução do código SQL: " . $mysqli->error);

            include('tabela_cadastro.php');

        }
        else{
            echo "Falha ao logar! E-mail ou senha incorretos!";
        }
    }

}

?>



