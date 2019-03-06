<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Herbolaria</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    <!-- FONT AWESOEM -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  </head>
  <body>

    <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="index.php">Herbolaria</a>
            <ul>
                <li><a href="#">Inicio</a></li>

                <li><a href="#">Categorias</a>

                <div>

                    <ul>
                        <li class="titulo"><a href="">Tamaño</a></li>
                        <li><a href="">Arboles</a></li>
                        <li><a href="">Arbustos</a></li>
                        <li><a href="">Hierbas</a></li>
                    </ul>


                    <ul>
                        <li class="titulo"><a href="">Utilidad</a></li>
                        <li><a href="">alimenticias</a></li>
                        <li><a href="">Medicinales</a></li>
                        <li><a href="">Ornamentarias</a></li>
                    </ul>

                </div>

                </li>

                <li><a href="#">Perfil</a>

                <div>

                    <ul>
                        <li><a href="IndexAdmin.php">Modificar Cuenta</a></li>
                        <li><a href="">cerrar sesion</a></li>
                    </ul>

                </div>
                </li>
                <li><a href="#">Plantas+</a>
                <div>
                    
                    <ul>
                        <li><a href="">Mis Plantas</a></li>
                        <li><a href="">Agregar planta</a></li>
                    </ul>

                </li>
                </div>
            </ul>
            <form id="buscador" name="buscador" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>"> 
                <input id="buscar" name="buscar" type="search" placeholder="Buscar aquí..." autofocus >
                <input type="submit" name="buscador" class="boton peque aceptar" value="buscar">
            </form>
    </nav>
