<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include ("head.php")?>
    <link rel="stylesheet" href="_css/asidemenu">
    <title>Area Administrativa</title>
</head>
<body class="fluid-container">
    
<div class="wrapper">
        <?php include ("adm_menu.php")?>

        <!-- Page Content  -->
        <div id="content" class="mt-4">

            <h2>Bem Vindo ao Painel Administrativo</h2>

        </div>
    </div>

<script>

    menuLateral();

    function menuLateral(){

        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });


    }
</script>
</body>
</html>