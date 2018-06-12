<?php


if(!empty($_POST)){
	if(isset($_POST["nombre"]) &&isset($_POST["password"])){
		if($_POST["nombre"]!=""&&$_POST["password"]!=""){
			include "conexion.php";
			
			$alumno_nombre=null;
			$sql1= "select * from alumno where (nombre=\"$_POST[nombre]\" or carnet=\"$_POST[nombre]\") and password=\"$_POST[password]\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$alumno_id=$r["id"];
				$alumno_nombre=$r["nombre"];
				$alumno_apellido=$r["apellido"];
				$alumno_residencia=$r["residencia"];
				$alumno_correo=$r["email"];
				$alumno_carnet=$r["carnet"];

				   break;
			}
			if($alumno_nombre==null){
				print "<script>alert(\"usuario invalido. \");window.location='../login.php';</script>";
			

			}else{
				session_start();
				$_SESSION["alumno_id"]=$alumno_id;
				$_SESSION["alumno_nombre"]=$alumno_nombre;
				$_SESSION["alumno_apellido"]=$alumno_apellido;
				$_SESSION["alumno_residencia"]=$alumno_residencia;
				$_SESSION["alumno_correo"]=$alumno_correo;
				$_SESSION["alumno_carnet"]=$alumno_carnet;
				print "<script>window.location='../home.php';</script>";				
			}
		}
	}
}



?>