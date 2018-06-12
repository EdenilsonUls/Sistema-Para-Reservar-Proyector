
<div class="modal fade" id="myModal7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    
      <div class="modal-body">
        
        <div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">FORMULARIO DE RESERVA</h3>
  </div>
  <div class="panel-body">
    <div class="table-responsive">
 
      <form role="form" name="reserva" action="php/reservaadmin.php" class="form-form-horizontal" method="post"  id="reserva">
      <div class="form-group">
        <label for="nombre" class="col-sm-2 control-label">Nombre:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="escriba su nombre">
      </div>
      </div>

      <div class="form-group">
        <label for="apellido" class="col-sm-2 control-label">Apellido:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="escriba su apellido">
      </div>
      </div>

      
        <div class="form-group">
        <label for="carnet" class="col-sm-2 control-label">Carnet:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="carnet" name="carnet" placeholder="escriba su carnet">
          </div>
          </div>

          

        <div class="form-group">
          <label class="col-sm-2 control-label">  Proyectores:</label>
          <div class="col-sm-10">
          <select class="form-control" id="nombre_del_equipo" name="nombre_del_equipo" >
           <option>proyector1</option>
           <option>proyector2</option>
           <option>proyector3</option>
           <option>proyector4</option>
          </select>
          
         </div>
      </div>

          <div class="form-group">
        <label for="fecha_a_reservar" class="col-sm-2 control-label">Fecha:</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="fecha_a_reservar" name="fecha_a_reservar" placeholder="a&ntilde;o/mes/dia">
          

          </div>
          </div>
       

          <div class="form-group">
          <label class="col-sm-2 control-label">Hora:</label>
          <div class="col-sm-10">
          <select class="form-control" id="hora" name="hora" >
           <option>7:00am - 8:45am</option>
           <option>9:00am - 10:45am</option>
           <option>11:00am - 12:00pm</option>
           <option>1:00pm - 2:45pm</option>
           <option>3:00pm - 4:30pm</option>
          </select>
        </div>
        </div>

        
          
    
     </div>
    </div>
     </div>
   
     

       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
     <button type="submit" class="button1 btn btn-primary btn-large"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>RESERVAR</button>
      </form>
   
      </div>
  </table>
    </div>
  </div>
</div>