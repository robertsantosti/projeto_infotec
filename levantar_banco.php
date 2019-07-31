<?php
    
    $conexao = mysqli_connect('localhost', 'root', '', 'infotec33');

    $curso1 = "Eletromecânica";
    $curso2 = "Eletrônica";
    $curso3 = "Eletrotécnica";
    $curso4 = "Informática";
    $curso5 = "Informática para Internet";
    $curso6 = "Logística";
    $curso7 = "Segurança do trabalho";

    function inserir_cont_votos($conexao, $curso1, $curso2, $curso3, $curso4, $curso5, $curso6, $curso7){
        $query = "INSERT INTO lista_votos_curso (cadastro_voto_curso_cod_votacao, cadastro_voto_curso_voto, quant_votos) VALUES ('1','{$curso1}','0'), ('2','{$curso2}','0'), ('3','{$curso3}','0'), ('4','{$curso4}','0'), ('5','{$curso5}','0'), ('6','{$curso6}','0'), ('7','{$curso7}','0');";

        return mysqli_query($conexao, $query);
    }
    
    inserir_cont_votos($conexao, $curso1, $curso2, $curso3, $curso4, $curso5, $curso6, $curso7);
?>