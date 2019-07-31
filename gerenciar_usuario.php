<!DOCTYPE html>
<html lang="pt-br">
<head>

    <?php include ("head.php"); ?>

    <title>Usuarios</title>

</head>
<body>
    <div class="fluid-container">

        <div class="container">
            
            <?php include ("header_adm.php"); ?>
            
            <table class="table table-bordered">

                <thead class="thead-dark text-center">
                    <tr>
                        <th scope="col">
                            Nº Cadastro
                        </th>

                        <th scope="col">
                            Nome
                        </th>

                        <th scope="col">
                            E-mail
                        </th>

                        <th scope="col">
                            Nascimento
                        </th>
                    <tr>
                </thead>

                <?php
                    /* Puxar com foreach da tabela do banco */
                        include ("conexao.php");
                        include ("banco_usuario.php");
    
                        $usuarios = listaUsuario($conexao);
                        foreach($usuarios as $usuario): ?>
                        <tr>
                            <td class="text-center"><b><?=$usuario['numero']?></b></td>
                            <td class="text-center"><b><?=$usuario['nome']?></b></td>
                            <td class="text-center"><b><?=$usuario['email']?></b></td>
                            <td class="text-center"><b><?=$usuario['nasc']?></b></td>
                        </tr>    
                <?php
                        endforeach
                ?>

            </table>

        </div>

    </div>
</body>
</html>