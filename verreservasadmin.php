<?php

 include('php/conectandopdo.php');
    $connection = conexion();



include("php/paginacion.php");


$pagination = new paginacion($connection);
$select="SELECT id, nombre,apellido,carnet,nombre_del_equipo,fecha_a_reservar,hora, estado FROM reserva where estado = 1";

$search = null;
if(isset($_REQUEST["search"]) && $_REQUEST["search"] != "")
{
$search = htmlspecialchars($_REQUEST["search"]);
$pagination->param = "&search=$search";
$pagination->rowCount("$select AND  nombre LIKE '%$search%' order by nombre");
$pagination->config(3, 15);
$sql = "$select AND nombre LIKE '%$search%' LIMIT $pagination->start_row, $pagination->max_rows";
$query = $connection->prepare($sql);
$query->execute();
$model = array();
    while($rows = $query->fetch())
    {
        $model[] = $rows;
    }
}
else
{
    $pagination->rowCount($select);
    $pagination->config(4, 4);
    $sql = "$select order by nombre LIMIT $pagination->start_row, $pagination->max_rows";
    $query = $connection->prepare($sql);
    $query->execute();
    $model = array();

    while($rows = $query->fetch())
    {
        $model[] = $rows;
    }
}
if ($pagination->rowCount( $select." and nombre LIKE '%$search%'")>0 || $query->rowCount($sql)>0){
?>

                                <center><table  class="form-group"><tr>

                                    <td><form method="POST"   action="<?php echo $_SERVER["PHP_SELF"] ?>">
                               <div>
                                <td><input type="text" name="search" class="form-control"   placeholder="Buscar por nombre"></td>
                               <td>&nbsp;<input type="submit"  value="BUSCAR" class="btn btn-primary"></td>
                                </div></form></td>
                          </form></tr>
                          </table></center>
<table class='table table-striped table-hover  form-group responsive' >
    <tr class="success">
        <th>ID</th>
        <th>NOMBRE</th>
         <th>APELLIDO</th>
          <th>CARNET</th>
           <th>PROYECTOR</th>
           <th>FECHA </th>
           <th>HORA</th>
      <th style="text-align:center;"><h3><span class="glyphicon glyphicon-cog" title="Operaciones"></span></h3></th>

      

    </tr>
    <?php
    foreach($model as $row)
    {
        //mensaje para verificar si realmente desea borrar o no
                                $confirmar = "return confirm('Confirmar: &iquest;Est&aacute; Seguro Que Desea Eliminar El Registro?')";
                                $url = "homeadmin.php";
                                $variables = "campo=id&valorCampo=".$row['id']."&tabla=reserva&url=".$url;

                                echo "<tr>";
                                echo "<td>".$row['id']."</td>";
                                echo "<td>".$row['nombre']."</td>";
                                echo "<td>".$row['apellido']."</td>";
                                echo "<td>".$row['carnet']."</td>";
                                echo "<td>".$row['nombre_del_equipo']."</td>";
                                echo "<td>".$row['fecha_a_reservar']."</td>";
                                echo "<td>".$row['hora']."</td>";
                                  
                                echo '<td width=20% style="text-align:center;">
                                       
                                         <a class="btn btn-danger" href="borrarregistro.php?'.$variables.'" title="Borrar Registro" onclick="'.$confirmar.'"><span class="glyphicon glyphicon-remove-sign"></span> </a>
                                </td>';   
        }
    }elseif(isset($_POST["search"]) && $pagination->rowCount( $select." and nombre LIKE '%$search%'")==0) {
        # no Hay datos
            echo '<table  class="form-group"><tr>
                        <td><form method="POST" action="'.$_SERVER["PHP_SELF"].'">
                            <div>
                               <td> &nbsp;<input type="submit"  value="REALIZAR OTRA B&Uacute;SQUEDA" class="btn btn-primary"></td>
                            </div></td>
                          </form></tr>
                    </table>';
            echo '<div class="alert alert-info" role="alert"><strong>&iexcl;Vaya!</strong> No Hay Resultados De B&uacute;squeda...</div>';
    } else {
        echo '<div class="alert alert-info" role="alert"><strong>&iexcl;Vaya!</strong> No Hay Datos Registrados...</div>';
        }
    ?>
</table>
        

<?php
$pagination->pages("btn");
?>

