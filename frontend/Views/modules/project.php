<?php 
	
	$servidor = Url::ctrUrlServidor();
	$url = Url::ctrUrl();

	$item = "id";
	$valor= $rutas[2];

	$proyecto = ControladorProyectos::ctrMostrarProyecto($item,$valor);	

	echo'<section class="project" id="project">

			<div class="container">

			    <div class="row section-separator">

			        <div class="col-md-8 col-sm-12 justify-content-center wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInUp;">
			           
			            <div class="imagen">
			            	<img src="'.$servidor.$proyecto["imagen"].'" class="img-container" alt="">
			            </div>

			            <div class="description">
			               
			                <div class="justify-content-center tituloProyecto">
			                    '.$proyecto["titulo"].'
			                </div>

			                <p class="text-muted parrafo">'.$proyecto["descripcion"].'</p>

			            </div>

			        </div>

			        <div class="col-md-4 col-sm-12 details-row wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInUp;">
			    
			            <div class="tituloProyectoDetalles">
			                 '.$proyecto["titulo"].'
			            </div>

			            <h3>PROJECT DETAILS</h3>';

			            $item2 = "id";
						$valor2= $proyecto["id_cliente"];

						$cliente = ControladorProyectos::ctrMostrarCliente($item2,$valor2);	

					echo'<div class="row about-info">

							<ul class="info-project">
								<li>	
	                            	<div class="info-item">
		                            	<i class="fa fa-user icon"></i> 
		                            	<b>Name</b> <br><span class="text-muted data-project">'.$cliente["nombre"].'</span>
	                            	</div>
								</li>
								
								<li>
	                            	<div class="info-item"><i class="fa fa-calendar icon"></i><b>Created</b><br><span class="text-muted data-project">'.$proyecto["fecha_creacion"].'</span></div>
								</li>

								<li>
	                            	<div class="info-item"><i class="fa fa-link icon"></i><b>Live Demo</b> <br><a target="_blank" href="'.$proyecto["url_proyecto"].'"><span class="data-project">Ver proyecto</a></span></div>
								</li>

								<li>';
									if($proyecto["estado_proyecto"] == "In progress"){

		                        		echo'<div class="info-item"><i class="glyphicon glyphicon-time icon"></i><b>Status</b><br><span class="text-muted data-project">'.$proyecto["estado_proyecto"].'</span></div>';

		                        	}else if($proyecto["estado_proyecto"] == "Completed"){

		                        		echo'<div class="info-item"><i class="fa fa-check icon"></i><b>Status</b><br><span class="text-muted data-project">'.$proyecto["estado_proyecto"].'</span></div>';
		                        	}
	                           

	                        	
							echo'</li>

							</ul>

	                    </div>
			               			         
			            <div class="row social-profile">

							<div class="col-md-12 profile-caption">
	                             <div class=""><b>Social Profile:</b></div>	
	                        </div>

			            	<div class="col-md-12 profile-block">
	                             
								<ul class="social-icon">';
			    					$jsonRedesSociales = json_decode($proyecto["redes_sociales"],true);

			                        foreach ($jsonRedesSociales as $key => $value){

			                           echo '<li>
			                                    <a href="'.$value["url"].'" target="_blank">
			                                        <i class="fa '.$value["red"].' '.$value["estilo"].'" aria-hidden="true"></i>
			                                    </a>
			                                </li>';
			                        }
			                echo'</ul>

	                        </div>

			            </div>    
			
			        </div>   
			        
			    </div>

			</div>

		</section>';

 ?>