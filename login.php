<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php 
        include ("head.php"); 
        session_start();
    ?>

    <title>Area de login</title>

</head>
<body class="fluid-container">

    <section class="login-area" id="login-area">
        <div class="container">

            <form action="logar.php" method="post" class="form-signin">
                <fieldset class="margin-form">
                    
                    <h1 class="text-white mb-4">Area de Login</h1>
                    <?php if(isset($_SESSION['nao_autorizado'])): ?>    
                        <div class="notification is-danger">
                        <p>ERRO: Usuário ou senha inválidos.</p>
                        </div>
                    <?php
                    endif;
                        unset($_SESSION['nao_autorizado']); 
                    ?>
                    <input type="text" name="usuario" id="usuario" class="form-control text-center mb-3" placeholder="Login"/>
                    <input type="password" name="senha" id="senha" class="form-control text-center mb-3" placeholder="Senha"/>
                    <input type="submit" value="Entrar" class="btn btn-block btn-dark">

                </fieldset>
            </form>
            <a href="index.php">
                <button class="btn btn-light" style="margin-left: 43%;">Retornar a Home</button>
            </a>
        </div>
    </section>


</body>
</html>