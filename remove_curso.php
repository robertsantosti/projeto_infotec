<?php 

include ("head.php");
include ("conexao.php");
include ("data_curso.php");

$id =$_GET["id"];

if(removeCursos($conexao2, $id)){
    header ("Location: cursos");
}else{
    header ("Location: cursos");
}

?>
