<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include ("head.php");?>
    <link rel="stylesheet" href="_css/menu_adm.css">
    <title>Painel Administrativo</title>
    
</head>
<body class="fluid-container">

    <div class="wrapper">
        <?php include ("adm_main.php");?>
            <div class="container">
            <div id="content" class="mt-4">

<h2 class="mb-5">Contagem de Votos Enquete</h2>

<div class="container">
    
    <table class="table table-bordered">
        <thead class="text-center bg-dark text-white">
            <tr>
                <th scope="col">
                    Feira
                </th>

                <th scope="col">
                    Grupo
                </th>

                <th scope="col">
                    Qnt. de Votos
                </th>
        </thead>

        <?php
        /* Puxar com foreach da tabela do banco */
            include ("conexao.php");
            include ("banco_votos.php");

            $votos = contagemVotosGrupo($conexao);
            foreach($votos as $voto): ?>
            <tr>
                <td class="text-center"><?=$voto['feira']?></td>
                <td class="text-center"><b><?=$voto['grupo']?></b></td>
                <td class="text-center"><?=$voto['quant_votos']?></td>
            </tr>    
        <?php
                endforeach
        ?>
    </table>
    </div>
    
    </div>
</div>
            
            </div>
    </div>

</body>
</html>