<?php

include 'conexion_bd.php';

$usuario = $_POST['usuarios'];
$contrasena = $_POST['contrasena'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' and contrasena='$contrasena'");

if(mysqli_num_rows($validar_login) > 0){
    header("location:../inicio.php");
    exit;
}else{
    echo '
        <script>
            alert("Usuario no existe, verifique los datos ingresados");
            window.location = "../index.php";       
        <script/>
    ';
    exit;
}

?>