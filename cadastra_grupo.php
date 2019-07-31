<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include ("head.php")?>
    <title>Cadastro de Grupos</title>
</head>
<body class="fluid-container">

    <section class="bg_cad_grupo">

    <div class="modal fade" id="cadastraGrupoModal" tabindex="-1" role="dialog" aria-labelledby="cadastraGrupoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cadastraGrupoModalLabel">Cadastro de Grupos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="cadastro_grupo.php" method="POST">
                    <input type="text" name="grupo" id="grupo" class="form-control mb-2" placeholder="Nome do Grupo" required>
                    <input type="text" name="desc" id="desc" class="form-control mb-2" placeholder="Descricao do Grupo">
                    <input type="number" name="insc" id="insc" class="form-control mb-2" placeholder="Numero de Inscrição" required>
                    <select name="feira" id="feira" class="form-control mb-2">
                        <option value="INFOTEC">INFOTEC</option>
                        <option value="FESEC">FESEC</option>
                        <option value="SILOG">SILOG</option>
                    </select>
                    <input type="text" name="lider" id="lider" class="form-control mb-2" placeholder="Lider do Grupo" required>
                    <input type="text" name="i2" id="i2" class="form-control mb-2" placeholder="Integrante 2" required>
                    <input type="text" name="i3" id="i3" class="form-control mb-2" placeholder="Integrante 3" required>
                    <input type="text" name="i4" id="i4" class="form-control mb-2" placeholder="Integrante 4" required>
                    <input type="text" name="i5" id="i5" class="form-control mb-2" placeholder="Integrante 5" value="">
                    <input type="text" name="i6" id="i6" class="form-control mb-2" placeholder="Integrante 6" value="">
                    <input type="text" name="turma" id="turma" class="form-control" placeholder="Exemplo: 3IW1T2" required>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                <input type="submit" class="btn btn-success" value="Cadastrar">
                </form>
            </div>
            </div>
        </div>
    </div>
        

    </section>

    <script>

        abrirModal();

        function abrirModal(){
            $(document).ready(function() {
                $('#cadastraGrupoModal').modal('show');
            })
        }

</script>
</body>
</html>