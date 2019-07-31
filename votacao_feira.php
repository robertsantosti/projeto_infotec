<!doctype html>
<html lang="pt-br">
    <head>
        <?php 
            session_start();
            include ("head.php");
            include ("conexao.php");
            include ("data_grupo.php");
        ?>

        <title>Votação Cursos</title>

        <style>
            @CHARSET "utf-8";
            .bg_feira{
                position: relative;
                width: 100%;
                height: 37rem;
                padding: 5.5rem 0;
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4) 0%, rgba(0,0,0,.1) 50%, rgba(0, 0, 0, 0.4) 75%, rgba(0,0,0,.5) 100%), url(_img/bg_curso.png) no-repeat !important;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: scroll;
                background-size: cover;
            }

        </style>

    </head>

    <body>
    <main role="main">
            
            <div class="bg_feira">
                
                <div class="container">
                <?php
                    if(isset($_SESSION['ms'])){?>
                    <div class="modal fade" id="exemplomodal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Mensagem do Sistema</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                
                                <div class="modal-body">
                                    <p><?=$_SESSION['ms'];?></p>
                                </div>
                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                    <?php header("Location: ranking_feira.php");?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#exemplomodal').modal('show');
                        })
                    </script>
                <?php
                        unset($_SESSION['ms']);
                    }
                ?>

                <div class="row">
                    <img src="_img/mapa.jpg" usemap="#meumapa">
                                <map name="meumapa">
                                    <!--SILOG-->
                                        <area shape="rect" coords="42,69,60,81" href="#" data-toggle="modal" data-target="#silog1" target="_self"/>
                                        <area shape="rect" coords="92,110,111,124" href="#" data-toggle="modal" data-target="#silog2" target="_self"/>
                                        <area shape="rect" coords="79,68,97,81" href="#" data-toggle="modal" data-target="#silog3" target="_self"/>
                                        <area shape="rect" coords="44,111,62,123" href="#" data-toggle="modal" data-target="#silog4" target="_self"/>
                                        <area shape="rect" coords="319,111,338,124" href="#" data-toggle="modal" data-target="#silog10" target="_self"/>
                                        <area shape="rect" coords="343,110,361,124" href="#" data-toggle="modal" data-target="#silog11" target="_self"/>
                                        <area shape="rect" coords="362,110,382,124" href="#" data-toggle="modal" data-target="#silog12" target="_self"/>
                                        <area shape="rect" coords="367,96,386,110" href="#" data-toggle="modal" data-target="#silog13" target="_self"/>
                                        <area shape="rect" coords="369,84,387,94" href="#" data-toggle="modal" data-target="#silog14" target="_self"/>
                                        <area shape="rect" coords="408,111,426,124" href="#" data-toggle="modal" data-target="#silog20" target="_self"/>
                                        <area shape="rect" coords="465,76,483,91" href="#" data-toggle="modal" data-target="#silog21" target="_self"/>
                                        <area shape="rect" coords="468,111,487,125" href="#" data-toggle="modal" data-target="#silog22" target="_self"/>
                                        <area shape="rect" coords="418,77,436,92" href="#" data-toggle="modal" data-target="#silog24" target="_self"/>
                                    <!--INFOTEC-->
                                        <area shape="circle" coords="168,290,5" href="#" data-toggle="modal" data-target="#infotec42" target="_self"/>
                                        <area shape="circle" coords="189,302,5" href="#" data-toggle="modal" data-target="#infotec3" target="_self"/>
                                        <area shape="circle" coords="190,327,5" href="#" data-toggle="modal" data-target="#infotec28" target="_self"/>
                                        <area shape="circle" coords="199,292,5" href="#" data-toggle="modal" data-target="#infotec8" target="_self"/>
                                        <area shape="circle" coords="210,291,5" href="#" data-toggle="modal" data-target="#infotec9" target="_self"/>
                                        <area shape="circle" coords="211,327,5" href="#" data-toggle="modal" data-target="#infotec35" target="_self"/>
                                        <area shape="circle" coords="227,325,5" href="#" data-toggle="modal" data-target="#infotec44" target="_self"/>
                                        <area shape="circle" coords="227,301,5" href="#" data-toggle="modal" data-target="#infotec16" target="_self"/>
                                        <area shape="circle" coords="240,301,5" href="#" data-toggle="modal" data-target="#infotec15" target="_self"/>
                                        <area shape="circle" coords="270,311,5" href="#" data-toggle="modal" data-target="#infotec30" target="_self"/>
                                        <area shape="circle" coords="270,327,5" href="#" data-toggle="modal" data-target="#infotec34" target="_self"/>
                                        <area shape="circle" coords="311,327,5" href="#" data-toggle="modal" data-target="#infotec36" target="_self"/>
                                        <area shape="circle" coords="310,301,5" href="#" data-toggle="modal" data-target="#infotec23" target="_self"/>
                                        <area shape="circle" coords="279,280,5" href="#" data-toggle="modal" data-target="#infotec33" target="_self"/>
                                        <area shape="circle" coords="321,277,5" href="#" data-toggle="modal" data-target="#infotec25" target="_self"/>
                                        <area shape="circle" coords="330,292,5" href="#" data-toggle="modal" data-target="#infotec20" target="_self"/>
                                        <area shape="circle" coords="353,327,5" href="#" data-toggle="modal" data-target="#infotec4" target="_self"/>
                                        <area shape="circle" coords="371,328,5" href="#" data-toggle="modal" data-target="#infotec6" target="_self"/>
                                        <area shape="circle" coords="382,326,5" href="#" data-toggle="modal" data-target="#infotec31" target="_self"/>
                                        <area shape="circle" coords="381,310,5" href="#" data-toggle="modal" data-target="#infotec5" target="_self"/>
                                        <area shape="circle" coords="372,278,5" href="#" data-toggle="modal" data-target="#infotec1" target="_self"/>
                                        <area shape="circle" coords="381,278,5" href="#" data-toggle="modal" data-target="#infotec2" target="_self"/>
                                        <area shape="circle" coords="403,326,5" href="#" data-toggle="modal" data-target="#infotec32" target="_self"/>
                                        <area shape="circle" coords="423,311,5" href="#" data-toggle="modal" data-target="#infotec29" target="_self"/>
                                        <area shape="circle" coords="423,328,5" href="#" data-toggle="modal" data-target="#infotec43" target="_self"/>
                                        <area shape="circle" coords="434,313,5" href="#" data-toggle="modal" data-target="#infotec21" target="_self"/>
                                        <area shape="circle" coords="434,328,5" href="#" data-toggle="modal" data-target="#infotec40" target="_self"/>
                                        <area shape="circle" coords="453,328,5" href="#" data-toggle="modal" data-target="#infotec41" target="_self"/>
                                        <area shape="circle" coords="472,327,5" href="#" data-toggle="modal" data-target="#infotec27" target="_self"/>
                                        <area shape="circle" coords="473,311,5" href="#" data-toggle="modal" data-target="#infotec26" target="_self"/>
                                        <area shape="circle" coords="392,225,5" href="#" data-toggle="modal" data-target="#infote22" target="_self"/>
                                        <area shape="circle" coords="432,216,5" href="#" data-toggle="modal" data-target="#infotec13" target="_self"/>
                                        <area shape="circle" coords="444,215,5" href="#" data-toggle="modal" data-target="#infotec24" target="_self"/>
                                        <area shape="circle" coords="443,200,5" href="#" data-toggle="modal" data-target="#infotec14" target="_self"/>
                                        <area shape="circle" coords="444,186,5" href="#" data-toggle="modal" data-target="#infotec7" target="_self"/>
                                        <area shape="circle" coords="463,186,5" href="#" data-toggle="modal" data-target="#infotec10" target="_self"/>
                                        <area shape="circle" coords="483,187,5" href="#" data-toggle="modal" data-target="#infotec11" target="_self"/>
                                        <area shape="circle" coords="485,201,5" href="#" data-toggle="modal" data-target="#infotec12" target="_self"/>                         
                                    <!--FESEG-->
                                        <area shape="circle" coords="220,102,7" href="#" data-toggle="modal" data-target="#feseg2" target="_self"/>
                                        <area shape="circle" coords="230,120,7" href="#" data-toggle="modal" data-target="#feseg22" target="_self"/>
                                        <area shape="circle" coords="240,120,7" href="#" data-toggle="modal" data-target="#feseg42" target="_self"/>
                                        <area shape="circle" coords="25,184,7" href="#" data-toggle="modal" data-target="#feseg26" target="_self"/>
                                        <area shape="circle" coords="25,224,7" href="#" data-toggle="modal" data-target="#feseg28" target="_self"/>
                                        <area shape="circle" coords="86,186,7" href="#" data-toggle="modal" data-target="#feseg41" target="_self"/>
                                        <area shape="circle" coords="86,223,7" href="#" data-toggle="modal" data-target="#feseg47" target="_self"/>
                                        <area shape="circle" coords="147,185,7" href="#" data-toggle="modal" data-target="#feseg48" target="_self"/>
                                        <area shape="circle" coords="148,213,7" href="#" data-toggle="modal" data-target="#feseg46" target="_self"/>
                                        <area shape="circle" coords="189,185,7" href="#" data-toggle="modal" data-target="#feseg49" target="_self"/>
                                        <area shape="circle" coords="187,224,7" href="#" data-toggle="modal" data-target="#feseg5" target="_self"/>
                                        <area shape="circle" coords="67,301,7" href="#" data-toggle="modal" data-target="#feseg30" target="_self"/>
                                        <area shape="circle" coords="67,330,7" href="#" data-toggle="modal" data-target="#feseg25" target="_self"/>
                                        <area shape="circle" coords="127,300,7" href="#" data-toggle="modal" data-target="#feseg41" target="_self"/>
                                        <area shape="circle" coords="127,330,7" href="#" data-toggle="modal" data-target="#feseg47" target="_self"/>
                                        <area shape="circle" coords="139,300,7" href="#" data-toggle="modal" data-target="#feseg27" target="_self"/>
                                        <area shape="circle" coords="137,326,7" href="#" data-toggle="modal" data-target="#feseg21" target="_self"/>
                                        <area shape="circle" coords="178,328,7" href="#" data-toggle="modal" data-target="#feseg1" target="_self"/>
                                        <area shape="circle" coords="177,299,7" href="#" data-toggle="modal" data-target="#feseg8" target="_self"/>
                                        <area shape="circle" coords="259,329,7" href="#" data-toggle="modal" data-target="#feseg6" target="_self"/>
                                        <area shape="circle" coords="392,185,7" href="#" data-toggle="modal" data-target="#feseg3" target="_self"/>
                                        <area shape="circle" coords="393,211,7" href="#" data-toggle="modal" data-target="#feseg20" target="_self"/>
                                        <area shape="circle" coords="432,185,7" href="#" data-toggle="modal" data-target="#feseg29" target="_self"/>
                                        <area shape="circle" coords="431,205,7" href="#" data-toggle="modal" data-target="#feseg44" target="_self"/>
                                        <area shape="circle" coords="495,184,7" href="#" data-toggle="modal" data-target="#feseg4" target="_self"/>
                                        <area shape="circle" coords="534,186,7" href="#" data-toggle="modal" data-target="#feseg45" target="_self"/>
                                        <area shape="circle" coords="534,214,7" href="#" data-toggle="modal" data-target="#feseg24" target="_self"/>
                                        <area shape="circle" coords="565,321,7" href="#" data-toggle="modal" data-target="#feseg6" target="_self"/>
                                </map>

                                <div class="container col-4 bg-light" style="border-radius: 10%;">
                                    <h3 class="mt-5">Selecione o stand no mapa ao lado</h3>
                                    <img src="_img/mao.png" alt="Mão Apontando" width="365px">
                                </div>
                </div>
                    <div class="row mt-3" style="margin-left:15%;">
                        <a href="index.php"><button class="btn btn-lg btn-light mr-3">Retornar ao Início</button></a> 
                        <a href="votacao_cursos.php"><button class="btn btn-lg btn-light mr-3">Votação Cursos</button></a>  
                        <a href="votacao_feira.php"><button class="btn btn-lg btn-light mr-3">Votação Feira</button></a>  
                        <a href="cadastrofeira.php"><button class="btn btn-lg btn-light mr-3">Cadastrar Grupo</button></a>
                    </div>      
                </div>              
            </div>


    </main>

    <!--SILOG-->
    <div class="modal" id="silog1" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe1Silog($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="silog3" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe3Silog($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="silog4" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe4Silog($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="silog2" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe2Silog($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="silog10" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe10Silog($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="silog11" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe11Silog($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <div class="modal" id="silog12" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe12Silog($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="silog13" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe13Silog($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="silog14" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe14Silog($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="silog20" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe20Silog($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="silog24" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe24Silog($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="silog21" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe21Silog($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="silog22" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe22Silog($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--INFOTEC-->
    
    <div class="modal" id="infotec42" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe42Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="infotec3" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe3Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="infotec28" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe28Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="infotec8" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe8Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="infotec9" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe9Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="infotec35" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe35Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="infotec44" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe44Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="infotec16" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe16Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="infotec15" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe15Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="infotec30" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe30Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="infotec34" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe34Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="infotec36" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe36Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="infotec23" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe23Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="infotec33" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe33Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="infotec25" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe25Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="infotec20" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe20Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="infotec4" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe4Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="infotec6" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe6Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="infotec31" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe31Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="infotec5" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe5Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="infotec1" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe1Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="infotec2" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe2Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="infotec32" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe32Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="infotec29" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe29Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="infotec43" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe43Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="infotec21" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe21Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="infotec40" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe40Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="infotec41" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe41Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="infotec27" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe27Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="infotec26" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe26Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="infotec22" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe22Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="infotec13" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe13Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="infotec24" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe24Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="infotec14" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe33Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="infotec7" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe7Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="infotec10" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe10Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="infotec11" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe11Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="infotec12" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe12Infotec($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--FESEG-->    
    <div class="modal" id="feseg2" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe2Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="feseg22" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe22Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="feseg42" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe42Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="feseg26" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe26Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="feseg28" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe28Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="feseg41" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe41Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="feseg47" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe47Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="feseg48" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe48Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="feseg46" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe46Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="feseg49" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe49Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="feseg5" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe5Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
        
    <div class="modal" id="feseg30" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe30Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="feseg25" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe25Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="feseg27" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe27Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="feseg21" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe21Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="feseg1" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe1Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="feseg8" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe8Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="feseg6" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe6Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="feseg3" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe3Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="feseg20" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe20Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="feseg29" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe29Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="feseg44" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe44Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="feseg4" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe4Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="feseg45" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe45Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal" id="feseg24" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <?php
                $grupos = exibe24Feseg($conexao2);
                foreach ($grupos as $grupo): 
            ?>
                <div class="modal-header">
                    <h5 class="modal-title"><?=$grupo['grupo']?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                <div class="modal-body">
                    <p class="text-justify"><small>
                        Numero de Inscrição: <b><?=$grupo['cod_grupo']?></b><br>
                        Feira participante: <b><?=$grupo['feira']?></b><br>
                        Integrantes: <b><?=$grupo['lider']?>, <?=$grupo['integrante2']?>, <?=$grupo['integrante3']?>, <?=$grupo['integrante4']?><br></b>
                        Turma: <b><?=$grupo['turma']?></b>
                    </small></p>
                </div>
            
            <?php endforeach; ?>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-lg btn-danger" data-dismiss="modal">Fechar</button>
                    <form action="confirma_voto.php" method="post">
                        <input type="radio" name="voto" id="voto" value="<?=$grupo['grupo']?>" style="display: none;" checked="checked">
                        <button type="submit" class="btn btn-lg btn-primary">Votar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-muted">
        <div class="container" style="height: 50px; padding: 1%;">
            <p class="text-center">
                Todos os direitos reservados - QUONTEC
                <a href="index.php"><button class="btn btn-primary float-right"><i class="fa fa-home"></i></button></a>
            </p>
        </div>
    </footer>
</body>
</html>