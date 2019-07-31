<?php

    include ("conexao.php");
    include ("data_curso.php");

    $curso = mysqli_real_escape_string($conexao2, $_POST['curso']);
    $tipo = mysqli_real_escape_string($conexao2, $_POST['modalidade']);
    $duracao = mysqli_real_escape_string($conexao2, $_POST['duracao']);
    
    if(insereCurso($conexao2, $curso, $tipo, $duracao)){
        header ("Location: cursos.php");
        exit();
    }else{ 
        $msg = mysqli_error($conexao);
        echo "<p class='text-danger text-center'>Erro: $msg</p>";
        header ("Location: cursos.php");
        exit();
    }

?>