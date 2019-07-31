<!-- Sidebar  -->
<nav id="sidebar">
            <div class="sidebar-header">
                <h3>Painel Administrativo</h3>
                <strong>PA</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-home fa-2x"></i> Pagína Inicial
                    </a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="adm_area.php">Início</a>
                        </li>
                        <li>
                            <a href="adm_cont_voto.php">Contagem de Votos - Cursos</a>
                        </li>
                        <li>
                            <a href="adm_cont_enquete.php">Contagem de Votos - Enquete</a>
                        </li>
                    </ul>
                </li>
                

                <li>
                    <a href="#votosSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-list-ol fa-2x"></i> Listagem dos Votos
                    </a>
                    <ul class="collapse list-unstyled" id="votosSubmenu">
                        <li>
                            <a href="adm_list_cursos.php">Cursos</a>
                        </li>
                        <li>
                            <a href="adm_list_enquete.php">Enquete</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="adm_ger_user.php">
                        <i class="fa fa-user fa-2x"></i>
                        Gerenciar Usuario
                    </a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <i class="fa fa-users fa-2x"></i>
                        Gerenciar Grupos
                    </a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="adm_ger_infotec.php">INFOTEC</a>
                        </li>
                        <li>
                            <a href="adm_ger_fesec.php">FESEC</a>
                        </li>
                        <li>
                            <a href="adm_ger_silog.php">SILOG</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="adm_contato.php">
                        <i class="fa fa-paper-plane fa-2x"></i>
                        Contato
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg form-inline menu-bar ">
                <div class="container">

                    <button type="button" id="sidebarCollapse" class="btn btn-menu col-2 mr-1">
                        <i class="fas fa-expand-arrows-alt fa-2x"></i>
                    </button>
                    
                    <button class="btn col-2 mr-1 btn-menu"><a href="adm_area.php">Inicio</a></button>

                    <button class="btn col-2 mr-1 btn-menu"><a href="adm_list_votos.php">Listar Votos</a></button>

                    <button class="btn col-2 mr-1 btn-menu"><a href="adm_list_enquete.php">Listar Enquete</a></button>

                    <button class="btn col-2 mr-1 btn-menu"><a href="adm_ger_user.php">Gerenciar Usuário</a></button>

                    <button class="btn col-2 btn-menu"><a href="adm_ger_grupo.php">Gerenciar Grupos</a></button>
            </nav>