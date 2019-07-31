<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ("head.php");?>
    <title>Cadastro de Grupo</title>

</head>
<body>
    <div class="fluid-container bg_cad_grupo">
        <div class="container">
            <form action="cadastragrupo.php" method="post">
                <input type="radio" name="tipo" id="tipo" checked="checked" value="Lider" style="display:none"><legend class="text-white">Cadastro de Grupos</legend>
                <table class="table">
                    <tr>
                        <td><label for="grupo" class="text-label">Nome do Grupo</label></td>
                        <td colspan="3">
                            <input type="text" name="grupo" id="grupo" class="form-control ipt" placeholder="Nome do grupo" required/>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="insc" class="text-label">Numero de Inscrição</label></td>
                        <td>
                            <input type="number" name="insc" id="insc" class="form-control ipt" min="1" placeholder="Numero de inscrição na feira" required/>
                        </td>
                        <td><label for="feira" class="text-label">Feira</label></td>
                        <td>
                            <select name="feira" id="feira" class="form-control">
                                <option value="INFOTEC">INFOTEC</option>
                                <option value="FESEG">FESEG</option>
                                <option value="SILOG">SILOG</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="usuario" class="text-label">Login</label></td>
                        <td><input type="text" name="usuario" id="usuario" class="form-control  ipt" placeholder="Digite o nome de usuario desejado" required></td>
                        <td><label for="senha" class="text-label">Senha</label></td>
                        <td><input type="password" name="senha" id="senha" class="form-control  ipt" min="8" placeholder="Senha: minimo 8 digitos" required></td>
                    </tr>

                    <tr>
                        <td><label for="lider" class="text-label">Lider</label></td>
                        <td>
                            <input type="text" name="lider" id="lider" class="form-control ipt" placeholder="Nome Completo" required/>
                        </td>

                        <td><label for="integrante2" class="text-label">Integrante 2</label></td>
                        <td>
                            <input type="text" name="integrante2" id="integrante2" class="form-control ipt" placeholder="Nome Completo" required/>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="integrante3" class="text-label">Integrante 3</label></td>
                        <td>
                            <input type="text" name="integrante3" id="integrante3" class="form-control ipt" placeholder="Nome Completo" required/>
                        </td>

                        <td><label for="integrante4" class="text-label">Integrante 4</label></td>
                        <td>
                            <input type="text" name="integrante4" id="integrante4" class="form-control ipt" placeholder="Nome Completo" required/>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="integrante5" class="text-label">Integrante 5</label></td>
                        <td>
                            <input type="text" name="integrante5" id="integrante5" class="form-control ipt" placeholder="Nome Completo"/>
                        </td>

                        <td><label for="integrante6" class="text-label">Integrante 6</label></td>
                        <td>
                            <input type="text" name="integrante6" id="integrante6" class="form-control ipt" placeholder="Nome Completo"/>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="desc" class="text-label">Descrição</label></td>
                        <td colspan="3">
                            <textarea name="desc" id="desc" cols="30" rows="5" class="form-control" placeholder="Breve descrição"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="turma" class="text-label">Turma</label></td>
                        <td>
                            <input type="text" name="turma" id="turma" class="form-control ipt" placeholder="Ex.: 3IW1T2">
                        </td>
                        <td colspan="2">
                            <input type="submit" class="btn btn-primary form-control btn-sub" value="Cadastrar">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>