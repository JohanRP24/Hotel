<!DOCTYPE html>
<html>
<head>
    <title>ESTRELLA DE MAR HOSPEDAJE</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./assets/css/style.css"/> 
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>

<body>

<main>

<div class="logo">
    <form action="php/login_usuarios_be.php" method="POST" class="logo">
    
        <img class="avatar" src="./assets/img/Logo estrella.jpeg">
    
  

    
        <!-- Usuario -->

        <label for ="username">Usuario</label>
        <input type="text" placeholder="Ingrese Usuario" class="input" name="usuarios"/>

        <!-- Contraseña -->
        <label for ="password">Contraseña</label>
        <input type="password" placeholder="Ingrese Contraseña" class="input" name="contrasena"/>
    
        <!-- Boton -->
        <input name="btningresar" class="btn" type="submit" value="Ingresar">

        <!-- <button>Ingresar</button> -->

        
    
    
    <!-- Informacion - Hr es una linea divisora -->
    <hr>
    <h3>Estrella del Mar</h3>
    
        </div>

    </form>

    </main>

    <script src="assets/js/script.js"></script>

    </body> 
    </html>