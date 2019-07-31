<?php
include ("conexao.php");

    $sql = ("SELECT COUNT(cadastro_voto_curso_cod_votacao) FROM lista_votos_curso;");
    $rs = mysqli_query($conexao,$sql);
    //-----------^  need to run query here

    $result = mysqli_fetch_array($rs);
    //here you can echo the result of query
    echo $result[0];

    ?>