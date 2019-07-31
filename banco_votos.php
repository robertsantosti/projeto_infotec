<?php

    function listaVotos($conexao){
        $votos = array();
        $resultado=mysqli_query($conexao, "SELECT * FROM lista_voto");
        while($voto = mysqli_fetch_assoc($resultado)){      
            array_push($votos, $voto);
         }
         return $votos;
    }

    function quantVotosGrupo($conexao){
        $votos = array();
        $resultado=mysqli_query($conexao, "SELECT * FROM lista_votos_enquete");
        while($voto = mysqli_fetch_assoc($resultado)){      
           array_push($votos, $voto);
        }
        return $votos;
    }

    function quantVotos($conexao){
        $votos = array();
        $resultado=mysqli_query($conexao, "SELECT * FROM lista_votos_curso");
        while($voto = mysqli_fetch_assoc($resultado)){      
           array_push($votos, $voto);
        }
        return $votos;
    }

    function armazenaVoto($conexao, $voto, $opcao, $protocolo){
        
        if ($voto=="Eletromecânica"){
            $query = "INSERT INTO cadastro_voto_curso (voto, motivo, momento, protocolo) VALUES ('{$voto}', '{$opcao}', NOW(), '{$protocolo}');";
            return mysqli_query($conexao, $query);
        }
        if ($voto=="Eletrônica"){
            $query = "INSERT INTO cadastro_voto_curso (voto, motivo, momento, protocolo) VALUES ('{$voto}', '{$opcao}', NOW(), '{$protocolo}');";
            return mysqli_query($conexao, $query);
        }
        if ($voto=="Eletrotécnica"){
            $query = "INSERT INTO cadastro_voto_curso (voto, motivo, momento, protocolo) VALUES ('{$voto}', '{$opcao}', NOW(), '{$protocolo}');";
            return mysqli_query($conexao, $query);
        }
        if ($voto=="Informática"){
            $query = "INSERT INTO cadastro_voto_curso (voto, motivo, momento, protocolo) VALUES ('{$voto}', '{$opcao}', NOW(), '{$protocolo}');";
            return mysqli_query($conexao, $query);
        }
        if ($voto=="Informática para Internet"){
            $query = "INSERT INTO cadastro_voto_curso (voto, motivo, momento, protocolo) VALUES ('{$voto}', '{$opcao}', NOW(), '{$protocolo}');";
            return mysqli_query($conexao, $query);
        }
        if ($voto=="Logística"){
            $query = "INSERT INTO cadastro_voto_curso (voto, motivo, momento, protocolo) VALUES ('{$voto}', '{$opcao}', NOW(), '{$protocolo}');";
            return mysqli_query($conexao, $query);
        }
        if ($voto=="Segurança do Trabalho"){
            $query = "INSERT INTO cadastro_voto_curso (voto, motivo, momento, protocolo) VALUES ('{$voto}', '{$opcao}', NOW(), '{$protocolo}');";
            return mysqli_query($conexao, $query);
        }
    }

    function calculaVoto($conexao, $voto){
        if ($voto=="Eletromecânica"){
            $query = "UPDATE lista_votos_curso SET quant_votos=quant_votos+1 WHERE cadastro_voto_curso_cod_votacao='1';";
            return mysqli_query($conexao, $query);
        }
        if ($voto=="Eletrônica"){
            $query = "UPDATE lista_votos_curso SET quant_votos=quant_votos+1 WHERE cadastro_voto_curso_cod_votacao='2';";
            return mysqli_query($conexao, $query);
        }
        if ($voto=="Eletrotécnica"){
            $query = "UPDATE lista_votos_curso SET quant_votos=quant_votos+1 WHERE cadastro_voto_curso_cod_votacao='3';";
            return mysqli_query($conexao, $query);
        }
        if ($voto=="Informática"){
            $query = "UPDATE lista_votos_curso SET quant_votos=quant_votos+1 WHERE cadastro_voto_curso_cod_votacao='4';";
            return mysqli_query($conexao, $query);
        }
        if ($voto=="Informática para Internet"){
            $query = "UPDATE lista_votos_curso SET quant_votos=quant_votos+1 WHERE cadastro_voto_curso_cod_votacao='5';";
            return mysqli_query($conexao, $query);
        }
        if ($voto=="Logística"){
            $query = "UPDATE lista_votos_curso SET quant_votos=quant_votos+1 WHERE cadastro_voto_curso_cod_votacao='6';";
            return mysqli_query($conexao, $query);
        }
        if ($voto=="Segurança do Trabalho"){
            $query = "UPDATE lista_votos_curso SET quant_votos=quant_votos+1 WHERE cadastro_voto_curso_cod_votacao='7';";
            return mysqli_query($conexao, $query);
        }
    }

    function contagemVotosGrupo($conexao){
        $votos = array();
        $resultado=mysqli_query($conexao, "SELECT * FROM cont_votos_grupos");
        while($voto = mysqli_fetch_assoc($resultado)){      
           array_push($votos, $voto);
        }
        return $votos;
    }
?>