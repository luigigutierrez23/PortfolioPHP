<?php 

	require_once"conexion.php";
	/**
	 * 
	 */
	class ModeloProyectos
	{
		static public function mdlMostrarCategoriasProyectos($tabla){

			$stmt = Conexion::conectar()->prepare("Select * from $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

			$stmt -> close();
		}

		static public function mdlMostrarProyecto($item,$valor,$tabla){

			if($item !=null){

				$stmt = Conexion::conectar()->prepare("Select * from $tabla where $item = :$item");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
				
				$stmt -> execute();

				return $stmt ->fetch();

			}else{

				$stmt = Conexion::conectar()->prepare("Select * from $tabla");

				$stmt -> execute();

				return $stmt -> fetchAll();

				$stmt -> close();

			}
		}

		static public function mdlMostrarCliente($item,$valor,$tabla){

			if($item !=null){

				$stmt = Conexion::conectar()->prepare("Select * from $tabla where $item = :$item");

				$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
				
				$stmt -> execute();

				return $stmt ->fetch();

			}else{

				$stmt = Conexion::conectar()->prepare("Select * from $tabla");

				$stmt -> execute();

				return $stmt -> fetchAll();

				$stmt -> close();

			}
		}
	}