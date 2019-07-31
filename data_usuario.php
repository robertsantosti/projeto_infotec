<?php

function exibeUsuario($conexao2){
    $usuarios = array();
    $resultado=mysqli_query($conexao2, "SELECT * FROM usuario ORDER BY cod_usuario");
    while($usuario = mysqli_fetch_assoc($resultado)){      
        array_push($usuarios, $usuario);
    }
    return $usuarios;
}

?>