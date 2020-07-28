<?php 

	$servidor = Url::ctrUrlServidor();

	$url = Url::ctrUrl();

	$services = ControladorPlantilla::ctrMostrarServicios();

	echo'<section class="service" id="services">

			<div class="container">

				<div class="row section-separator">

					<div class="col-sm-12 text-center section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInUp;">
						<h2 class="tittle-service">Servicios</h2>
					</div>';

					foreach ($services as $key => $value) {
						
						echo'<div class="col-md-4">
						
								<div class="service-item shadow-1 dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.3s; animation-name: fadeInUp;">';
									
									$jsonIcono = json_decode($value["icono"],true);									

									echo'<i class="'.$jsonIcono["icono"].' '.$jsonIcono["color-icono"].'"></i>';
						
									
								echo'<h3>'.$value["titulo"].'</h3>
									
									<p class="services-desc">
										'.$value["descripcion"].'
									</p>

								</div>
							</div>';

					}

				echo'</div>

			</div>

		</section>';

 ?>