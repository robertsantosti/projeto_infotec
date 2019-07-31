<?php
function insereCurso($conexao, $curso, $tipo, $duracao){
        $query = "INSERT INTO cursos (
            curso,
            duracao,
            tipo)
            VALUES 
            ('{$curso}', 
            '{$duracao}',
            '{$tipo}');";
        return mysqli_query($conexao, $query);
    }

function exibeCursos($conexao){
    $cursos = array();
    $resultado=mysqli_query($conexao, "SELECT * FROM cursos");
    while($curso = mysqli_fetch_assoc($resultado)){      
        array_push($cursos, $curso);
    }
    return $cursos;
}

function deletaCurso($conexao){
    
}
?>