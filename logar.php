<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php 
        include ("head.php"); 
        include ("conexao.php");
        session_start();
    ?>

    <title>Login</title>

</head>
<body>
    <?php

        $usuario = mysqli_real_escape_string($conexao2, $_POST['usuario']);
        $senha = mysqli_real_escape_string($conexao2, $_POST['senha']);

        //Validando campos vazios
        if(empty($_POST['usuario'])||empty($_POST['senha'])){
            header('Location: login.php');
            exit();
        }

        //Consulta de Login
        $query = "SELECT usuario FROM usuario WHERE usuario = '{$usuario}' and senha = md5('{$senha}')";

        $result = mysqli_query($conexao2, $query);

        $row = mysqli_num_rows($result);

        //Validando o Login
        if ($row == '1'){
            $_SESSION['usuario'] = $usuario;
            header('Location: painel_administrativo.php');
            exit();
        } else {
            $_SESSION['nao_autenticado'] = true;
            header('Location: login.php');
            exit();
        }
    ?>

</body>
</html>