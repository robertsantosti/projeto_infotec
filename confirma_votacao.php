<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
        session_start(); 
        include ("head.php");
        include ("conexao.php");
        include ("data_curso.php");
    ?>
    <title>Confimação de Voto</title>
</head>
<body>
    <?php
        $voto = mysqli_real_escape_string($conexao2, $_POST['voto']);

        if(isset($_COOKIE['voto_cont'])){
            $_SESSION['msg'] = "<span class='text-danger text-center'>Você ja votou</span>";
            header ("Location: votacao_cursos.php");
        } else {
            setcookie('voto_cont', $_SERVER['REMOTE_ADDR'], time()+10);

            if($voto == "Eletrônica"){
                if(insereVotosEletronica($conexao2)){
                    $_SESSION['msg'] = "<span class='text-success text-center'>Voto cadastrado com sucesso</span>";
                    header ("Location: votacao_cursos.php");
                } else { ?>
                    <script>
                        function alertaErro(){
                            alert ("Voto não cadastrado!");
                        }
    
                        alertaErro();
                    </script>
                <?php
                }
            }else if($voto == "Eletrotécnica"){
                if(insereVotosEletrotecnica($conexao2)){
                    $_SESSION['msg'] = "<span class='text-success text-center'>Voto cadastrado com sucesso</span>";
                    header ("Location: votacao_cursos.php");
                } else { ?>
                    <script>
                        function alertaErro(){
                            alert ("Voto não cadastrado!");
                        }
    
                        alertaErro();
                    </script>
                <?php
                }
            }else if($voto == "Eletromecânica"){
                if(insereVotosEletromecanica($conexao2)){
                    $_SESSION['msg'] = "<span class='text-success text-center'>Voto cadastrado com sucesso</span>";
                    header ("Location: votacao_cursos.php");
                } else { ?>
                    <script>
                        function alertaErro(){
                            alert ("Voto não cadastrado!");
                        }
    
                        alertaErro();
                    </script>
                <?php
                }
            }else if($voto == "Informática para Internet"){
                if(insereVotosInfoI($conexao2)){
                    $_SESSION['msg'] = "<span class='text-success text-center'>Voto cadastrado com sucesso</span>";
                    header ("Location: votacao_cursos.php");
                } else { ?>
                    <script>
                        function alertaErro(){
                            alert ("Voto não cadastrado!");
                        }
    
                        alertaErro();
                    </script>
                <?php
                }
            }else if($voto == "Informática"){
                if(insereVotosInfo($conexao2)){
                    $_SESSION['msg'] = "<span class='text-success text-center'>Voto cadastrado com sucesso</span>";
                    header ("Location: votacao_cursos.php");
                } else { ?>
                    <script>
                        function alertaErro(){
                            alert ("Voto não cadastrado!");
                        }
    
                        alertaErro();
                    </script>
                <?php
                }
            }else if($voto == "Logística"){
                if(insereVotosLogistica($conexao2)){
                    $_SESSION['msg'] = "<span class='text-success text-center'>Voto cadastrado com sucesso</span>";
                    header ("Location: votacao_cursos.php");
                } else { ?>
                    <script>
                        function alertaErro(){
                            alert ("Voto não cadastrado!");
                        }
    
                        alertaErro();
                    </script>
                <?php
                }
            }else if($voto == "Mecânica Industrial"){
                if(insereVotosMecanica($conexao2)){
                    $_SESSION['msg'] = "<span class='text-success text-center'>Voto cadastrado com sucesso</span>";
                    header ("Location: votacao_cursos.php");
                } else { ?>
                    <script>
                        function alertaErro(){
                            alert ("Voto não cadastrado!");
                        }
    
                        alertaErro();
                    </script>
                <?php
                }
            }else if($voto == "Segurança do Trabalho"){
                if(insereVotosSeg($conexao2)){
                    $_SESSION['msg'] = "<span class='text-success text-center'>Voto cadastrado com sucesso</span>";
                    header ("Location: votacao_cursos.php");
                } else { ?>
                    <script>
                        function alertaErro(){
                            alert ("Voto não cadastrado!");
                        }
    
                        alertaErro();
                    </script>
                <?php
                }
            }
        }
        ?>



        
</body>
</html>