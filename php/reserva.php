<?php

if(!empty($_POST)){
	if(isset($_POST["nombre"]) &&isset($_POST["apellido"]) &&isset($_POST["carnet"]) &&isset($_POST["nombre_del_equipo"])&&isset($_POST["fecha_a_reservar"]) &&isset($_POST["hora"])){
		if($_POST["nombre"]!=""&& $_POST["apellido"]!=""&&$_POST["carnet"]!=""&$_POST["nombre_del_equipo"]!=""&&$_POST["fecha_a_reservar"]!=""&&$_POST["hora"]){
			include "conexion.php";
			
			$found=false;
			$sql1= "select * from reserva where nombre_del_equipo=\"$_POST[nombre_del_equipo]\" and hora=\"$_POST[hora]\" and fecha_a_reservar=\"$_POST[fecha_a_reservar]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert (\"ERROR!!! el proyector ya esta reservardo para ese fecha y hora.\");window.location='../home.php';</script>";
			}

			
			elseif ($query!=null) {
				
			
				$sql = "insert into reserva(nombre,apellido,carnet,nombre_del_equipo,fecha_a_reservar,hora,created_at) value (\"$_POST[nombre]\",\"$_POST[apellido]\",\"$_POST[carnet]\",\"$_POST[nombre_del_equipo]\",\"$_POST[fecha_a_reservar]\",\"$_POST[hora]\",NOW())";
			$query = $con->query($sql);
				print "<script>alert(\"reserva exitosa\");window.location='../home.php';</script>";
			}
		}
	}
}



?>