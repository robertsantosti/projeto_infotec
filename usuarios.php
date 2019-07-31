<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
        include ("head.php");
        include ("conexao.php");
        include ("data_usuario.php");
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
                        Usuarios Cadastrados
                    </h1>
                
                <div class="container">
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th class="text-white">#</th>
                                <th class="text-white">Nome</th>
                                <th class="text-white">Previlegio</th>
                                <th class="text-white text-center">Ação</th>
                            </thead>
                            <tbody>
                                <?php
                                   
                                    $usuarios = exibeUsuario($conexao2);
                                    $cont = count($usuarios);
                                    $row = 1;
                                    foreach ($usuarios as $usuario): 
                                    
                                    ?>
                                <tr>
                                    <td><?=$usuario['cod_usuario']?></td>
                                    <td><?=$usuario['nome']?></td>
                                    <td><?=$usuario['tipo']?></td>
                                    <td class="text-center">
                                    
                           
                                        <!--BOTÃO 1-->
                                        <a href="altera_curso.php">
                                            <button class="btn btn-primary col-3"><i class="fa fa-cog text-white"></i></button>
                                        </a>

                                        <!--BOTÃO 2-->
                                        <button type="submit" class="btn btn-danger col-3">
                                                <i class="fa fa-close"></i>
                                        </button>
                                        
                                    </td>
                                </tr>
                                    <?php endforeach;?>
                            </tbody>
                        </table>

                        <a href="cadastra_usuario.php">
                            <button class="btn btn-primary" style="margin-left: 85%;">
                                Cadastrar Usuário
                            </button>
                        </a>
                    </div>
                </div>
        </div>

    </div>
</body>
</html>