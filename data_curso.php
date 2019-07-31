<?php
include ("conexao.php");

function insereCurso($conexao2, $curso, $tipo, $duracao){
        $query = "INSERT INTO cursos (
            nome_curso,
            duracao,
            modalidade,
            votos
            )VALUES(
            '{$curso}',
            '{$duracao}',
            '{$tipo}',
            '0'
            );";
        return mysqli_query($conexao2, $query);
    }

function exibeCursos($conexao2){
    $cursos = array();
    $resultado=mysqli_query($conexao2, "SELECT * FROM cursos");
    while($curso = mysqli_fetch_assoc($resultado)){      
        array_push($cursos, $curso);
    }
    return $cursos;
}

function exibeCursosByVotos($conexao2){
    $cursos = array();
    $resultado=mysqli_query($conexao2, "SELECT * FROM cursos ORDER BY votos DESC;");
    while($curso = mysqli_fetch_assoc($resultado)){      
        array_push($cursos, $curso);
    }
    return $cursos;
}

function removeCursos($conexao2, $id){
    $query = "DELETE FROM cursos WHERE cod_cursos = '{$id}'";
    return mysqli_query($conexao2, $query);
}

//Eletrônica
function quantVotosEletronica($conexao2){
    $query = ("SELECT votos FROM cursos WHERE nome_curso = 'Eletrônica';");
    $ve = mysqli_query($conexao2,$query);
    $resulte = mysqli_fetch_array($ve);
    echo $resulte[0];
}

//Eletrotécnica
function quantVotosEletrotecnica($conexao2){
    $query = ("SELECT votos FROM cursos WHERE nome_curso = 'Eletrotécnica';");
    $vet = mysqli_query($conexao2,$query);
    $resultet = mysqli_fetch_array($vet);
    echo $resultet[0];
}

//Eletromecânica
function quantVotosEletromecanica($conexao2){
    $query = ("SELECT votos FROM cursos WHERE nome_curso = 'Eletromecânica';");
    $vem = mysqli_query($conexao2,$query);
    $resultem = mysqli_fetch_array($vem);
    echo $resultem[0];
}
//Informatica para Internet
function quantVotosInfoI($conexao2){
    $query = ("SELECT votos FROM cursos WHERE nome_curso = 'Informática para Internet';");
    $vii = mysqli_query($conexao2,$query);
    $resultii = mysqli_fetch_array($vii);
    echo $resultii[0];
}

//Informatica
function quantVotosInfo($conexao2){
    $query = ("SELECT votos FROM cursos WHERE nome_curso = 'Informática';");
    $vi = mysqli_query($conexao2,$query);
    $resulti = mysqli_fetch_array($vi);
    echo $resulti[0];
}

//Logística
function quantVotosLogistica($conexao2){
    $query = ("SELECT votos FROM cursos WHERE nome_curso = 'Logística';");
    $vl = mysqli_query($conexao2,$query);
    $resultl = mysqli_fetch_array($vl);
    echo $resultl[0];
}
//Mecânica Industrial
function quantVotosMecanica($conexao2){
    $query = ("SELECT votos FROM cursos WHERE nome_curso = 'Mecânica Industrial';");
    $vm = mysqli_query($conexao2,$query);
    $resultm = mysqli_fetch_array($vm);
    echo $resultm[0];
}

//Segurança do Trabalho
function quantVotosSeg($conexao2){
    $query = ("SELECT votos FROM cursos WHERE nome_curso = 'Segurança do Trabalho';");
    $vs = mysqli_query($conexao2,$query);
    $results = mysqli_fetch_array($vs);
    echo $results[0];
}

//Inserindo os votos

//Eletrônica
function insereVotosEletronica($conexao2){
    $query = ("UPDATE cursos SET votos=votos+1 WHERE nome_curso = 'Eletrônica';");
    return mysqli_query($conexao2, $query);
}

//Eletrotécnica
function insereVotosEletrotecnica($conexao2){
    $query = "UPDATE cursos SET votos=votos+1 WHERE nome_curso = 'Eletrotécnica';";
    return mysqli_query($conexao2, $query);
}

//Eletromecânica
function insereVotosEletromecanica($conexao2){
    $query = ("UPDATE cursos SET votos=votos+1 WHERE nome_curso = 'Eletromecânica';");
    return mysqli_query($conexao2, $query);
}
//Informatica para Internet
function insereVotosInfoI($conexao2){
    $query = ("UPDATE cursos SET votos=votos+1 WHERE nome_curso = 'Informática para Internet';");
    return mysqli_query($conexao2, $query);
}

//Informatica
function insereVotosInfo($conexao2){
    $query = ("UPDATE cursos SET votos=votos+1 WHERE nome_curso = 'Informática';");
    return mysqli_query($conexao2, $query);
}

//Logística
function insereVotosLogistica($conexao2){
    $query = ("UPDATE cursos SET votos=votos+1 WHERE nome_curso = 'Logística';");
    return mysqli_query($conexao2, $query);
}
//Mecânica Industrial
function insereVotosMecanica($conexao2){
    $query = ("UPDATE cursos SET votos=votos+1 WHERE nome_curso = 'Mecânica Industrial';");
    return mysqli_query($conexao2, $query);
}

//Segurança do Trabalho
function insereVotosSeg($conexao2){
    $query = ("UPDATE cursos SET votos=votos+1 WHERE nome_curso = 'Segurança do Trabalho';");
    return mysqli_query($conexao2, $query);
}

?>