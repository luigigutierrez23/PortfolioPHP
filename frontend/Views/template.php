<!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">

 	<meta name="viewport" content="width=device-width, initial-scale = 1.0,minimum-scale=1.0,
 	maximum-scale=1.0,user-scalable=no">

 	<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 	tempor incididunt ut labore et dolore magna aliqua.">

 	<meta name="keyword" content="Lorem ipsum, dolor sit amet, consectetur adipisicing, elit, sed do eiusmod,
 	tempor incididunt, ut labore et, dolore magna aliqua.">

 	<title>Luigi Gutierrez | FullStack Developer</title>

				 
	<?php 
		
		$servidor = Url::ctrUrlServidor();

		$icono = ControladorPlantilla::ctrEstiloPlantilla();

		echo '<link rel="icon" href="'.$servidor.$icono["icono"].'">';

		/*=============================================
		=            MANTENER RUTA DEL PROYECTO       =
		=============================================*/
		
		$url = Url::ctrUrl();	
	 ?>
	
	<!--=====================================
	PLUGINS CSS
	======================================-->
	
 	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>Views/css/plugins/font-awesome.min.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>Views/css/plugins/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>Views/css/plugins/flexslider.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>Views/css/plugins/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>Views/css/plugins/animate.css">

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">

 	<!-- <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
 	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet"> -->

	<!--=====================================
	HOJAS DE ESTILO PERSONALIZADAS
	======================================-->
 	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>Views/css/template.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>Views/css/header.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>Views/css/section-header.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>Views/css/about.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>Views/css/experience.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>Views/css/services.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>Views/css/about-contact.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>Views/css/contact.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>Views/css/portfolio.css">
 	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>Views/css/under-construction.css">

	<!--=====================================
	PLUGINS JAVASCRIPT
	======================================-->

 	<script src="<?php echo $url; ?>Views/js/plugins/jquery.min.js"></script>
 	<script src="<?php echo $url; ?>Views/js/plugins/bootstrap.min.js"></script>
 	<script src="<?php echo $url; ?>Views/js/plugins/jquery.easing.js"></script>
 	<script src="<?php echo $url; ?>Views/js/plugins/jquery.scrollUp.js"></script>
 	<script src="<?php echo $url; ?>Views/js/plugins/jquery.flexslider.js"></script>
 	<script src="<?php echo $url; ?>Views/js/plugins/sweetalert.min.js"></script>
	<script src="<?php echo $url; ?>Views/js/plugins/mixitup.min.js"></script>
	<script src="<?php echo $url; ?>Views/js/plugins/moment.js"></script>
	<script src="<?php echo $url; ?>Views/js/plugins/moment-timezone-with-data.js"></script>

 </head>

	 <body class="dark-vertion black-bg">

	 	<?php 

	 		/*=============================================
	 		=            HEAD          					  =
	 		=============================================*/
	 		
	 		include "modules/header.php";

	 		/*=============================================
	 		=            CONTENIDO DINAMICO        		  =
	 		=============================================*/
	 		$rutas = array();

	 		$ruta = "";

	 		if(isset($_GET["url"]))
	 		{
	 			$rutas = explode("/", $_GET["url"]);

	 			if(!empty($rutas[2])){

		 			$item = "id";
		 			$valor = $rutas[2];

		 			/*=============================================
		 			=           URL'S AMIGABLES DE PROYECTOS 	  =
		 			=============================================*/
		 			$rutaProyecto = ControladorProyectos::ctrMostrarProyecto($item,$valor);
					
					if(is_array($rutaProyecto)){
						if($rutas[2] == $rutaProyecto["id"]){

							$ruta = $rutas[2];

						}
						
					}
	 			}
	 			
	 			
	 			/*=============================================
	 			=  		LISTA BLANCA DE URL'S AMIGABLES	 	  =
	 			=============================================*/
	 			if($ruta != null){
	 				$page ="portfolio";
	 				include "modules/project.php";

	 			}else if($rutas[0] == "about"){
	 				$page ="about";
	 				include "modules/about.php";
	 				include "modules/experince.php";

	 			}else if($rutas[0] == "services"){
					$page ="services";
	 				include "modules/services.php";

	 			}else if($rutas[0] == "portfolio"){

	 				include "modules/portfolio.php";

	 			}else if($rutas[0] == "contact"){

	 				include "modules/contact.php";	

	 			}else if($rutas[0] == "under-construction"){

	 				include "modules/under-construction.php";	

	 			}else{

	 				include "modules/error404.php";
	 			}
	 		}else
	 		{
	 			$page ="nada";
	 			include "modules/section-header.php";	
	 			include "modules/about.php";
		 		include "modules/experince.php";
		 		include "modules/services.php";
		 		include "modules/portfolio.php";
		 		include "modules/contact.php";	
	 		}

	 		include "modules/footer.php";


	 		/*=====  End of Section comment block  ======*/
	 		

	 	 ?>

	 	 <!-- <input type="hidden" value ="<?php echo $url ?>" id="rutaOculta"> -->
	 	<!--=====================================
		 JAVASCRIPT PERSONALIZADOS
		======================================-->
	 	<script src="<?php echo $url ?>Views/js/template.js"></script>
	 	<script src="<?php echo $url ?>Views/js/header.js"></script>
	 	<script src="<?php echo $url ?>Views/js/under-construction.js"></script>
	 	<script src="<?php echo $url ?>Views/js/contact.js"></script>

	 </body>

 </html>
