<?php
//para los caracteres especiales del idioma
@header("Content-Type: text/html;charset=iso-8859-1");
	/*
	* para conectar
	*/
	class Conexion extends mysqli
	{

		public function __construct()
		{
			parent::__construct('localhost','root','pasitofino','myapp');
			$this->query("SET NAMES 'utf-8';");
			$this->connect_errno ? die("Error con la conexión") : $x = 'Conectado';
			
			unset($x);
		}

		//Para cerrar la sesión
		public function cerrar(){
			$this->Conexion->close();
		}

		//recorre las filas que retorna una consulta
		public function recorrer($y){

			return mysqli_fetch_array($y);

		}

		//número de filas de la consulta
		public function rows($y){

			return mysqli_num_rows($y);

		}
	
	//para guardar en cualquier tabla, cualquier valor
	public function guardar($tabla, $campos, $valores){
			try {
					//guardar
					$sql = "INSERT INTO $tabla($campos) values($valores);";
				
					//ejecuta la consulta si guarda retorna 1 si no 0
					$resultado = $this->query($sql);
					
					#devuelve 1 si funciona, 0 sino
					return $resultado;

				} catch (Exception $e) {
					//si no se guarda
					echo '<script>alert("Existe un problema,\nLos datos NO se Guardaron. por: " + '.$e->getMessage().');</script>';
				}
			
	}

	
	//para modificar en cualquier tabla, cualquier valor
	public function modificar($tabla, $valores, $condicion, $url){
			//modificar
			try {
					$sql = "UPDATE $tabla SET $valores WHERE $condicion;";
				
					//ejecuta la consulta si guarda retorna 1 si no 0
					$resultado = $this->query($sql);
					
					#devuelve 1 si funciona, 0 sino
					return $resultado;

				} catch (Exception $e) {
					//si no se modifica
					echo '<script>alert("Existe un problema,\nLos datos NO se modificaron. por: " + '.$e->getMessage().');</script>';
				}
	}

	//para modificar en cualquier tabla, cualquier valor
		public function modificarEstado($tabla, $valores, $condicion){
			//modificar
			try {
					$sql = "UPDATE $tabla SET $valores WHERE $condicion;";
				
					//ejecuta la consulta si guarda retorna 1 si no 0
					return $resultado = $this->query($sql);

				} catch (Exception $e) {
					//si no se modifica
					echo '<script>alert("Existe un problema,\nLos datos NO se modificaron. por: " + '.$e->getMessage().');</script>';
				}
		}
	
	//para borrar en cualquier tabla, cualquier valor
	public function borrar($tabla, $condicion){
			//modificar
		try {
				$sql = "DELETE FROM $tabla WHERE $condicion;";
				//Se ejecuta si borra el registro retorna 1 si no 0
				$resultado = $this->query($sql);

				#devuelve 1 si funciona, 0 sino
				return $resultado;		

			} catch (Exception $e) {
				//si no se modifica
				echo '<script>alert("Exrror,\nLos datos NO se borraron. por: " + '.$e->getMessage().');</script>';
			}
	}

	
	//para consultarTodo de cualquier tabla
	public function consultarTodo($campos, $tabla){
		//consultarTodo
		try {
			//consulta deseada
			$sql = "SELECT $campos FROM $tabla;";

			//retornar $sql
			return $sql;

		} catch (Exception $e) {
				//si no se asigan el valor de $sql
				echo '<script>alert("Existe un problema con la función consultarTodo,\nPor: " + '.$e->getMessage().');</script>';
		}

	}

	//para una consultaEspecifica de cualquier tabla, cualquier valor
	public function consultaEspecifica($campos, $tabla, $condicion){
		//consultaEspecifica
		try {
			//consulta deseada
			$sql = "SELECT $campos FROM $tabla WHERE $condicion;";

			//retornar $sql
			return $sql;

		} catch (Exception $e) {
			//si no se asigan el valor de $sql
			echo '<script>alert("Existe un problema con la función consultaEspecificada,\nPor: " + '.$e->getMessage().');</script>';
		}
	}

	//para generarLista de cualquier tabla, cualquier valor
	public function generarLista($idCampo, $valorMostrar, $tabla, $claseControl, $idControl, $nombreControl){
		//generarLista
		try {
			$sql = $this->query("SELECT $idCampo, $valorMostrar FROM $tabla;");

			if ($this->rows($sql) > 0) {
				echo 	'<select name="'.$nombreControl.'" class="'.$claseControl.'" id="'.$idControl.'" >';

				while ($consulta = $this->recorrer($sql)) {
								echo '<option value="'.$consulta[$idCampo].'">'.$consulta[$valorMostrar].'</option>';
				}
					echo 	'</select>';
			} else {
				echo '<script>
						alert("Lo sentimos,\nExiste un problema con la función generarLista");	
					 </script>';
				echo "NO HAY DATOS...";
			}
		} catch (Exception $e) {
			echo 	'<script>
						alert("Lo sentimos,\nExiste un problema con la función generarLista,\nPor: " + '.$e->getMessage().');	
				     </script>';
		}	
				
	}

	//para generarListaEspecifica convalor determinado
	public function generarListaEspecifica($idCampo, $valorMostrar, $tabla, $valorCondicion, $claseControl, $idControl, $nombreControl){
		//generarLista
		try {
			$sql = $this->query("SELECT $idCampo, $valorMostrar FROM $tabla ORDER BY $valorMostrar;");

			if ($this->rows($sql) > 0) {
				echo 	'<select name="'.$nombreControl.'" class="'.$claseControl.'" id="'.$idControl.'" >';
				echo '<option value="'.$this->verValor($idCampo, $tabla, $idCampo, $valorCondicion).'">'.$this->verValor($valorMostrar, $tabla, $idCampo, $valorCondicion).'</option>';
		
				while ($consulta = $this->recorrer($sql)) {
								echo '<option value="'.$consulta[$idCampo].'">'.$consulta[$valorMostrar].'</option>';
				}
				echo 	'</select>';
			} else {
				echo '<script>
						alert("Lo sentimos,\nExiste un problema con la función generarLista");	
				     </script>';
			}
		} catch (Exception $e) {
			echo 	'<script>
							alert("Lo sentimos,\nExiste un problema con la función generarLista,\nPor: " + '.$e->getMessage().');	
					     </script>';
		}	
				
	}

	
	//para generarText de cualquier tabla, cualquier valor
	public function generarText($valorMostrar, $tabla, $campoCondicion, $valorCondicion){
		//generarText
		try {
			$sql = $this->query("SELECT $valorMostrar FROM $tabla WHERE $campoCondicion = $valorCondicion;");

			if ($this->rows($sql) > 0) {
				while ($consulta = $this->recorrer($sql)) {
					echo '<input type="text" value="'.$consulta[$valorMostrar].'" name="txt'.$campoCondicion.'" readonly = "true">';
				}
			} else {
				echo '<script>
						alert("Lo sentimos,\nExiste un problema con la función generarText");	
				     </script>';
			}
		} catch (Exception $e) {
			echo '<script>
						alert("Lo sentimos,\nExiste un problema con la función generarText,\nPor: " + '.$e->getMessage().');	
			     </script>';
		}
	}






	//para mostrarValor de cualquier tabla, cualquier valor
	public function mostrarValor($valorMostrar, $tabla, $campoCondicion, $valorCondicion){
		//generarText
		try {
			$sql = $this->query("SELECT $valorMostrar FROM $tabla WHERE $campoCondicion = $valorCondicion;");

			if ($this->rows($sql) > 0) {
				while ($consulta = $this->recorrer($sql)) {
					echo $consulta[$valorMostrar];
				}
			} else {
				echo '<script>
						alert("Lo sentimos,\nExiste un problema con la función mostrarValor");	
				     </script>';
			}
		} catch (Exception $e) {
			echo '<script>
						alert("Lo sentimos,\nExiste un problema con la función mostrarValor,\nPor: " + '.$e->getMessage().');	
			     </script>';
		}
	}


	//para mostrarValor de cualquier tabla, cualquier valor
	public function verValor($valorMostrar, $tabla, $campoCondicion, $valorCondicion){
		//iniciar resultado
		$resultado = "";
		try {
			$sql = $this->query("SELECT $valorMostrar FROM $tabla WHERE $campoCondicion = $valorCondicion;");

			if ($this->rows($sql) > 0) {
				while ($consulta = $this->recorrer($sql)) {
						$resultado = $consulta[$valorMostrar];
				}
			} else {
				echo '<script>
						alert("Lo sentimos,\nExiste un problema con la función verValor");	
				     </script>';
			}
		} catch (Exception $e) {
				echo '<script>
						alert("Lo sentimos,\nExiste un problema con la función verValor,\nPor: " + '.$e->getMessage().');	
				     </script>';
		}

		return $resultado;
	}

	}
?>