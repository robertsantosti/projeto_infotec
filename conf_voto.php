<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include ("head.php")?>
    <title>Confirmação de votação</title>
</head>
<body>
    <?php

        include ("conexao.php");
        include ("banco_votos.php");

        $voto = $_POST['voto'];
        $opcao = $_POST['op'];
        date_default_timezone_set('America/Sao_Paulo');
        $data = date('d-m-Y H:i:s');
        $prot=rand(1,30000);
        $protocolo=$prot;

        calculaVoto($conexao, $voto) && armazenaVoto($conexao, $voto, $opcao, $protocolo);

        
    ?>

    <div class="modal fade" id="confirmaModal" tabindex="-1" role="dialog" aria-labelledby="confirmaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmaModalLabel">Confirmação de voto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-success">Voto em <b><?=$voto?></b> computado com sucesso em <b><?=$data?></b>. Protocolo Nº: <b><?=$protocolo?></b>.</p>
            </div>
            <div class="modal-footer">
                <a href="votacao_curso.php"><button type="button" class="btn btn-danger" data-dismiss="modal">Retornar</button></a>
                <button type="button" class="btn btn-success">Participar da Enquete</button>
            </div>
            </div>
        </div>
        </div>

    <script>

        abrirModal();

        function abrirModal(){
            $(document).ready(function() {
                $('#confirmaModal').modal('show');
            })
        }

    </script>
</body>
</html>