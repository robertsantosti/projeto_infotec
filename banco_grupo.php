<?php
    
    function cursos($conexao){
        $cursos = array();
        $resultado=mysqli_query($conexao, "SELECT * FROM cursos");
        while($curso = mysqli_fetch_assoc($resultado)){      
            array_push($integrantes, $integrante);
        }
        return $cursos;
        
    }

    function insereVotacao($conexao, $grupo, $insc, $feira){
        $query = "INSERT INTO lista_votos_enquete (
            cadastro_enquete_grupos_cod_enquete,
            cadastro_enquete_grupos_voto_enquete,
            quant_votos_enquete,
            feira)
            VALUES 
            ('{$insc}', 
            '{$grupo}',
            '0',
            '{$feira}');";
        return mysqli_query($conexao, $query);
    }

    function insereGrupo($conexao, $grupo, $desc, $insc, $turma, $feira){
        if($feira=="INFOTEC"){
            $query = "INSERT INTO cadastro_grupo_infotec (
                cod_inscricao,
                tema_grupo,
                descricao,
                turma,
                feira)
                VALUES 
                ('{$insc}', 
                '{$grupo}', 
                '{$desc}', 
                '{$turma}',
                '{$feira}');";
            return mysqli_query($conexao, $query);
        }else if($feira=="FESEC"){
            $query = "INSERT INTO cadastro_grupo_fesec (
                cod_inscricao,
                tema_grupo,
                descricao,
                turma,
                feira)
                VALUES 
                ('{$insc}', 
                '{$grupo}', 
                '{$desc}', 
                '{$turma}',
                '{$feira}');";
            return mysqli_query($conexao, $query);
        }else if($feira=="SILOG"){
            $query = "INSERT INTO cadastro_grupo_silog (
                cod_inscricao,
                tema_grupo,
                descricao,
                turma,
                feira)
                VALUES 
                ('{$insc}', 
                '{$grupo}', 
                '{$desc}', 
                '{$turma}',
                '{$feira}');";
            return mysqli_query($conexao, $query);
        }
    }

    function insereIntegrante($conexao, $grupo, $insc, $turma, $lider, $i2, $i3, $i4, $i5, $i6, $feira){
        if($feira=="INFOTEC"){
            $query = "INSERT INTO info_grupo_infotec (
            cadastro_grupo_infotec_cod_inscricao,
            cadastro_grupo_infotec_tema_grupo,
            turma,
            lider,
            integrante_2,
            integrante_3,
            integrante_4,
            integrante_5,
            integrante_6,
            feira) VALUES ('{$insc}','{$grupo}','{$turma}','{$lider}','{$i2}','{$i3}','{$i4}','{$i5}','{$i6}', '{$feira}');";
            return mysqli_query($conexao, $query);
        }else if($feira=="FESEC"){
            $query = "INSERT INTO info_grupo_fesec (
            cadastro_grupo_fesec_cod_inscricao,
            cadastro_grupo_fesec_tema_grupo,
            turma,
            lider,
            integrante_2,
            integrante_3,
            integrante_4,
            integrante_5,
            integrante_6,
            feira) VALUES ('{$insc}','{$grupo}','{$turma}','{$lider}','{$i2}','{$i3}','{$i4}','{$i5}','{$i6}', '{$feira}');";
            return mysqli_query($conexao, $query);
        }else if($feira=="SILOG"){
            $query = "INSERT INTO info_grupo_silog (
            cadastro_grupo_silog_cod_inscricao,
            cadastro_grupo_silog_tema_grupo,
            turma,
            lider,
            integrante_2,
            integrante_3,
            integrante_4,
            integrante_5,
            integrante_6,
            feira) VALUES ('{$insc}','{$grupo}','{$turma}','{$lider}','{$i2}','{$i3}','{$i4}','{$i5}','{$i6}', '{$feira}');";
            return mysqli_query($conexao, $query);
        }
    }

    function exibeGrupo($conexao){
        $grupos = array();
        $resultado=mysqli_query($conexao, "SELECT * FROM grupos");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
         }
         return $grupos;
    }

    function listaIntegrantes($conexao){
        $integrantes = array();
        $resultado=mysqli_query($conexao, "SELECT * FROM info_grupos");
        while($integrante = mysqli_fetch_assoc($resultado)){      
            array_push($integrantes, $integrante);
        }
        return $integrantes;

    }

    function atualizaTema($conexao, $novo_tema, $insc){
        $query = "UPDATE info_grupos SET grupo_tema_grupo='{$novo_tema}' where grupos_cod_inscricao='{$insc}'";
        return mysqli_query($conexao, $query);
    }
    
    function atualizaIntegrante($conexao, $novo_integrante, $tipo_integrante, $insc){
        $query = "UPDATE info_grupos SET '{$tipo_integrante}'='{$novo_tema}' where grupos_cod_inscricao='{$insc}'";
        return mysqli_query($conexao, $query);
    }

    function atualizaDescricao($conexao, $nova_descricao, $insc){
        $query = "UPDATE info_grupos SET descricao
        
        +='{$nova_descricao}' where grupos_cod_inscricao='{$insc}'";
        return mysqli_query($conexao, $query);
    }

    function insereContGrupo($conexao, $grupo, $feira){
        $query = "INSERT INTO cont_votos_grupos (grupo, feira, quant_votos) VALUE ('{$grupo}','{$feira}', '0');";
        return mysqli_query($conexao, $query);
    }
?>