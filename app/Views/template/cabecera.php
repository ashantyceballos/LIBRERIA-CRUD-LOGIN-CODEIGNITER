<<<<<<< HEAD
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería de Ashanty</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <img class="mx-auto d-block" src="./public/iconos/logo.png" alt="" width="250">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="<?=base_url('libreria')?>"> Libros </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('listar')?>">Editar libros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('crear')?>">Agregar libros</a>
                </li>
            </ul>         
        </div>
        <ul class="nav-item dropdown text-white">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Administrar
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="nav-link text-dark" href="#"><?php echo session('usuario'); ?><span class="sr-only">(current)</span></a>
                    <?php 
                        if (isset($autenticado)) {
                    ?>
                        <a class="nav-link text-dark" href="<?php echo base_url('/salir') ?>"> Cerrar sesión <span class="sr-only">(current)</span></a>
                    <?php    
                        }else{
                    ?>
                        <a class="nav-link text-dark" href="<?php echo base_url('/login') ?>"> Iniciar sesión <span class="sr-only">(current)</span></a>
                    <?php 
                        }
                    ?>
                    
                </div>
        </ul>   
        <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo base_url('/buscar')?>">
            <input class="form-control mr-sm-2" size="70" maxlength="90" name="search" type="search" placeholder="Buscar" aria-label="search">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Buscar</button>
        </form>
        </div>
    </nav>
    <br>
    <div class="container"> 
        <?php if(session('mensaje')){?>
            <div class="alert alert-danger" role="alert">
                <?php
                    echo session('mensaje');
                ?>
            </div>
        <?php
        }
=======
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librería de Ashanty</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Librería de Ashanty</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="<?=base_url('libreria')?>"> Libros </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('listar')?>">Editar libros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url('crear')?>">Agregar libros</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
            <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Buscar</button>
        </form>
        <ul class="nav-item dropdown mt-1 text-white">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Administrar
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Libros</a>
          <a class="dropdown-item" href="#">Iniciar sesión</a>
        </div>
      </ul>
    </div>
    </nav>
    <br>
    <div class="container"> 
        <?php if(session('mensaje')){?>
            <div class="alert alert-danger" role="alert">
                <?php
                    echo session('mensaje');
                ?>
            </div>
        <?php
        }
>>>>>>> ce9c975f288636695fca940c415aad62c308a078
        ?>