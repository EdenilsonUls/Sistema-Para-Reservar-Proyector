<?php session_start(); 
include'conexion.php';

?>

<html>
	<head>
		<title>registro</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="estilos.css">
		<link rel="icon" type="image/ico" href="img/ino.ico" />
	</head>

    <header class="header">
            <img src="img/INO.jpg" alt="logo" class="headerlogo ,img-circle"  >
            <div class="header__titles">
                <h1>INSTITUTO NACIONAL DE OLOCUILTA</h1>
                <p>sistema para reservar proyector</p>
                
            </div>
        </header>



	<body>

		 
	<?php include "php/navbar.php"; ?>

	<section class="section">


		<h2>Registro</h2>

		<form role="form" name="registro" action="php/registro.php" method="post">
		  <div class="form-group">
		    <label for="nombre">Nombre</label>
		    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="escriba su nombre">
		  </div>
		  <div class="form-group">
		    <label for="apellido">apellido</label>
		    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="escriba su apellido">
		  </div>
		  <div class="form-group">
		    <label for="email">Correo Electronico</label>
		    <input type="email" class="form-control" id="email" name="email" placeholder="escriba su correo">
          </div>
        <div class="form-group">
		    <label for="carnet">carnet</label>
		    <input type="text" class="form-control" id="carnet" name="carnet" placeholder="escriba su carnet">
          </div>

		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
		  </div>
		  <div class="form-group">
		    <label for="confirm_password">Confirmar Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a">
		  </div>

		  <button type="submit" class="button btn btn-primary btn-large"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Registrar</button>
		</form>
		
		

	</section>

	
    
    <hr>
    <footer>
    	<img class="footer "src="img/footer.png">
	 <h6><b> ADMINISTRACION ACADEMICA</h6></b> 
	 <h6><b>INSTITUTO NACIONAL DE OLOCUILTA</h6></b>
		
	</footer>

		<script src="js/valida_registro.js"></script>
	</body>
</html>