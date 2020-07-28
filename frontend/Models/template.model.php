<?php 
	
	require_once"conexion.php";


	/**
	 * 
	 */
	class ModeloPlantilla
	{
		
		/**
		 * [mdlEstiloPlantilla Traemos los estilos dinamicos de la plantilla]
		 * @param  [type] $tabla [description]
		 * @return [type]        [description]
		 */
		static public function mdlEstiloPlantilla($tabla){
			
			$stmt = Conexion::conectar()->prepare("Select * from $tabla");

			$stmt -> execute();

			return $stmt -> fetch();

			$stmt -> close();
		}

		static public function mdlEstiloAbout($tabla){

			$stmt = Conexion::conectar()->prepare("Select * from $tabla");

			$stmt -> execute();

			return $stmt -> fetch();

			$stmt -> close();
		}

		static public function mdlMostrarExperiencia($tabla){

			$stmt = Conexion::conectar()->prepare("Select * from $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

			$stmt -> close();
		}

		static public function mdlMostrarServicios($tabla){

			$stmt = Conexion::conectar()->prepare("Select * from $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

			$stmt -> close();
		}
	}
