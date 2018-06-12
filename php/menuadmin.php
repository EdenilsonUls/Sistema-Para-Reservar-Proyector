<nav id="cabecera-principal-estudiante" class="navbar navbar-default navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Navegaci&oacute;n</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="" title="Ir Al Inicio"><span class="glyphicon glyphicon-home"></span> Inicio</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" title="Guardar Registros" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-save"></span> Editar <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="guardar/guardar-departamento.php" title="Ver Registros"><span class="glyphicon glyphicon-globe"></span> Departamento</a></li>      
            <li><a href="guardar/guardar-empleado.php" title="Ver Registros"><span class="glyphicon glyphicon-briefcase"></span> Empleado</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" title="Consultar Registros" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-eye-open"></span> Consultar <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="consultar/ver-departamento.php" title="Ver Registros"><span class="glyphicon glyphicon-globe"></span> Departamento</a></li>      
            <li><a href="consultar/ver_empleado.php" title="Ver Registros"><span class="glyphicon glyphicon-briefcase"></span> Empleado</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" title="Usuario En L&iacute;nea" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span id="btn-secundario" class="glyphicon glyphicon-user"></span> Usuario <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="php/logoutadm.php" title="Salir del Sistema" onclick="return confirm('Confirmar: &iquest;Est&aacute; seguro que desea salir del Sistema?')"><span class="glyphicon glyphicon glyphicon-share"></span> Salir</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>