<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        include ("conexao.php");
        include ("head.php");
        include ("data_curso.php");
    ?>
    <title>Ranking dos Grupos</title>
    <style>
    .bg_votos_cursos{
        position: relative;
        width: 100%;
        height: auto;
        padding: 5.5rem 0;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4) 0%, rgba(0,0,0,.1) 50%, rgba(0, 0, 0, 0.4) 75%, rgba(0,0,0,.5) 100%), url(_img/bg_curso.png) no-repeat !important;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: scroll;
        background-size: cover;
    }
    </style>
    
</head>
<body>
    <div class="bg_votos_cursos fluid-container">
        <div class="container mt-2 text-white">
            <h1 class="mt-3">
                Ranking Votação dos Cursos
            </h1>
                    
            <div class="container">
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover table-striped">
                        <thead>
                            <th class="text-white">Curso</th>
                            <th class="text-white text-center">Votos</th>
                        </thead>
                        <tbody>
            <?php                
                $cursos = exibeCursosByVotos($conexao2);
                foreach ($cursos as $curso):     
            ?>
                        <tr>
                            <td><?=$curso['nome_curso']?></td>
                            <td class="text-center"><?=$curso['votos']?></td>
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