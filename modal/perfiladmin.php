<!-- Modal -->
<div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <CENTER><h5 class="modal-title" id="myModalLabel">PERFIL DEL ADMINISTRADOR</h5>	</CENTER>
		  </div>
      <div class="modal-body">
         
         <div class="well">
         	<table class="table table-condensed">
 


    <tr class="warning"><p>Nombre:  <?php echo $_SESSION['admin_nombre'] ?></p></tr>
    <br>
     <tr class="danger"><p>Apellido: <?php echo $_SESSION['admin_apellido'] ?></p></tr>
      <br>
     <tr><p>usuario: <?php echo $_SESSION['admin_usernombre'] ?></p></tr>
      <br>
     <tr><p>Correo: <?php echo $_SESSION['admin_email'] ?></p></tr>
      <br>
     
    </table>
</div>
			 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
	    
      </div>
  </table>
    </div>
  </div>
</div>