<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        session_start();
        include ("head.php");
        include ("conexao.php");
        include ("data_grupo.php");
    ?>
    <title>Document</title>
</head>
<body>
    <?php

        $voto = mysqli_real_escape_string($conexao2, $_POST['voto']);
        
        function cadastraVotoFeira($conexao2, $voto){
            $query = "UPDATE grupo SET quant_votos = quant_votos+1 WHERE grupo='{$voto}';";
            return mysqli_query($conexao2, $query);
        }


        if(isset($_COOKIE['voto_c'])){
            $_SESSION['msg'] = "<span class='text-danger text-center'>Você ja votou</span>";
            header ("Location: votacao_feira.php");
        } else {
            setcookie('voto_c', $_SERVER['REMOTE_ADDR'], time()+10);
            if(cadastraVotoFeira($conexao2, $voto)){
                $_SESSION['ms'] = "<span class='text-success text-center'>Voto cadastrado com sucesso</span>";
                header ("Location: votacao_feira.php");
            }else{
                $_SESSION['ms'] = "<span class='text-danger text-center'>Voto não cadastrado</span>";
            }
        }
    ?>
</body>
</html>