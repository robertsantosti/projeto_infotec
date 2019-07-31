<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css"/>
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/v4-shims.css"/>
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css"/>
    <script defer src="node_modules/@fortawesome/fontawesome-free/js/all.js"></script>
    <script defer src="node_modules/@fortawesome/fontawesome-free/js/v4-shims.js"></script>
    <link rel="stylesheet" href="_css/style.css"/>
    <link rel="stylesheet" href="_css/animate.min.css"/>
    <link rel="stylesheet" href="_css/pe-icon-7-stroke.css"/>

    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="_js/script.js"></script>

    <title>Pagina Inicial</title>

    <style>
        /*
        * Globals
        */

        /* Links */
        a,
        a:focus,
        a:hover {
        color: #fff;
        }

        /* Custom default button */
        .btn-secondary,
        .btn-secondary:hover,
        .btn-secondary:focus {
        color: #333;
        text-shadow: none; /* Prevent inheritance from `body` */
        background-color: #fff;
        border: .05rem solid #fff;
        }


        /*
        * Base structure
        */

        html,
        body {
        height: 100%;
       
        }
        
        .bg_home{
            position: relative;
            width: 100%;
            height: auto;
            min-height: 41.05rem;
            padding: 5.5rem 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4) 0%, rgba(0,0,0,.1) 50%, rgba(0, 0, 0, 0.4) 75%, rgba(0,0,0,.5) 100%), url(_img/bg_quontec.png);
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-size: cover;
        }

        .bg_projeto{
            position: relative;
            width: 100%;
            height: auto;
            min-height: 41.05rem;
            padding: 5.5rem 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.4) 0%, rgba(0,0,0,.1) 50%, rgba(0, 0, 0, 0.4) 75%, rgba(0,0,0,.5) 100%), url(_img/equipe.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-size: cover;
        }

        .bg_vcursos{
            position: relative;
            width: 100%;
            height: auto;
            min-height: 41.05rem;
            padding: 5.5rem 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4) 0%, rgba(0,0,0,.1) 50%, rgba(0, 0, 0, 0.4) 75%, rgba(0,0,0,.5) 100%), url(_img/bg_curso.png);
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-size: cover;
        }

        .bg_vote{
            position: relative;
            width: 100%;
            height: auto;
            min-height: 41.05rem;
            padding: 5.5rem 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.4) 0%, rgba(0,0,0,.1) 50%, rgba(0, 0, 0, 0.4) 75%, rgba(0,0,0,.5) 100%), url(_img/vote.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-size: cover;
        }



        .bg_equipe{
            position: relative;
            width: 100%;
            height: auto;
            min-height: 41.05rem;
            padding: 5.5rem 0;
            background: url(_img/bg_quontec.png);
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-size: cover;
        }


        /*
        * Header
        */
        .masthead {
        margin-bottom: 2rem;
        }

        .masthead-brand {
        margin-bottom: 0;
        }

        .nav-masthead .nav-link {
        padding: .25rem 0;
        font-weight: 700;
        color: rgba(255, 255, 255, .5);
        background-color: transparent;
        border-bottom: .25rem solid transparent;
        }

        .nav-masthead .nav-link:hover,
        .nav-masthead .nav-link:focus {
        border-bottom-color: rgba(255, 255, 255, .25);
        }

        .nav-masthead .nav-link + .nav-link {
        margin-left: 1rem;
        }

        .nav-masthead .active {
        color: #fff;
        border-bottom-color: #fff;
        }

        @media (min-width: 48em) {
        .masthead-brand {
            float: left;
        }
        .nav-masthead {
            float: right;
        }
        }


        /*
        * Cover
        */
        .cover {
        padding: 0 1.5rem;
        }
        .cover .btn-lg {
        padding: .75rem 1.25rem;
        font-weight: 700;
        }


        /*
        * Footer
        */
        .mastfoot {
        color: rgba(255, 255, 255, .5);
        }
    </style>
