<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
        include ("head.php");
        include ("conexao.php");
        include ("data_grupo.php");
    ?>
    <title>Painel Administrativo</title>
</head>
<body>
    <div class="fluid-container">
        <?php 
            include ("menu_superior.php");
            include ("adm_sidebar.php");
        ?>
        
        <div class="main-panel bg-grupos">
            
            <div class="container mt-2 text-white">
                    <h1 class="mt-3">
                        Grupos Cadastrados
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
                                   
                                    $grupos = exibeGrupo($conexao2);
                                    foreach ($grupos as $grupo): 
                                    
                                    ?>
                                <tr>
                                    <td><?=$grupo['cod_grupo']?></td>
                                    <td><?=$grupo['grupo']?></td>
                                    <td><?=$grupo['feira']?></td>
                                    <td><?=$grupo['turma']?></td>
                                    <td class="text-center"><?=$grupo['quant_votos']?></td>
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