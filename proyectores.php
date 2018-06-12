
	<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">PROYECTORES DISPONIBLES</h3>
  </div>
  <div class="panel-body">
    <div class="table-responsive">
 
		<center><table  class="table table-striped table-bordered "><tr class="success"><th>N°<th>NOMBRE <th>MARCA<th>ESTADO</tr>
  
   <?php
   ////////////Consulta de los datos  de la tabla proyector/////////////////////////////////////

function mostrarDatos ($resultados) {

if ($resultados !=NULL) {

echo "<tr><td> ".$resultados['idproyector']."";

echo "<td> ".$resultados['nombre']."";

echo "<td> ".$resultados['marca']."";

echo "<td> ".$resultados['condicion']."";

   }

}


$tildes = $con->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente

$result = mysqli_query($con, "SELECT * FROM proyector");

while ($fila = mysqli_fetch_array($result)){

mostrarDatos($fila);

}

mysqli_free_result($result);

mysqli_close($con);

?>
 </table>
     </div>
    </div>
     </div>


