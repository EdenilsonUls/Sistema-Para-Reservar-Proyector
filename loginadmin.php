<?php session_start(); ?>
<html>
	<head>
		<title>iniciar sesion</title>
		 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
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


	<?php include "php/navbar.php"; ?>


	<body>
		
	

	


	<section class="section">
		<article>

           <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">INICIAR SESION</h3>
  </div>
  <div class="panel-body">
    
		<form role="form" name="loginadmin" action="php/loginadmin.php" method="post">
		  <div class="form-group">
		    <label for="usernombre">usuario </label>
		    <input type="text" class="form-control" id="usernombre" name="usernombre" placeholder="Nombre de usuario" class="login username-field" required />
		  </div>
		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		   
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a" class="login password-field" required />
		  </div>

		  <button type="submit" class="button btn btn-primary btn-large "><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>Acceder</button>
		</form>

  </div>
</div>



        
		


		


		</article>

	</section>
	<br>
	<br>
    <br>
    <br>
    
     <hr>
    <footer>
    	<img class="footer "src="img/footer.png">
	 <h6><b> ADMINISTRACION ACADEMICA</h5></b> 
	 <h6><b>INSTITUTO NACIONAL DE OLOCUILTA</h6></b>
		
	</footer>

	     

	     <script src="bootstrap/js/bootstrap.js"></script>
         <script src="bootstrap/js/jquery.js"></script>
         <script src="bootstrap/js/bootstrap.min.js"></script>

		<script src="js/valida_login.js"></script>



	</body>
</html>