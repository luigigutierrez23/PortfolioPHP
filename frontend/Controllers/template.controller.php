<?php 

	class ControladorPlantilla
	{
		
		/**
		 * [plantilla Llamada a la plantilla]
		 * @return [type] [description]
		 */
		public function plantilla(){
			
			include "Views/template.php";
		}

		/**
		 * [ctrEstiloPlantilla Traemos los estilos dinamicos de la plantilla]
		 * @return [type] [description]
		 */
		public function ctrEstiloPlantilla(){

			$tabla = "template";

			$respuesta = ModeloPlantilla::mdlEstiloPlantilla($tabla);

			return $respuesta;
		}

		public function ctrEstiloAbout(){

			$tabla = "about";

			$respuesta = ModeloPlantilla::mdlEstiloAbout($tabla);

			return $respuesta;

		}

		public function ctrMostrarExperiencia(){

			$tabla = "experience";

			$respuesta = ModeloPlantilla::mdlMostrarExperiencia($tabla);

			return $respuesta;
		}

		public function ctrMostrarServicios(){

			$tabla = "services";

			$respuesta = ModeloPlantilla::mdlMostrarServicios($tabla);

			return $respuesta;
		}
	}
