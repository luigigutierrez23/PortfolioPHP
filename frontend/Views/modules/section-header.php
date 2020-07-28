<?php 
		
	$servidor = Url::ctrUrlServidor();

	$url = Url::ctrUrl();

	$template = ControladorPlantilla::ctrEstiloPlantilla();	

	echo'<section class="home"  id="home">

			<div id="loader-wrapper" class="black-bg">
				<div id="loader"></div>
			</div>

			<div class="header-background">
		        <img class="img-fluid" src="'.$servidor.$template["background"].'">
		    </div>

			<div class="img-color-overlay">

				<div class="container">

					<div class="row section-separator vertical-middle-content home-padding">

						<div class="col-sm-8">

							<div class="info">

								<div class="saludo wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.1s; animation-name: fadeInUp;">
									
									<span class="background">
										<span class="text-1">Hola, soy</span>
										<span class="text-2">Soy</span>
									</span>
									
								</div>
								
								<h2 class="wow fadeInUp tituloPrincipal" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInUp;">

									<span class="text-1">'.$template["titulo_principal"].'</span>
									<span class="text-2">'.$template["titulo_secundario"].'</span>
								</h2>

									<ul class="infoContacto">';

										$jsonContacto = json_decode($template["info_contacto"],true);
									
										foreach ($jsonContacto as $key => $value){

										   echo '<li class="wow '.$value["animacion"].'" data-wow-duration="'.$value["duracion"].'" data-wow-delay="'.$value["delay"].'" style="'.$value["estilo"].'">
												   <a href="'.$value["href"].'" target="_blank">
												   	<i class="'.$value["icono"].' infoIcono"></i>
												   	'.$value["titulo"].'
												   </a>
										   		</li>';
										}

								echo'</ul>
									
									<ul class="redesSociales wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.7s; animation-name: fadeInUp;">';	

											$jsonRedesSociales = json_decode($template["redes_sociales"],true);

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

						<div class="col-sm-6 floating">

							<div class="hero-img wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.6s; animation-name: fadeInUp;">


							</div>

						</div>

					</div>

				</div>

			</div>

		</section>';

?>

<!-- 
								<div class="img-border">
 
										<img src="'.$servidor.$template["img_perfil"].'" alt="" class="img-fluid">													
								</div> -->

								<!-- <h4 class="wow fadeInUp tituloSecundario" data-wow-duration="0.8s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.3s; animation-name: fadeInUp;"></h4> -->