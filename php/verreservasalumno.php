<?php
 include("php/conexion.php");
 include("php/funciones.php");
 session_start();
 if(!isset($_SESSION["alumno_nombre"]) || $_SESSION["alumno_nombre"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
 }

 

?>
<!DOCTYPE html>
<html>
	<head>
		<title>HOME </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../estilos.css">
		<meta charset="utf8">
		<link rel="icon" type="image/ico" href="../img/ino.ico" />
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
  height: auto;}

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
border: solid; 
display: inline-block; 
float: left;
height: auto;

}
footer{
	 width: 50%;
    bottom: 0;
    position: relative;
    border-radius: 2px;
  
   
}

 @media (max-width: 475px){
  
  .caja{
  	width: 100%; 
    margin: 0px;
    float: left;
  	
   
  }
 
.button{
  width: 150px;
  margin:10px;
  display: inline-table;
    
}
.button.large {
	width:90px;
}

.contenedor{
	width: 100%; 
	margin: 1px;
	
	
    
}

#contenedor{
	width: 100%; 
    margin: 5px;

  
  
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
            <h4 >Bienvenid@ <?=$_SESSION["alumno_nombre"]?></h4>

        </header>
        <?php include "php/menualumno.php"; ?>
        

	<body>
	<section>
	

     <div class="caja">

		<a   id="hacerreserva" onclick="function(); " href="" class="button white large">
		
		<img src="img/agregar.png" width="50" height="" ><br>
		<p>hacer reserva</p>
		</a>

		<a id= onclick="function(); " href="" class="button white large">
		
		<img src= "img/consult.png"width="50" height="" ><br>
		<p>ver reservas</p>
		</a>


		<a  id="perfil" onclick="function(); " href="" class="button white large">
		
		<img src= "img/consult.png"width="50" height="" ><br>
		<p>ver perfil</p>
		</a>

		<a href="" class="button white large">
		
		<img src="img/edit.png" width="50" height="" ><br>
		<p>editar perfil</p>
		</a>

		<a href="" class="button white large">
		
		<img src="img/edit.png" width="50" height="" ><br>
		<p>cambiar contrase&ntilde;a</p>
		</a>

		<a href="php/logout.php" class="button white large">
		
		<img src="img/eliminar.png" width="50" height="" ><br>
		<p>salir</p>
		</a>


       
		</div>
	</section>





    <aside  id="contenedor">
    	
    
    	<?php include("php/verreservasalum.php"); ?>

	</aside>


    
 
     
         <script src="../bootstrap/js/jquery.js"></script>
         <script src="../bootstrap/js/bootstrap.min.js"></script>
         <script src="../js/funciones.js"></script>
	</body>


 </html>