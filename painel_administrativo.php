<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 
        include ("head.php");
        //include ('verifica_login.php');
        
    ?>
    
    <title>Painel Administrativo</title>

    <style>
        .contadores{
            padding: 10px; 
            width:100px; 
            height: 100px; 
            margin: 0 auto; 
            border: 3px solid #FFFFFF;/*#1F77D0*/
            color: #FFF;
            font-weight: bold;
            font-size: 3em;
            border-radius: 25%;
            box-shadow: 1px 1px 3px #333;
        }
    </style>
</head>
<body>
    <?php 
        include ("menu_superior.php");
        include ("adm_sidebar.php");
    ?>
    
    <div class="main-panel bg-intro">
            
            <div class="container mt-2 text-white">
               
                <h1 class="mt-3 mb-4">
                    Bem Vindo
                </h1>

                <div class="row container text-center">
                    <section class="container col-4">
                        <h2 class="h4 mb-3">Usuarios Cadastrados</h2>
                        <p class="text-center contadores"><b>
                        <?php
                            include ("conexao.php");

                            $query = ("SELECT COUNT(usuario) FROM usuario;");
                            $rs = mysqli_query($conexao2,$query);

                            $result = mysqli_fetch_array($rs);
                            echo $result[0];

                        ?>
                        </b></p>
                    </section>
                    <section class="container col-4">
                        <h2 class="h4 mb-3">Cursos Cadastrados</h2>
                        <p class="text-center contadores"><b>
                        
                        <?php
                            include ("conexao.php");
                            
                            $query = ("SELECT COUNT(cod_cursos) FROM cursos;");
                            $rs = mysqli_query($conexao2,$query);

                            $result = mysqli_fetch_array($rs);
                            echo $result[0];

                        ?>

                        </b></p>
                    </section>
                    <section class="container col-4">
                        <h2 class="h4 mb-3">Grupos Cadastrados</h2>
                        <p class="text-center contadores"><b>
                        <?php
                            include ("conexao.php");

                            $query = ("SELECT COUNT(grupo) FROM grupo;");
                            $rs = mysqli_query($conexao2,$query);

                            $result = mysqli_fetch_array($rs);
                            echo $result[0];

                        ?>
                        </b></p>
                    </section>
                </div>

                <div class="row container text-center mt-5">
                    <section class="container col-4">
                        <h2 class="h4 mb-3">Grupos INFOTEC</h2>
                        <p class="text-center contadores"><b>
                        <?php
                            include ("conexao.php");

                            $query = ("SELECT COUNT(grupo) FROM grupo WHERE feira='INFOTEC';");
                            $rs = mysqli_query($conexao2,$query);

                            $result = mysqli_fetch_array($rs);
                            echo $result[0];

                        ?>
                        </b></p>
                    </section>
                    <section class="container col-4">
                        <h2 class="h4 mb-3">Grupos FESEG    </h2>
                        <p class="text-center contadores"><b>
                        
                        <?php
                            include ("conexao.php");
                            
                            $query = ("SELECT COUNT(grupo) FROM grupo WHERE feira='FESEG';");
                            $rs = mysqli_query($conexao2,$query);

                            $result = mysqli_fetch_array($rs);
                            echo $result[0];

                        ?>

                        </b></p>
                    </section>
                    <section class="container col-4">
                        <h2 class="h4 mb-3">Grupos SILOG</h2>
                        <p class="text-center contadores"><b>
                        <?php
                            include ("conexao.php");

                            $query = ("SELECT COUNT(grupo) FROM grupo WHERE feira='SILOG';");
                            $rs = mysqli_query($conexao2,$query);

                            $result = mysqli_fetch_array($rs);
                            echo $result[0];

                        ?>
                        </b></p>
                    </section>
                </div>

            </div>

    </div>

</body>
</html>