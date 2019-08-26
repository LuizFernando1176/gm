<?php include_once './config.php'; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Sistema de Gerenciamento de Rede</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php urlSite(); ?>css/bootstrap.css">
        <link rel="stylesheet" href="<?php urlSite(); ?>css/estilo.css">

    </head>
    <body> 
        <nav class="navbar navbar-expand-md navbar-light bg-light box-shadow fixed-top py-3 ">
            <a class="navbar-brand" href="index.php"><img width="45%" height="45% "src="<?php urlSite(); ?>img/logo.svg"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto  ">
                    <li class="nav-item">
                        <a class="nav-link" href=""></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Cadastro
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php urlSite(); ?>usuarios">Chamados</a>
                            <a class="dropdown-item" href="<?php urlSite(); ?>usuarios/add.php">Usuarios</a>
                        </div>
                    </li>

                </ul>

                <button class="btn btn-outline-secondary my-2 my-sm-0 ml-md-4" type="submit"><span  data-feather="log-out" ></span>Sair</button>

            </div>
        </nav> 

       <script src="<?php urlSite(); ?>js/script.js" type="text/javascript"></script>
        