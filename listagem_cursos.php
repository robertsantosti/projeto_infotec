<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
        include ("head.php");
        include ("conexao.php");
        include ("data_curso.php");
    ?>
    <title>Painel Administrativo</title>
</head>
<body>
    <div class="fluid-container">
        <?php 
            include ("menu_superior.php");
            include ("adm_sidebar.php");
        ?>
        
        <div class="main-panel bg-intro">
            
            <div class="container mt-2 text-white">
                    <h1 class="mt-3">
                        Quantidade de votos <small>(por curso)</small>
                    </h1>
                
                <div class="container">
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped" style="background: rgba(0,0,0,0.2);">
                            <thead>
                                <th class="text-white text-center">#</th>
                                <th class="text-white">Curso</th>
                                <th class="text-white text-center">Votos</th>
                            </thead>
                            <tbody>
                                <?php
                                   
                                    $cursos = exibeCursos($conexao2);
                                    foreach ($cursos as $curso): 
                                    
                                    ?>
                                <tr>
                                    <td class="text-center"><?=$curso['cod_cursos']?></td>
                                    <td><?=$curso['nome_curso']?></td>
                                    <td class="text-center"><?=$curso['votos']?></td>
                                </tr>
                                    <?php 
                                endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>

    </div>
</body>
</html>