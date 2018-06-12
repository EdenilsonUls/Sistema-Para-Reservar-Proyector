<?php


if(!empty($_POST)){
	if(isset($_POST["usernombre"]) &&isset($_POST["password"])){
		if($_POST["usernombre"]!=""&&$_POST["password"]!=""){
			include "conexion.php";
			
			$alumno_nombre=null;
			$sql1= "select * from admin where (usernombre=\"$_POST[usernombre]\" or email=\"$_POST[email]\") and password=\"$_POST[password]\" ";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$admin_nombre=$r["nombre"];
				$admin_apellido=$r["apellido"];
				$admin_usernombre=$r["usernombre"];
				$admin_email=$r["email"];
				   break;
			}
			if($admin_nombre==null){
				print "<script>alert(\"usuario invalido.  \");window.location='../loginadmin.php';</script>";
			}else{
				session_start();
				$_SESSION["admin_nombre"]=$admin_nombre;
				$_SESSION["admin_apellido"]=$admin_apellido;
				$_SESSION["admin_usernombre"]=$admin_usernombre;
				$_SESSION["admin_email"]=$admin_email;
				
				print "<script>window.location='../homeadmin.php';</script>";				
			}
		}
	}
}



?>