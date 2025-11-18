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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= baseUrl ?>css/styles.css" rel="stylesheet" />
        <!-- scripts jQuery for masks -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="https://unpkg.com/lucide@latest"></script>
        <style>
            .bg-image {
                height: 65vh;
                background: 
                    linear-gradient(rgba(0, 0, 0, 0.55), rgba(0, 0, 0, 0.55)),
                    url('<?= baseUrl ?>assets/img/estante_home.png');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
}
        </style>

        <script src="<?= baseUrl ?>js/scripts.js"></script>
    </head>
    <body id="container">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light sticky-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="<?= baseUrl ?>index.php"><img src="<?= baseUrl ?>assets/img/logo.png" alt="logo" style="width: 150px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="<?= baseUrl ?>forms/formLivro.php">Cadastrar livro</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="<?= baseUrl ?>forms/formReserva.php">Reserve</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="<?= baseUrl ?>includes/about.php">Sobre nós</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="<?= baseUrl ?>forms/formLogin.php">Login</a></li>
                    </ul>
                    
                </div>
            </div>
        </nav>
        <div class="container-fluid">