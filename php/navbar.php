<nav class="navbar navbar-default  navbar-inverse" role="navigation">
<div class="container-fluid">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-1">
      <span class="sr-only">menu</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

    <a class="navbar-brand" href=""><b>INORFA</b></a>
  </div>

   <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse " id="navbar-1">
    <ul class="nav navbar-nav">
      <?php if(!isset($_SESSION["alumno_nombre"])):?>
      
      
      <li><a href="./index.php">VOLVER</a></li>

    <?php else:?>

           
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
       

       

    <?php endif;?>
    </ul>

  </div>


  </div>


 

</nav>



