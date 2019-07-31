<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include ("head.php")?>
    <link rel="stylesheet" href="_css/asidemenu">
    <title>Area Administrativa</title>
</head>
<body class="fluid-container">
    
<div class="wrapper">
        <?php include ("adm_menu.php")?>

        <!-- Page Content  -->
        <div id="content" class="mt-4">

            <h2 class="mb-5">Grupos participantes da VII INFOTEC</h2>
            
            <table class="table table-bordered">
                <thead class="text-center">
                    <tr>
                        <th scope="col">
                            Inscrição
                        </th>

                        <th scope="col">
                            Tema
                        </th>

                        <th scope="col">
                            Descrição
                        </th>
                                
                        <th scope="col">
                            Turma
                        </th>
                </thead>
            <?php
                include ("conexao.php");
                include ("banco_grupo.php");

                $grupos = exibeGrupo($conexao);
                foreach ($grupos as $grupo): 
            ?>
            <tr>
                <td class="text-center"><?=$grupo['cod_inscricao']?></td>
                <td class="text-center"><?=$grupo['tema_grupo']?></td>
                <td class="text-center"><?=$grupo['descricao']?></td>
                <td class="text-center"><?=$grupo['turma']?></td>
            </tr>
            <?php
                endforeach;
            ?>
            </table>
        </div>
    </div>

<script>

    menuLateral();

    function menuLateral(){

        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });


    }
</script>
</body>
</html>