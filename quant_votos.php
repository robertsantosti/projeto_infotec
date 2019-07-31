<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php include ("head.php"); ?>

    <title>Votos</title>

</head>
<body>
    <div class="fluid-container">

        <div class="container">
            
            <?php include ("header_adm.php"); ?>
            
            <table class="table table-bordered">

                <thead class="thead-dark text-center">
                    <tr>
                        <th scope="col">
                            Nº
                        </th>

                        <th scope="col">
                            Voto
                        </th>

                        <th scope="col">
                            Quantidade de Votos
                        </th>

                    <tr>
                </thead>

                <?php
                    /* Puxar com foreach da tabela do banco */
                        include ("conexao.php");
                        include ("banco_votos.php");

                        $votos = quantVotos($conexao);
                        foreach($votos as $voto): ?>
                        <tr>
                            <td class="text-center"><?=$voto['cod_curso']?></td>
                            <td class="text-center"><b><?=$voto['voto']?></b></td>
                            <td class="text-center"><?=$voto['quant_votos']?></td>
                        </tr>    
                <?php
                        endforeach
                ?>

            </table>

        </div>

    </div>
</body>
</html>