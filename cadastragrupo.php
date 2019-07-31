<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include ("head.php") ?>
    <title>Document</title>
</head>
<body>
    <?php

    include ("conexao.php");
    include ("data_grupo.php");

    $modalidade = mysqli_real_escape_string($conexao2, $_POST['tipo']);
    $grupo = mysqli_real_escape_string($conexao2, $_POST['grupo']);
    $insc = mysqli_real_escape_string($conexao2, $_POST['insc']);
    $feira = mysqli_real_escape_string($conexao2, $_POST['feira']);
    $usuario = mysqli_real_escape_string($conexao2, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conexao2, $_POST['senha']);
    $lider = mysqli_real_escape_string($conexao2, $_POST['lider']);
    $integrante2 = mysqli_real_escape_string($conexao2, $_POST['integrante2']);
    $integrante3 = mysqli_real_escape_string($conexao2, $_POST['integrante3']);
    $integrante4 = mysqli_real_escape_string($conexao2, $_POST['integrante4']);
    $integrante5 = mysqli_real_escape_string($conexao2, $_POST['integrante5']);
    $integrante6 = mysqli_real_escape_string($conexao2, $_POST['integrante6']);
    $descricao = mysqli_real_escape_string($conexao2, $_POST['desc']);
    $turma = mysqli_real_escape_string($conexao2, $_POST['turma']);


    if(insereGrupo($conexao2, $insc, $grupo, $turma, $feira, $lider, $integrante2, $integrante3, $integrante4, $integrante5, $integrante6, $descricao)&&cadastraUsuario($conexao2, $usuario, $senha, $lider, $modalidade)){
        
        if ($feira=="INFOTEC"){
            cadastraInfotec($conexao2, $insc, $grupo, $turma, $descricao);
            header ("Location: confirmacadastro.php");
        }else if ($feira=="FESEG"){
            cadastraFeseg($conexao2, $insc, $grupo, $turma, $descricao);
            header ("Location: confirmacadastro.php");
        }else if ($feira=="SILOG"){
            cadastraSilog($conexao2, $insc, $grupo, $turma, $descricao);
            header ("Location: confirmacadastro.php");
        }
        
    }else{
        header ("Location: index.php");
    }

    

    ?>
</body>
</html>




   