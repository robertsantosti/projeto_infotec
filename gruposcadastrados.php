<!doctype html>
<html lang="pt-br">
  <head>
    <?php 
        include ("head.php"); 
        include ("conexao.php");
        include ("data_grupo.php");
    ?>

    <title>QUONTEC - Cadastro para Votação</title>

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
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1) 0%, rgba(0,0,0,.3) 50%, rgba(0, 0, 0, 0.4) 75%, rgba(0,0,0,.7) 100%), url(_img/bg_black.jpg) no-repeat;
        }

        body {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-pack: center;
        -webkit-box-pack: center;
        justify-content: center;
        color: #fff;
        text-shadow: 0 .05rem .1rem rgba(0, 0, 0, .5);
        box-shadow: inset 0 0 5rem rgba(0, 0, 0, .5);
        }

        .cover-container {
        max-width: 42em;
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

  <body class="text-center">

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
      <header class="masthead mb-auto">
        <div class="inner">
          <h3 class="masthead-brand h6">QUONTEC - Qualidade Online em Tecnolôgia - Sistema de Votação Dinâmica Integrada</h3>
        </div>
      </header>
      <table class="table table-hover table-striped">
                            <thead style="font-size: 0.75em;">
                                <th class="text-white">#</th>
                                <th class="text-white">Grupo</th>
                                <th class="text-white">Feira</th>
                                <th class="text-white">Turma</th>
                            </thead>
                            <tbody>
                                <?php
                                   
                                    $grupos = exibeGrupo($conexao2);
                                    foreach ($grupos as $grupo): 
                                    
                                    ?>
                                <tr>
                                    <td><?=$grupo['cod_grupo']?></td>
                                    <td><?=$grupo['grupo']?></td>
                                    <td><?=$grupo['feira']?></td>
                                    <td><?=$grupo['turma']?></td>
                                </tr>
                                    <?php
                                endforeach;?>
                            </tbody>
                        </table>
      <main role="main" class="inner cover">
      
        <p class="lead">
          <a href="index.php" class="btn btn-lg btn-secondary">Retornar ao Início</a>
        </p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p>Todos os direitos reservados - QUONTEC Sistemas</p>
        </div>
      </footer>
    </div>


  </body>
</html>