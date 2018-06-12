
   <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <CENTER><h5 class="modal-title" id="myModalLabel">ACTUALIZAR PERFIL</h5> </CENTER>
      </div>
      <div class="modal-body">
         
         <div class="well">
           <form role="form" name="actualizarperfil" action="" method="post"  id="actualizarperfil">
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control"  name="nombre" value=" <?php echo $_SESSION['alumno_nombre']?>" placeholder="escriba su nombre">
      </div>
      <div class="form-group">
        <label for="apellido">apellido</label>
        <input type="text" class="form-control"  name="apellido" value=" <?php echo $_SESSION['alumno_apellido']?>" placeholder="escriba su apellido">
      </div>

      <div class="form-group">
        <label for="direccion">direccion</label>
        <input type="text" class="form-control"  name="direccion" value=" <?php echo $_SESSION['alumno_residencia']?>" placeholder="escriba su direccion">
      </div>

      <div class="form-group">
        <label for="email">Correo Electronico</label>
        <input type="email" class="form-control"  name="email" value=" <?php echo $_SESSION['alumno_correo']?>" placeholder="escriba su correo">
          </div>

          <div class="form-group">
        <label for="password">nueva Contrase&ntilde;a</label>
        <input type="password" class="form-control" id="password" name="password" value=" <?php echo $_SESSION['alumno_carnet']?>" placeholder="Contrase&ntilde;a">
      </div>

      <div class="form-group">
        <label for="confirm_password">Confirmar Contrase&ntilde;a</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a">
      </div>
        
</div>
</form>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary" id="actualizar_datos3">actualizar perfil</button>
      </div>
  </table>
    </div>
  </div>
</div>


 
