<?php require("config.php");  ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Index - Onde sua próxima história irá começar</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= baseUrl ?>css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="<?= baseUrl ?>index.php"><img src="<?= baseUrl ?>assets/img/logo.png" alt="logo" style="width: 150px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="<?= baseUrl ?>forms/formReserva.php">Reserve</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="<?= baseUrl ?>includes/about.php">Sobre nós</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="<?= baseUrl ?>forms/formLogin.php">Login</a></li>
                    </ul>
                    
                </div>
            </div>
        </nav>