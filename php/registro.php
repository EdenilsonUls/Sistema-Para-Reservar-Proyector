<?php

if(!empty($_POST)){
	if(isset($_POST["nombre"]) &&isset($_POST["apellido"]) &&isset($_POST["email"]) &&isset($_POST["carnet"])&&isset($_POST["password"]) &&isset($_POST["confirm_password"])){
		if($_POST["nombre"]!=""&& $_POST["apellido"]!=""&&$_POST["email"]!=""&$_POST["carnet"]!=""&&$_POST["password"]!=""&&$_POST["password"]==$_POST["confirm_password"]){
			include "conexion.php";
			
			$found=false;
			$sql1= "select * from alumno where email=\"$_POST[email]\" or carnet=\"$_POST[carnet]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"email o carnet ya estan registrados.\");window.location='../homeadmin.php';</script>";
			}
			$sql = "insert into alumno(nombre,apellido,email,carnet,password,created_at) value (\"$_POST[nombre]\",\"$_POST[apellido]\",\"$_POST[email]\",\"$_POST[carnet]\",\"$_POST[password]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Registro exitoso. \");window.location='../homeadmin.php';</script>";
			}
		}
	}
}



?>