</head>
<body>
    <div class="fluid-container">
        <!-- MENU -->
        <nav class="navbar navbar-expand-lg fixed-top" id="menu">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="login.php"><i class="fa fa-home"></i></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#menu_responsivo" aria-controls="menu_responsivo" aria-expanded="false" aria-label="toggle navigation">
                    Menu
                <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="menu_responsivo">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#sobre">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#cursos">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#votar">Votar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="#equipe">Equipe</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- INICIO -->
        <div class="bg_home" id="incio">
            <div class="container">

                <div style="margin-left: 28%;">
                    <img src="_img/logo.png" alt="" width="500"/>
                </div>
                    
                    <h1 class="text-white text-center">
                        SISTEMA DE VOTAÇÃO DINÂMICO
                    </h1>

                    <p class="text-white text-center" style="font-weight: 100; letter-spacing: 2px;">
                        VII INFOTEC 2018 - Escola Estadual Técnico Industrial Professor Fontes
                    </p>

                    <p class="text-center mt-5">
                        <a href="#sobre" class="btn btn-light col-2 p-3 mr-2" style="font-weight: 500;">Sobre o Projeto</a>
                        <a href="#cursos" class="btn btn-light col-2 p-3 mr-2" style="font-weight: 500;">Conheça os cursos</a>
                        <a href="#votar" class="btn btn-light col-2 p-3 mr-2" style="font-weight: 500;">Vote</a>
                        <a href="#equipe" class="btn btn-light col-2 p-3" style="font-weight: 500;">Equipe</a>
                    </p>
                    
            </div>
        </div>
        <!-- SOBRE -->
        <div class="bg_projeto" id="sobre">
            <div class="container">
                <h1 class="text-white text-left mb-5">
                    SOBRE O PROJETO
                </h1>
                
                <div class="container">
                    <p class="text-justify text-white mb-3">
                        Website incluindo <b>Sistema de Votação Integrada</b> criado por alunos do <b>Curso Técnico em Informatica para Internet</b>
                        para a <b>VII INFOTEC 2018</b>.<br><br>
                        O Website traz em seu codigo tecnologias como <b>PHP</b>, <b>HTML</b>, <b>CSS</b>, <b>Java Script</b>, <b>SQL</b> e todo conhecimento adiquirido no decorrer do curso, trazendo uma interface amigavel ao usuario com um bom <b>design</b> e de fácil usabilidade.<br><br>
                        A equipe formada por <b>Eliden Conte</b><small> (Web-designer - Desenvolvedora)</small>, <b>Michelle Renata</b> <small>(Marketing - Comunicação)</small> e <b>Robert Santos</b><small> (Desenvolvedor - Designer)</small>, coordenada por <b>Juliana Wildemberg</b> <small> (Orientadora de Projeto - Professora)</small>.
                    </p>
                </div>

                <div class="container mt-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card mb-4 shadow-sm">
                                <img class="card-img-top" src="_img/equipe_estudo.jpg" alt="Equipe">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card mb-4 shadow-sm">
                                <img class="card-img-top" src="_img/equipe_debate.jpg" alt="Logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CURSOS -->
        <div class="bg_vcursos" id="cursos">
            <div class="container">
                
                <h1 class="text-white text-left mb-5">
                    CURSOS
                </h1>
                    
                <div class="row">
                    <div class="col-md-6" style="margin-left: 25%">
                        <div class="card mb-4 shadow-sm">
                            
                            <img class="card-img-top" src="_img/bg_study.jpg" alt="">
                                    
                            <div class="card-body">
                                        
                                <p class="card-text">
                                    <h2 class="h3 text-center">Descubra</h2>
                                    <p>
                                        Conheça os cursos ministrado na E. E. Tecnico industial Professor Fontes
                                    </p>
                                </p>
                                        
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted">
                                        Clique e conheça os cursos
                                    </small>
                                    <a href="http://www.escolafontes.com.br/cursos-tecnicos/" target="_blank"><button class="btn btn-lg btn-outline-secondary">Cursos</button></a> 
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
        </div>

        <!-- VOTAÇÃO -->
        <div class="bg_vote" id="votar">
            <div class="container">
                
                <h1 class="text-white text-left mb-5">
                    VOTAÇÃO
                </h1>
                    
                <div class="container">
                    <div class="row">

                        <div class="col-md-6">

                            <div class="card mb-4 shadow-sm text-white" style="background:  rgba(255, 94, 0,.75)">
                                            
                                <div class="card-body">
                                                
                                    <p class="card-text">
                                        <h2 class="h3 text-center mb-5">Votação Cursos</h2>
                                        <p class="mb-5">
                                        Vote nos cursos ministrados na E. E. Técnico Industrial Professor Fontes.
                                        </p>    
                                    </p>
                                                
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small>
                                            Clique e vote nos cursos
                                        </small>
                                        <a href="votacao_cursos.php"><button class="btn btn-lg btn-outline-light">Votar</button></a> 
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="card mb-4 shadow-sm text-white" style="background:  rgba(22, 0, 119,.75)">
                                            
                                <div class="card-body">
                                                
                                    <p class="card-text">
                                        <h2 class="h3 text-center mb-5">Votação Feira</h2>
                                        <p class="mb-5">
                                            Vote no stand que mais gostou das feiras INFOTEC, FESEG, SILOG 2018.
                                        </p>
                                    </p>
                                                
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small>
                                            Clique e vote nos stands
                                        </small>
                                        <a href="premiacao_votacao.php"><button class="btn btn-lg btn-outline-light">Votar</button></a> 
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    


        <!-- EQUIPE QUONTEC -->
        <div class="bg_projeto" id="equipe">
            <div class="container">

                <h1 class="text-white text-left mb-5">
                    EQUIPE
                </h1> 

                <div class="row">

                    <!--Eliden-->
                    <section class="col-md-3">
                        <div style="width: 200px; height: 200px; background: border-radius: 100%; margin: 0 auto;">
                            <img src="_img/thumb_eliden.png"/>
                        </div>           
                        <h2 class="text-white text-center h3 mt-2" style="font-weight: 200;">Eliden Conte</h2>
                        <p class="text-white text-center mt-2" style="font-weight: 200;">Desenvolvedora - Web Design</p>
                        <p class="text-center mt-1">
                            <a href="https://www.facebook.com/eliden.milena" target="_blank"><button class="btn" style="background:  #3b5998; width: 50px; height: 50px;"><i class="fa fa-facebook"></i></a></button>    
                            <a href="https://www.linkedin.com/in/eliden-conte-814168121/" target="_blank"><button class="btn" style="background: #007bb6; width: 50px; height: 50px;"><i class="fa fa-linkedin"></i></a></button>
                        </p>
                    </section>
                    
                    <!--Michelle-->
                    <section class="col-md-3">
                        <div style="width: 200px; height: 200px; border-radius: 100%; margin: 0 auto;">
                            <img src="_img/thumb_michelle.png"/>
                        </div>  
                        <h2 class="text-white text-center h3 mt-2" style="font-weight: 200;">Michelle Gonçalves</h2>
                        <p class="text-white text-center mt-2" style="font-weight: 200;">Marketing - Comunicação</p>
                        <p class="text-center mt-1">
                            <a href="https://www.facebook.com/mmdecoracoesdefestas" target="_blank"><button class="btn" style="background:  #3b5998; width: 50px; height: 50px;"><i class="fa fa-facebook"></i></a></button>    
                            <a href="https://www.linkedin.com/in/michelle-renata-mendes-gon%C3%A7alves-465a03174/" target="_blank"><button class="btn" style="background: #007bb6; width: 50px; height: 50px;"><i class="fa fa-linkedin"></i></a></button>
                        </p>
                    </section>
                    
                    <!--Robert-->
                    <section class="col-md-3">
                            <div style="width: 200px; height: 200px; border-radius: 100%; margin: 0 auto;">
                                <img src="_img/thumb_robert.png"/>
                            </div>         
                        <h2 class="text-white text-center h3 mt-2" style="font-weight: 200;">Robert Santos</h2>
                        <p class="text-white text-center mt-2" style="font-weight: 200;">Desenvolvedor - Designer</p>
                        <p class="text-center mt-1">
                            <a href="https://www.facebook.com/roohalexandre" target="_blank"><button class="btn" style="background:  #3b5998; width: 50px; height: 50px;"><i class="fa fa-facebook"></i></a></button>    
                            <a href="https://www.linkedin.com/in/robert-alexandre-627174b9" target="_blank"><button class="btn" style="background: #007bb6; width: 50px; height: 50px;"><i class="fa fa-linkedin"></i></a></button>
                        </p>
                    </section>

                    <!--Juliana-->
                    <section class="col-md-3">
                            <div style="width: 200px; height: 200px; border-radius: 100%; margin: 0 auto;">
                                <img src="_img/thumb_ju.png"/>
                            </div>         
                        <h2 class="text-white text-center h3 mt-2" style="font-weight: 200;">Juliana Wildemberg</h2>
                        <p class="text-white text-center mt-2" style="font-weight: 200;">Orientadora de Projeto</p>
                        <p class="text-center mt-1">
                            <a href="https://www.facebook.com/juliana.wildemberg" target="_blank"><button class="btn" style="background:  #3b5998; width: 50px; height: 50px;"><i class="fa fa-facebook"></i></a></button>    
                            <a href="https://www.linkedin.com/in/juliana-wildemberg-b19b0a22" target="_blank"><button class="btn" style="background: #007bb6; width: 50px; height: 50px;"><i class="fa fa-linkedin"></i></a></button>
                        </p>
                    </section>

                </div>
            </div>
        </div>

    </div>

    <footer>
        
    </footer>
</body>
</html>