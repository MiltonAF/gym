<?php
require("assets/controller/connection.php");
session_start();
$vec;

if ($_SESSION['user']) {
    $vec = $_SESSION['user'];
}

?>


<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="./index.html">
                <figure class="mb-0"><img src="./assets/images/log.png" alt="" class="img-fluid"
                        style="max-width: 300px;"></figure>
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">Inicio</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./services.php">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./trainers.php">Entrenadores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./pricing.php">Precios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./contact.php">Contactos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link contact_btn" href=" <?php if ($_SESSION['user']) {
                            echo ("assets/controller/signoff.php");
                        } else {
                            echo ("./signin.php");
                        } ?> ">
                            <?php if ($_SESSION['user']) {
                                echo ($vec['name']);
                            } else {
                                echo ("Entrar");
                            } ?>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>