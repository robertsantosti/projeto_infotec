<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        session_start();
        include ("conexao.php");
        include ("head.php");
        include ("data_grupo.php");
    ?>
    <title>Document</title>

    <style>
        article{
            height: 300px;
            background: rgba(255,255,255,0.7);
            border: 3px solid #FFF;
            text-transform: capitalize;
        }
    </style>
</head>
<body>
    <!--SILOG-->
        <article class="container p-3" id="silog1">
            <?php
                    

                    $grupos = exibe1Silog($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?>, <?=$grupo['integrante5']?>, <?=$grupo['integrante6']?>, <?=$grupo['integrante7']?>, <?=$grupo['integrante8']?>, <?=$grupo['integrante9']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="silog3">
                <?php
                    function exibe3Silog($conexao2){
                        $grupos = array();
                        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=3 AND feira='SILOG';");
                        while($grupo = mysqli_fetch_assoc($resultado)){      
                            array_push($grupos, $grupo);
                        }
                        return $grupos;
                    }

                    $grupos = exibe3Silog($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?>, <?=$grupo['integrante5']?>, <?=$grupo['integrante6']?>, <?=$grupo['integrante7']?>, <?=$grupo['integrante8']?>, <?=$grupo['integrante9']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="silog4">
                <?php
                    function exibe4Silog($conexao2){
                        $grupos = array();
                        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=4 AND feira='SILOG';");
                        while($grupo = mysqli_fetch_assoc($resultado)){      
                            array_push($grupos, $grupo);
                        }
                        return $grupos;
                    }

                    $grupos = exibe4Silog($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?>, <?=$grupo['integrante5']?>, <?=$grupo['integrante6']?>, <?=$grupo['integrante7']?>, <?=$grupo['integrante8']?>, <?=$grupo['integrante9']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="silog2">
                <?php
                    function exibe2Silog($conexao2){
                        $grupos = array();
                        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=2 AND feira='SILOG';");
                        while($grupo = mysqli_fetch_assoc($resultado)){      
                            array_push($grupos, $grupo);
                        }
                        return $grupos;
                    }

                    $grupos = exibe2Silog($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?>, <?=$grupo['integrante5']?>, <?=$grupo['integrante6']?>, <?=$grupo['integrante7']?>, <?=$grupo['integrante8']?>, <?=$grupo['integrante9']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="silog10">
                <?php
                    function exibe10Silog($conexao2){
                        $grupos = array();
                        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=10 AND feira='SILOG';");
                        while($grupo = mysqli_fetch_assoc($resultado)){      
                            array_push($grupos, $grupo);
                        }
                        return $grupos;
                    }

                    $grupos = exibe10Silog($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?>, <?=$grupo['integrante5']?>, <?=$grupo['integrante6']?>, <?=$grupo['integrante7']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="silog11">
                <?php
                    function exibe11Silog($conexao2){
                        $grupos = array();
                        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=11 AND feira='SILOG';");
                        while($grupo = mysqli_fetch_assoc($resultado)){      
                            array_push($grupos, $grupo);
                        }
                        return $grupos;
                    }

                    $grupos = exibe11Silog($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?>, <?=$grupo['integrante5']?>, <?=$grupo['integrante6']?>, <?=$grupo['integrante7']?>, <?=$grupo['integrante8']?>, <?=$grupo['integrante9']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="silog12">
            <?php
                    function exibe12Silog($conexao2){
                        $grupos = array();
                        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=12 AND feira='SILOG';");
                        while($grupo = mysqli_fetch_assoc($resultado)){      
                            array_push($grupos, $grupo);
                        }
                        return $grupos;
                    }

                    $grupos = exibe12Silog($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?>, <?=$grupo['integrante5']?>, <?=$grupo['integrante6']?>, <?=$grupo['integrante7']?>, <?=$grupo['integrante8']?>, <?=$grupo['integrante9']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="silog13">
                <?php
                    function exibe13Silog($conexao2){
                        $grupos = array();
                        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=13 AND feira='SILOG';");
                        while($grupo = mysqli_fetch_assoc($resultado)){      
                            array_push($grupos, $grupo);
                        }
                        return $grupos;
                    }

                    $grupos = exibe13Silog($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?>, <?=$grupo['integrante5']?>, <?=$grupo['integrante6']?>, <?=$grupo['integrante7']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="silog14">
                <?php
                    function exibe14Silog($conexao2){
                        $grupos = array();
                        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=14 AND feira='SILOG';");
                        while($grupo = mysqli_fetch_assoc($resultado)){      
                            array_push($grupos, $grupo);
                        }
                        return $grupos;
                    }

                    $grupos = exibe14Silog($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?>, <?=$grupo['integrante5']?>, <?=$grupo['integrante6']?>, <?=$grupo['integrante7']?>, <?=$grupo['integrante8']?>, <?=$grupo['integrante9']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="silog20">
                <?php
                    function exibe20Silog($conexao2){
                        $grupos = array();
                        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=20 AND feira='SILOG';");
                        while($grupo = mysqli_fetch_assoc($resultado)){      
                            array_push($grupos, $grupo);
                        }
                        return $grupos;
                    }

                    $grupos = exibe20Silog($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?>, <?=$grupo['integrante5']?>, <?=$grupo['integrante6']?>, <?=$grupo['integrante7']?>, <?=$grupo['integrante8']?>, <?=$grupo['integrante9']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="silog24">
                <?php
                    function exibe24Silog($conexao2){
                        $grupos = array();
                        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=24 AND feira='SILOG';");
                        while($grupo = mysqli_fetch_assoc($resultado)){      
                            array_push($grupos, $grupo);
                        }
                        return $grupos;
                    }

                    $grupos = exibe24Silog($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?>, <?=$grupo['integrante5']?>, <?=$grupo['integrante6']?>, <?=$grupo['integrante7']?>, <?=$grupo['integrante8']?>, <?=$grupo['integrante9']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="silog21">
                <?php
                    function exibe21Silog($conexao2){
                        $grupos = array();
                        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=21 AND feira='SILOG';");
                        while($grupo = mysqli_fetch_assoc($resultado)){      
                            array_push($grupos, $grupo);
                        }
                        return $grupos;
                    }

                    $grupos = exibe21Silog($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?>, <?=$grupo['integrante5']?>, <?=$grupo['integrante6']?>, <?=$grupo['integrante7']?>, <?=$grupo['integrante8']?>, <?=$grupo['integrante9']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="silog22">
                <?php
                    function exibe22Silog($conexao2){
                        $grupos = array();
                        $resultado=mysqli_query($conexao2, "SELECT * FROM grupo WHERE cod_grupo=22 AND feira='SILOG';");
                        while($grupo = mysqli_fetch_assoc($resultado)){      
                            array_push($grupos, $grupo);
                        }
                        return $grupos;
                    }

                    $grupos = exibe22Silog($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?>, <?=$grupo['integrante5']?>, <?=$grupo['integrante6']?>, <?=$grupo['integrante7']?>, <?=$grupo['integrante8']?>, <?=$grupo['integrante9']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

    <!--INFOTEC-->
        <article class="container p-3" id="infotec42">
                <?php
                    

                    $grupos = exibe42Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec3">
                <?php
                    

                    $grupos = exibe3Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec28">
                <?php
                    

                    $grupos = exibe28Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec8">
                <?php
                    

                    $grupos = exibe8Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec9">
                <?php
                    

                    $grupos = exibe9Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec35">
                <?php
                    

                    $grupos = exibe35Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec44">
                <?php
                    

                    $grupos = exibe44Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec16">
                <?php
                    

                    $grupos = exibe16Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec15">
                <?php
                    

                    $grupos = exibe15Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec30">
                <?php
                    

                    $grupos = exibe30Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec34">
                <?php
                    

                    $grupos = exibe34Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec36">
                <?php
                    

                    $grupos = exibe36Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec23">
                <?php
                    

                    $grupos = exibe23Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec33">
                <?php
                    

                    $grupos = exibe33Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>

        </article>

        <article class="container p-3" id="infotec25">
                <?php
                    

                    $grupos = exibe25Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec20">
            <?php
                    

                    $grupos = exibe20Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec4">
                <?php
                    

                    $grupos = exibe4Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec6">
                <?php
                    

                    $grupos = exibe6Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec31">
                <?php
                    

                    $grupos = exibe31Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec5">
                <?php
                    

                    $grupos = exibe5Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec1">
                <?php
                    

                    $grupos = exibe1Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec2">
                <?php
                    

                    $grupos = exibe2Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec32">
                <?php
                    

                    $grupos = exibe32Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec29">
                <?php
                    

                    $grupos = exibe29Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec43">
                <?php
                    

                    $grupos = exibe15Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec21">
                <?php
                    

                    $grupos = exibe21Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec40">
                <?php
                    

                    $grupos = exibe40Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec41">
                <?php
                    

                    $grupos = exibe41Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec27">
                <?php
                    

                    $grupos = exibe27Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec26">
                <?php
                    

                    $grupos = exibe26Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec22">
                <?php
                    

                    $grupos = exibe22Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec13">
                <?php
                    

                    $grupos = exibe13Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec24">
                <?php
                    

                    $grupos = exibe24Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec14">
                <?php
                    

                    $grupos = exibe14Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec7">
                <?php
                    

                    $grupos = exibe7Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec10">
                <?php
                    

                    $grupos = exibe10Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec11">
                <?php
                    

                    $grupos = exibe11Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="infotec12">
                <?php
                    

                    $grupos = exibe12Infotec($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <!--FESEG-->
        <article class="container p-3" id="feseg2">
                <?php
                    

                    $grupos = exibe2feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="feseg22">
                <?php
                    

                    $grupos = exibe22feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        <article class="container p-3" id="feseg42">
                <?php

                    $grupos = exibe42feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>
        
        <article class="container p-3" id="feseg26">
                <?php
                    

                    $grupos = exibe26feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        
        <article class="container p-3" id="feseg2">
                <?php
                    

                    $grupos = exibe28feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        
        <article class="container p-3" id="feseg41">
                <?php
                    

                    $grupos = exibe41feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        
        <article class="container p-3" id="feseg47">
                <?php
                    

                    $grupos = exibe47feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        
        <article class="container p-3" id="feseg30">
                <?php
                    

                    $grupos = exibe30feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        
        <article class="container p-3" id="feseg25">
                <?php
                    

                    $grupos = exibe25feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>
        
        <article class="container p-3" id="feseg48">
                <?php
                    

                    $grupos = exibe48feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        
        <article class="container p-3" id="feseg46">
                <?php
                    

                    $grupos = exibe46feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        
        <article class="container p-3" id="feseg49">
                <?php
                    

                    $grupos = exibe49feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        
        <article class="container p-3" id="feseg5">
                <?php
                    

                    $grupos = exibe5feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        
        <article class="container p-3" id="feseg27">
                <?php
                    

                    $grupos = exibe27feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        
        <article class="container p-3" id="feseg21">
                <?php
                    

                    $grupos = exibe21feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        
        <article class="container p-3" id="feseg8">
                <?php
                    

                    $grupos = exibe8feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        
        <article class="container p-3" id="feseg1">
                <?php
                    

                    $grupos = exibe1feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        
        <article class="container p-3" id="feseg6">
                <?php
                    

                    $grupos = exibe6feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        
        <article class="container p-3" id="feseg3">
                <?php
                    

                    $grupos = exibe3feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        
        <article class="container p-3" id="feseg20">
                <?php
                    

                    $grupos = exibe20feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        
        <article class="container p-3" id="feseg29">
                <?php
                    

                    $grupos = exibe29feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        
        <article class="container p-3" id="feseg44">
                <?php
                    

                    $grupos = exibe44feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        
        <article class="container p-3" id="feseg4">
                <?php
                    
                    $grupos = exibe4feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        
        <article class="container p-3" id="feseg45">
                <?php
                    

                    $grupos = exibe45feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>

        
        <article class="container p-3" id="feseg24">
                <?php
                    

                    $grupos = exibe24feseg($conexao2);
                    foreach ($grupos as $grupo): 
                                   
                ?>
                    <h2 class="h3"><?=$grupo['grupo']?></h2>
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                <?php endforeach; ?>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <form action="confirma_voto.php" method="post">
                                <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-outline-secondary">Votar</button>
                            </form>
                        </div>
                    </div>
        </article>
</body>
</html>
