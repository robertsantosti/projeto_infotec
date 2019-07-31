<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        include ("conexao.php");
        include ("head.php");
        include ("data_grupo.php");
    ?>
    <title>Ranking dos Grupos</title>
    <style>
    .bg_votos_feira{
        position: relative;
        width: 100%;
        height: auto;
        padding: 5.5rem 0;
        background:#000 !important;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-size: cover;
    }
    </style>
    
</head>
<body>
    <div class="bg_votos_feira fluid-container">
        <div class="container mt-2 text-white">
            <h1 class="mt-3">
                Ranking Votação das Feiras
            </h1>
                    
            <div class="container">
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th class="text-white">#</th>
                            <th class="text-white">Grupo</th>
                            <th class="text-white">Feira</th>
                            <th class="text-white">Turma</th>
                            <th class="text-white text-center">Votos</th>
                        </thead>
                        <tbody>
            <?php                
                $grupos = exibeGrupoByVotos($conexao2);
                foreach ($grupos as $grupo):     
            ?>
                        <tr>
                            <td><?=$grupo['cod_grupo']?></td>
                            <td><?=$grupo['grupo']?></td>
                            <td><?=$grupo['feira']?></td>
                            <td><?=$grupo['turma']?></td>
                            <td class="text-center"><?=$grupo['quant_votos']?></td>
                        </tr>
            <?php endforeach;?>
                        </tbody>
                    </table>
                    
                    <div class="row" style="margin-left:15%;">
                            <a href="index.php"><button class="btn btn-lg btn-light mr-3">Retornar ao Início</button></a> 
                            <a href="votacao_cursos.php"><button class="btn btn-lg btn-light mr-3">Votação Cursos</button></a>  
                            <a href="votacao_feira.php"><button class="btn btn-lg btn-light mr-3">Votação Feira</button></a>  
                            <a href="cadastrofeira.php"><button class="btn btn-lg btn-light mr-3">Cadastrar Grupo</button></a>
                    </div>
                      
                </div>
            </div>
        </div>
    </div>
            
</body>
</html>