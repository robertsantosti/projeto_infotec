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
                <h2 class="mb-4">Bem vindo</h2>
                
                <div class="row container text-center">
                    <section class="container col-4">
                        <h2 class="h4 mb-5">Usuarios Cadastrados</h2>
                        <p class="text-center contadores"><b>
                        <?php
                            include ("conexao.php");

                            $query = ("SELECT COUNT(cod_cadastro) FROM cadastro_usuario;");
                            $rs = mysqli_query($conexao,$query);

                            $result = mysqli_fetch_array($rs);
                            echo $result[0];

                        ?>
                        </b></p>
                    </section>
                    <section class="container col-4">
                        <h2 class="h4 mb-5">Cursos Cadastrados</h2>
                        <p class="text-center contadores" style="background: rgba(46, 7, 151, 1);"><b>
                        
                        <?php
                            include ("conexao.php");
                            
                            $query = ("SELECT COUNT(cadastro_voto_curso_cod_votacao) FROM lista_votos_curso;");
                            $rs = mysqli_query($conexao,$query);

                            $result = mysqli_fetch_array($rs);
                            echo $result[0];

                        ?>

                        </b></p>
                    </section>
                    <section class="container col-4">
                        <h2 class="h4 mb-5">Grupos Cadastrados</h2>
                        <p class="text-center contadores"><b>
                        <?php
                            include ("conexao.php");

                            $query = ("SELECT COUNT(cadastro_grupo_infotec.cod_inscricao&&cadastro_grupo_fesec.cod_inscricao&&cadastro_grupo_silog.cod_inscricao) FROM cadastro_grupo_infotec, cadastro_grupo_fesec, cadastro_grupo_silog;");
                            $rs = mysqli_query($conexao,$query);

                            $result = mysqli_fetch_array($rs);
                            echo $result[0];

                        ?>
                        </b></p>
                    </section>
                </div>

                <div class="line"></div>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>

</body>
</html>