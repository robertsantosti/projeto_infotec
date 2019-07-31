<!doctype html>
<html lang="pt-br">
    <head>
        <?php 
            session_start();
            include ("head.php");
            include ("conexao.php");
            include ("data_curso.php");
        ?>

        <title>Votação Cursos</title>

        <style>
            .bg_curso{
                position: relative;
                width: 100%;
                height: 23rem;
                padding: 5.5rem 0;
                background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4) 0%, rgba(0,0,0,.1) 50%, rgba(0, 0, 0, 0.4) 75%, rgba(0,0,0,.5) 100%), url(_img/bg_curso.png) no-repeat !important;
                background-position: center;
                background-repeat: no-repeat;
                background-attachment: scroll;
                background-size: cover;
            }
        </style>

        <script>
            function alertaIndisponivel(){
                alert ("Ementa não disponivel");
            }
        </script>
    </head>

    <body>
    <main role="main">
    <section class="text-center text-white fluid-container bg_curso">

        <div class="container">
            <h1 style="font-weight: 300; letter-spacing: 20px; text-transform: uppercase;">Cursos</h1>
            <p class="text-white h4">Conheça os cursos ministrados na <b>Escola Estadual Técnico Industrial Professor Fontes</b></p>
            <p class="lead h3">Vote abaixo no curso que você tem mais interesse.</p>
            <p>
                <a href="http://www.escolafontes.com.br" target="_blanc" class="btn btn-outline-light btn-lg mr-4 my-2">Site da Escola</a>
                <a href="votacao_feira.php" class="btn btn-outline-light my-2 btn-lg">Votação Feira</a>
            </p>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
    
    <?php
        if(isset($_SESSION['msg'])){?>
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
                        <p><?=$_SESSION['msg'];?></p>
                    </div>
      
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
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
             unset($_SESSION['msg']);
        }
    ?>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="_img/eletronica.png" alt="Eletrônica">
                
                <div class="card-body">
                    
                    <p class="card-text">
                        <h2 class="h4">Eletrônica</h2>
                        <p>
                        
                        </p>
                        <p>
                            Duração do curso: <b>18 Meses</b></br>
                            Ementa: <a href="http://www.escolafontes.com.br/plano_curso/ELETRONICA%20REDE.pdf" target="_blank">Eletrônica</a>
                        </p>
                    </p>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">
                            Quantidade de Votos: 
                            <?php quantVotosEletronica($conexao2);?>
                        </small>
                        
                        <div class="btn-group">
                            <form action="confirma_votacao.php" method="post">
                                <input type="radio" name="voto" id="voto" value="Eletrônica" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-lg btn-outline-primary">Votar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="_img/eletrotecnica.png" alt="Eletrotécnica" height="207.5px">
                
                <div class="card-body">
                    
                    <p class="card-text">
                        <h2 class="h4">Eletrotécnica</h2>
                        <p>
                            Duração do curso: <b>18 Meses</b></br>
                            Ementa: <a href="http://www.escolafontes.com.br/plano_curso/ELETROT%C3%89CNICA%20REDE.pdf" target="_blank">Eletrotécnica</a>
                        </p>
                    </p>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">
                            Quantidade de Votos: 
                            <?php quantVotosEletrotecnica($conexao2);?>
                        </small>
                        
                        <div class="btn-group">
                            <form action="confirma_votacao.php" method="post">
                                <input type="radio" name="voto" id="voto" value="Eletrotécnica" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-lg btn-outline-primary">Votar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="_img/eletromecanica.png" alt="Eletromecânica">
                
                <div class="card-body">
                    
                    <p class="card-text">
                        <h2 class="h4">Eletromecânica</h2>
                        <p>
                            Duração do curso: <b>18 Meses</b></br>
                            Ementa: <a href="http://www2.educacao.mg.gov.br/images/stories/escolas/2017/T%C3%A9c_Eletromecanica_Plano_de_Curso_Matriz_Ementa_REDE_SEEMG.pdf" target="_blank">Eletromecânica</a>
                        </p>
                    </p>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">
                            Quantidade de Votos: 
                            <?php quantVotosEletromecanica($conexao2);?>
                        </small>
                        
                        <div class="btn-group">
                            <form action="confirma_votacao.php" method="post">
                                <input type="radio" name="voto" id="voto" value="Eletromecânica" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-lg btn-outline-primary">Votar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="_img/info_internet.png" alt="Informatica para Internet" height="207.5px">
                
                <div class="card-body">
                    
                    <p class="card-text">
                        <h2 class="h4">Informática para Internet</h2>
                        <p>
                            <!--Desenvolvimento de sites e aplicações Web.-->
                        </p>
                        <p>
                            Duração do curso: <b>18 Meses</b></br>
                            Ementa: <a href="http://www.escolafontes.com.br/plano_curso/INFORM%C3%81TICA%20PARA%20INTERNET%20REDE.pdf" target="_blank">Informática para Internet</a>
                        </p>
                    </p>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">
                            Quantidade de Votos: 
                            <?php quantVotosInfoI($conexao2);?>
                        </small>
                        
                        <div class="btn-group">
                            <form action="confirma_votacao.php" method="post">
                            <input type="radio" name="voto" id="voto" value="Informática para Internet" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-lg btn-outline-primary">Votar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="_img/info.png" alt="Informática" height="207.5px">
                
                <div class="card-body">

                    <p class="card-text">
                        <h2 class="h4">Informática</h2>
                        <p>
                            <!--Desenvolvimento em aplicações desktop e infraestrutura.-->
                        </p>
                        <p>
                            Duração do curso: <b>18 Meses</b></br>
                            Ementa: <a href="http://www.escolafontes.com.br/plano_curso/INFORM%C3%81TICA%20REDE.pdf" target="_blank">Informática</a>
                        </p>
                    </p>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">
                            Quantidade de Votos: 
                            <?php quantVotosInfo($conexao2);?>
                        </small>
                        
                        <div class="btn-group">
                            <form action="confirma_votacao.php" method="post">
                                <input type="radio" name="voto" id="voto" value="Informática" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-lg btn-outline-primary">Votar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="_img/logistica.png" alt="Logistica" height="207.5px">
                
                <div class="card-body">
                    
                    <p class="card-text">
                        <h2 class="h4">Logística</h2>
                        <p>
                            
                        </p>
                        <p>
                            Duração do curso: <b>18 Meses</b></br>
                            Ementa: <a href="#" onClick="alertaIndisponivel()">Logística</a>
                        </p>
                    </p>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">
                            Quantidade de Votos: 
                            <?php quantVotosLogistica($conexao2);?>
                        </small>
                        
                        <div class="btn-group">
                            <form action="confirma_votacao.php" method="post">
                                <input type="radio" name="voto" id="voto" value="Logística" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-lg btn-outline-primary">Votar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="_img/mecanica.png" alt="Mecânica Industrial" height="207.5px">
                
                <div class="card-body">
                    
                    <p class="card-text">
                        <h2 class="h4">Mecânica Industrial</h2>
                        <p>
                        
                        </p>
                        <p>
                            Duração do curso: <b>18 Meses</b></br>
                            Ementa: <a href="http://www.escolafontes.com.br/plano_curso/MEC%C3%82NICA%20REDE.pdf" target="_blank">Mecânica Industrial</a>
                        </p>
                    </p>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">
                            Quantidade de Votos: 
                            <?php quantVotosMecanica($conexao2);?>
                        </small>
                        
                        <div class="btn-group">
                            <form action="confirma_votacao.php" method="post">
                                <input type="radio" name="voto" id="voto" value="Mecânica Industrial" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-lg btn-outline-primary">Votar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
            <img class="card-img-top" src="_img/seguranca.png" alt="Segurança do Trabalho" height="207.5px">
                
                <div class="card-body">
                    
                    <p class="card-text">
                        <h2 class="h4">Segurança do Trabalho</h2>
                        <p>
                        
                        </p>
                        <p>
                            Duração do curso: <b>18 Meses</b></br>
                            Ementa: <a href="http://www.escolafontes.com.br/plano_curso/SEGURAN%C3%87A%20TRABALHO%20REDE.pdf" target="_blank">Segurança do Trabalho</a>
                        </p>
                    </p>
                    
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">
                            Quantidade de Votos: 
                            <?php quantVotosSeg($conexao2);?>
                        </small>
                        
                        <div class="btn-group">
                            <form action="confirma_votacao.php" method="post">
                                <input type="radio" name="voto" id="voto" value="Segurança do Trabalho" style="display: none;" checked="checked">
                                <button type="submit" class="btn btn-lg btn-outline-primary">Votar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    
    </main>
    
    <div class="container">
        <a href="ranking_curso.php">Ranking da Votação</a>
    </div>
    
    <footer class="text-muted">
        <div class="container" style="height: 50px; padding: 1%;">
                <p class="text-center">
                    Todos os direitos reservados - QUONTEC
                    <a href="index.php"><button class="btn btn-secondary float-right ml-2"><i class="fa fa-home"></i></button></a>
                    <a href="#"><button class="btn btn-primary float-right"><i class="fa fa-arrow-up"></i></button></a>
                </p>
                
    </footer>
</body>
</html>