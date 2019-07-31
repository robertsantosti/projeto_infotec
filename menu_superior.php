            <ul class="nav text-left fixed-top" style="background: rgb(0,0,0, 0.25);"><!--rgb(31,119,208, 0.5)-->
                    <li>
                    <?php
                        include ('verifica_login.php');
                    ?>
                    <p class="text-white text-center" style="width: 260px; padding-top: 10px;">
                        Olá, <b><?=$_SESSION['usuario']?></b> <a href="logout.php"><button class="btn btn-danger"><i class="fa fa-sign-out"></i></button></a>
                    </p>
                    </li>

                    <li style="margin-left: 60%;">
                        <img src="_img/logo.png" alt="" width="200px" height="70px">
                    </li>

                    <li>
                    <button type="button" class="navbar-toggle btn" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars"></i>
                    </button>
                    </li>
                </ul>
