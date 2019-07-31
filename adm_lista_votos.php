<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include ("head.php")?>
    <link rel="stylesheet" href="_css/asidemenu">

    <title>Area Administrativa - Listagem de Votos</title>
</head>
<body class="fluid-container">
    
<div class="wrapper">
        <?php include ("adm_menu.php");?>

        <!-- Page Content  -->
        <div id="content" class="mt-4">

            <h2 class="mb-5">Listagem de Votos</h2>
            
            <div class="container">
                
                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">
                                    Nº
                                </th>

                                <th scope="col">
                                    Voto
                                </th>

                                <th scope="col">
                                    Motivo
                                </th>
                                
                                <th scope="col">
                                    Data
                                </th>

                                <th scope="col">
                                    Protocolo
                                </th>
                            </tr>
                        </thead>

                        <?php
                    /* Puxar com foreach da tabela do banco */
                        include ("conexao.php");
                        include ("banco_votos.php");

                        $votos = listaVotos($conexao);
                        foreach($votos as $voto): ?>
                        <tr>
                            <td class="text-center"><?=$voto['cod_votacao']?></td>
                            <td class="text-center"><b><?=$voto['voto']?></b></td>
                            <td class="text-center"><?=$voto['motivo']?></td>
                            <td class="text-center"><?=$voto['momento']?></td>
                            <td class="text-center"><?=$voto['protocolo']?></td>
                        </tr>    
                        <?php
                                endforeach
                        ?>
                    </table>

            </div>

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