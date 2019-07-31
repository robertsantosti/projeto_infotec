<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include ("head.php")?>
    <link rel="stylesheet" href="_css/menu_adm.css">
    <title>Painel Administrativo</title>
</head>
<body class="fluid-container">

    <div class="wrapper">
        <?php include ("adm_main.php");?>
            <div class="container">
                
                <span style="color: rgba(21, 3, 70, 1)"><i class="fa fa-envelope fa-5x"></i></span> 
                <p>quontecsolucoes@gmail.com<p>

                <span style="color: rgba(21, 3, 70, 1)"><i class="fa fa-users fa-5x"></i></span>
                <p>Eliden Conte - Desenvolvedora/Web-Design</p>
                <p>Michelle Renata - Marketing/Web-Design</p>
                <p>Robert Santos - Desenvolvedor/Design</p>
                
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