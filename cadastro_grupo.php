<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include ("head.php");?>
    <title>Cadastro de Grupo</title>
</head>
<body>
    <?php
        include ("conexao.php");
        include ("banco_grupo.php");

        $grupo=$_POST['grupo'];
        $desc=$_POST['desc'];
        $insc=$_POST['insc'];
        $turma=$_POST['turma'];
        $lider = $_POST['lider'];
        $feira = $_POST['feira'];
        $i2 = $_POST['i2'];
        $i3 = $_POST['i3'];
        $i4 = $_POST['i4'];
        $i5 = $_POST['i5'];
        $i6 = $_POST['i6'];

        insereGrupo ($conexao, $grupo, $desc, $insc, $turma, $feira) && insereIntegrante($conexao, $grupo, $insc, $turma, $lider, $i2, $i3, $i4, $i5, $i6, $feira) && insereVotacao($conexao, $grupo, $insc, $feira) && insereContGrupo($conexao, $grupo, $feira);

    ?>
</body>
</html>