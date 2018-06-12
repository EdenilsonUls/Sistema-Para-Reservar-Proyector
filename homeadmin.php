<?php
include("php/conexion.php");
 include("php/funciones.php");
 session_start();
 if(!isset($_SESSION["admin_nombre"]) || $_SESSION["admin_nombre"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='loginadmin.php';</script>";
 }

?>

<!DOCTYPE html>
<html>
	<head>
		<title>administrador</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="estilos.css">
		<meta charset="utf-8">
		
		<link rel="icon" type="image/ico" href="img/ino.ico" />
		<script src="http://code.jquery.com/jquery-2.2.4.js"></script>
		<style type="text/css">
  .button {
    background:;
	color:black;
	display:inline-table;
	font-size:1em;
	margin:10px;
	 padding: 1px;
	text-align:center;
	height: 100px;
	text-decoration:none;
	box-shadow:10px 10px 10px #373c3c;
	 
   -moz-border-radius: 18px;
     border-radius: 18px;
background-color: transparent;
box-shadow: 1px 15px 44px rgba(0, 0, 0, 0.64);
    -moz-box-shadow: 1px 15px 44px rgba(0, 0, 0, 0.64);
    -webkit-box-shadow: 1px 15px 44px rgba(0, 0, 0, 0.64)
}
.button:hover {
      border-top-color: #cadce3;
   background: #cadce3;
   color: #121112;


   }

   .button:active {
   border-top-color: #d67e97;
   background: #d67e97;


   }

    
    



.button.large {
	width:93px;
	text-decoration: none;

cursor: pointer; 
}



 


#contenedor{
 float: right;
  width: 75%;
  padding: 25px;
  margin: 5px;
  background : #F5F5F5;
  height: auto;
border: 1px solid #1f5a92;
}

  .contenedorr{
 float: right;
 display:inline-table;
  width: 75%;
  padding: 20px;
  margin: 5px;
  background : #F5F5F5;
  height: auto;
  
   
  
  }

  .caja{
  width: 22%;
height:  50%;
padding: 5px 20px;
background: #F5F5F5;
margin: 5px;
padding: ; #margen interno
border: solid; color: black;
display: inline-block; 
float: left;
height: auto;
border: 1px solid #1f5a92;

}
footer{
	 width: 50%;
    bottom: 0;
    position: relative;
    border-radius: 2px;
  
   
}

 @media (max-width: 750px){
  
  .caja{
  	width: 100%; 
    margin: 0px;
    float: left;
  	}
 


 body{
 	margin: 0px;
 }

.button{
  width: 100%;
  margin:10px;
  display: inline-table;
    
}
.button.large {
	width:90px;
}

.contenedor{
	width: 100%; 
	
	
	
    
}

#contenedor{
	width: 100%; 
   margin: 0px;
    float: left;
  margin-top: 18px;
  
}

 
}

</style>
	</head>

<header class="header">
            <img src="img/INO.jpg" alt="logo" class="headerlogo ,img-circle"  >
            <div class="header__titles">
                <h3>INSTITUTO NACIONAL DE OLOCUILTA</h3>
                <h5>SISTEMA PARA RESERVAR PROYECTOR</h5>
                
                
            </div>
            <h4>bienvenid@ administrador: <?=$_SESSION["admin_nombre"]?></h4>

        </header>
        <?php include "php/menuadmin.php"; ?>
	 
		<h1></h1>
        

	<body>
	<section>
	

       <div class="caja">

		<a   href="" class="button white large" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal6">
		
		<img src="img/edit.png" width="50" height="" ><br>
		<p>ver equipo</p>
		</a>
    <?php include("modal/verpreoyectoresadmin.php"); ?>

		<a href="homeadmin.php" class="button white large">
		
		<img src= "img/consult.png"width="50" height="" ><br>
		<p>ver reservas</p>
		</a>

		<a href="" class="button white large" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal5">
		
		<img src= "img/consult.png"width="50" height="" ><br>
		<p>ver perfil</p>
		</a>
    <?php include("modal/perfiladmin.php"); ?>

		<a href="" class="button white large"  class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal7">
		
		<img src="img/edit.png" width="50" height="" ><br>
		<p>Hacer reserva</p>
		</a>
    <?php include("modal/reservaadmin.php"); ?>


    <a href="" class="button white large"  class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal8">
    
    <img src="img/edit.png" width="50" height="" ><br>
    <p>agregar alumnos</p>
    </a>
    <?php include("modal/registraralum.php"); ?>



		<a href="" class="button white large">
		
		<img src="img/eliminar.png" width="50" height="" ><br>
		<p>salir</p>
		</a>


		</div>

  <aside id="contenedor">

  	<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">RESERVAS REALIZADAS</h3>
  </div>
  <div class="panel-body">
    <div class="table-responsive">
 
        <?php include("verreservasadmin.php"); ?>
   
     </div>
    </div>
     </div>
    
				   

				
				 
  	
  </aside>




</section>

         <script src="bootstrap/js/jquery.js"></script>
         <script src="bootstrap/js/bootstrap.min.js"></script>
         <script src="js/validar_reserva.js"></script>
          <script src="js/valida_registro.js"></script>
 

 
</body>
</html>