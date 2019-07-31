<?php
    include ("conexao.php");
    date_default_timezone_set('America/Sao_Paulo');

    function insereGrupo($conexao2, $insc, $grupo, $turma, $feira, $lider, $integrante2, $integrante3, $integrante4, $integrante5, $integrante6, $descricao){
        $query = "INSERT INTO grupo (
            cod_grupo,
            grupo,
            turma,
            feira,
            lider,
            integrante2,
            integrante3,
            integrante4,
            integrante5,
            integrante6,
            integrante7,
            integrante8,
            integrante9,
            descricao,
            quant_votos,
            data_insc) 
            VALUES
            ('{$insc}',
            '{$grupo}',
            '{$turma}',
            '{$feira}',
            '{$lider}',
            '{$integrante2}',
            '{$integrante3}',
            '{$integrante4}',
            '{$integrante5}',
            '{$integrante6}',
            '',
            '',
            '',
            '{$descricao}',
            '0',
            NOW()
        );";
        return mysqli_query($conexao2, $query);
    }

    function cadastraInfotec($conexao2, $insc, $grupo, $turma, $descricao){
        $query = "INSERT INTO infotec (
            grupo_cod_grupo,
            grupo_grupo,
            turma,
            grupo_descricao,
            data_alter
        ) VALUES (
            '{$insc}',
            '{$grupo}',
            '{$turma}',
            '{$descricao}',
            NOW()
        );";
        return mysqli_query($conexao2, $query);
    }

    function cadastraFeseg($conexao2, $insc, $grupo, $turma, $descricao){
        $query = "INSERT INTO feseg (
            grupo_cod_grupo,
            grupo_grupo,
            turma,
            grupo_descricao,
            data_alter
        ) VALUES (
            '{$insc}',
            '{$grupo}',
            '{$turma}',
            '{$descricao}',
            NOW()
        );";
        return mysqli_query($conexao2, $query);
    }

    function cadastraSilog($conexao2, $insc, $grupo, $turma, $descricao){
        $query = "INSERT INTO silog (
            grupo_cod_grupo,
            grupo_grupo,
            turma,
            grupo_descricao,
            data_alter
        ) VALUES (
            '{$insc}',
            '{$grupo}',
            '{$turma}',
            '{$descricao}',
            NOW()
        );";
        return mysqli_query($conexao2, $query);
    }

    function cadastraUsuario($conexao2, $usuario, $senha, $lider, $modalidade){
        $query = "INSERT INTO usuario ( 
            usuario,
            senha,
            nome,
            tipo
        ) VALUES (
            '{$usuario}',
            md5('{$senha}'),
            '{$lider}',
            '{$modalidade}'
        );";

        return mysqli_query($conexao2, $query);
    }

    function exibeGrupo($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo ORDER BY cod_grupo");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibeGrupoByVotos($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo ORDER BY quant_votos DESC");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibeGrupoByVotos1($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE feira='INFOTEC' and grupo!='QUONTEC - Votação/Enquete Dinâmica Integrada' ORDER BY quant_votos DESC;");
        for($i=0; $i<3; $i++){
            $grupo = mysqli_fetch_assoc($resultado);   
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibeGrupoByVotos2($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE feira='SILOG' ORDER BY quant_votos DESC;");
        for($i=0; $i<3; $i++){
            $grupo = mysqli_fetch_assoc($resultado);   
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibeGrupoByVotos3($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE feira='FESEG' ORDER BY quant_votos DESC;");
        for($i=0; $i<3; $i++){
            $grupo = mysqli_fetch_assoc($resultado);   
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibeGrupoByVotos4($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE grupo!='QUONTEC - Votação/Enquete Dinâmica Integrada' ORDER BY quant_votos DESC;");
        for($i=0; $i<3; $i++){
            $grupo = mysqli_fetch_assoc($resultado);   
            array_push($grupos, $grupo);
        }
        return $grupos;
    }


    //VOTAÇÃO

    //SILOG

    function exibe1Silog($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=1 AND feira='SILOG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe3Silog($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=3 AND feira='SILOG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe4Silog($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=4 AND feira='SILOG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe2Silog($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=2 AND feira='SILOG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe10Silog($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=10 AND feira='SILOG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe11Silog($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=11 AND feira='SILOG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe12Silog($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=12 AND feira='SILOG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe13Silog($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=13 AND feira='SILOG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe14Silog($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=14 AND feira='SILOG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe20Silog($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=20 AND feira='SILOG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe24Silog($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=24 AND feira='SILOG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe21Silog($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=21 AND feira='SILOG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe22Silog($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=22 AND feira='SILOG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }


    //INFOTEC

    function exibe42Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=42 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe3Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=3 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe28Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=28 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe8Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=8 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe9Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=9 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe35Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=35 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe44Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=44 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe16Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=16 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe15Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=15 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe30Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=30 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe34Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=34 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe36Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=36 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe23Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=23 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe33Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=33 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe25Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=25 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe20Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=20 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe4Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=4 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe6Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=6 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe31Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=31 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe5Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=5 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe1Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=1 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe2Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=2 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe32Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=32 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe29Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=29 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe43Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=43 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe21Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=21 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe40Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=40 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe41Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=41 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe27Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=27 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe26Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=26 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe22Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=22 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe13Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=13 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe24Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=24 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe14Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=14 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe7Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=7 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe10Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=10 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe11Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=11 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }
    
    function exibe12Infotec($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=12 AND feira='INFOTEC';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }



    //FESEG
    function exibe2Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=2 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe22Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=22 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe42Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=42 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe26Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=26 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe28Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=28 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe41Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=41 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe47Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=47 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe30Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=30 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe25Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=25 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe48Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=48 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe46Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=46 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe49Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=49 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe5Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=5 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe27Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=27 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe21Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=21 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe8Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=8 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe1Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=1 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe6Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=6 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe3Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=3 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe20Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=20 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe29Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=29 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe44Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=44 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe4Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=4 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe45Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=45 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }

    function exibe24Feseg($conexao2){
        $grupos = array();
        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=24 AND feira='FESEG';");
        while($grupo = mysqli_fetch_assoc($resultado)){      
            array_push($grupos, $grupo);
        }
        return $grupos;
    }