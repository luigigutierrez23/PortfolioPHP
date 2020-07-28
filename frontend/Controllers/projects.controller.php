<?php 

	/**
	 * 
	 */
	class ControladorProyectos
	{
		public function ctrMostrarCategoriasProyectos(){

			$tabla = "projects_categories";

			$respuesta = ModeloProyectos::mdlMostrarCategoriasProyectos($tabla);

			return $respuesta;
		}	

		static public function ctrMostrarProyecto($item,$valor){

			$tabla = "projects";

			$respuesta = ModeloProyectos::mdlMostrarProyecto($item,$valor,$tabla);

			return $respuesta;
		}

		static public function ctrMostrarCliente($item,$valor){

			$tabla = "clients";

			$respuesta = ModeloProyectos::mdlMostrarCliente($item,$valor,$tabla);

			return $respuesta;
		}

	}

