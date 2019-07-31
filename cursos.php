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
                        Cursos Cadastrados
                    </h1>
                
                <div class="container">
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th class="text-white">#</th>
                                <th class="text-white">Curso</th>
                                <th class="text-white">Tipo</th>
                                <th class="text-white">Duração</th>
                                <th class="text-white text-center">Ação</th>
                            </thead>
                            <tbody>
                                <?php
                                   
                                    $cursos = exibeCursos($conexao2);
                                    foreach ($cursos as $curso): 
                                    
                                    ?>
                                <tr>
                                    <td><?=$curso['cod_cursos']?></td>
                                    <td><?=$curso['nome_curso']?></td>
                                    <td><?=$curso['modalidade']?></td>
                                    <td><?=$curso['duracao']?> meses</td>
                                    <td class="text-center">
                                    
                           
                                        <!--BOTÃO 1-->
                                        <a href="altera_curso.php">
                                            <button class="btn btn-primary col-3"><i class="fa fa-cog text-white"></i></button>
                                        </a>

                                        <!--BOTÃO 2-->
                                        <a href="remove_curso.php?id=<?=$curso['cod_cursos']?>">
                                            <button type="submit" class="btn btn-danger col-3">
                                                    <i class="fa fa-close"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                                    <?php 
                                endforeach;?>
                            </tbody>
                        </table>
                        
                        <a href="cadastra_curso.php">
                            <button class="btn btn-primary" style="margin-left: 85%;">
                                Cadastrar Cursos
                            </button>
                        </a>
    
                    </div>
                </div>
        </div>

    </div>
</body>
</html>