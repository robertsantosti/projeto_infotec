<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
        include ("head.php");
        include ("conexao.php");
        include ("data_curso.php");
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
            
            <div class="container text-white">
                
                <h1 class="mt-3">
                    Cadastrar Cursos
                </h1>

                <form action="cadastro_curso.php" method="post">
                    <table class="table">
                        <tr>
                            <td>
                                <label for="curso">Curso</label>
                            </td>

                            <td>
                                <input type="text" name="curso" id="curso" class="form-control" placeholder="Nome do Curso" required/>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="modalidade">Tipo</label>
                            </td>

                            <td>
                                <select name="modalidade" id="modalidade" class="form-control">
                                    <option value="Técnico">Técnico</option>
                                    <option value="Técnologo">Técnologo</option>
                                    <option value="Graduação">Graduação</option>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="duracao">Duração</label>
                            </td>

                            <td>
                                <input type="number" name="duracao" id="duracao" class="form-control" Placeholder="Duração do curso (em meses)" required/>
                            </td>
                        </tr>
                            
                        <tr>
                            <td colspan="2">
                                <input type="submit" class="btn btn-primary btn-block" value="Cadastrar Grupo" required/>
                            </td>
                        </tr>

                    </table>
                </form>
            </div>
        
        </div>

    </div>
</body>
</html>