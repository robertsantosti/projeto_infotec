<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include ("head.php"); ?>
    <title>Votação</title>
</head>
<body class="fluid-container">

    <section class="bg_vote">

        <div class="container">
            
            <h1>O seu voto e muito importante</h1>
            <h2 class="h5 mb-3">Selecione a baixo o curso que você mais se identifica</h2>

            <form action="confirma_votacao.php" method="post">
                <input type="radio" name="voto" id="voto" value="Eletrônica" style="display: none;" checked="checked">
                <button type="submit" class="btn btn-dark btn-voto mb-1 col-6 text-white">Eletrônica</button>
            </form>
                

        </div>

    </section>

</body>
</html>