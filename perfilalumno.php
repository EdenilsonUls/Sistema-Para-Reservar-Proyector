<?php

 
 include("php/conexion2.php");
 session_start();
 if(!isset($_SESSION["alumno_nombre"]) || $_SESSION["alumno_nombre"]==null){
    print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
 }

$conexion = crearConexionPDO();

$queryObtenerDatosUsuario = 'SELECT nombre, apellido, email,carnet, estado FROM alumno WHERE carnet = ?';

$datosUsuario = query($conexion, $queryObtenerDatosUsuario, [
    $_GET['alumno']
])[0];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="estilos.css">
        
        <link rel="icon" type="image/ico" href="img/ino.ico" />
        <script src="http://code.jquery.com/jquery-2.2.4.js"></script>
    
         <script src="bootstrap/js/jquery.js"></script>
         <script src="bootstrap/js/bootstrap.min.js"></script>
   
</head>
<body>
    <div class="container">
        <?php include 'php/verperfilalum.php' ?>
       
        <?php

        

        if ($_GET['alumno'] != $_SESSION['alumno_nombre']) {
            echo " <a href=\"perfil_usuario.php?alumno={$_SESSION['alumno_nombre']}\" class=\"btn btn-info margin-top\">Cambiar mi perfil</a>";
        }

        ?>
       
            </div>
        </div>
    </div>
</body>
</html>
