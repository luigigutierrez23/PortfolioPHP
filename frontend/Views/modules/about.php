<?php 

	$servidor = Url::ctrUrlServidor();

	$url = Url::ctrUrl();

	$about = ControladorPlantilla::ctrEstiloAbout();

	$page = "about";

echo'<section class="about black-bg" id="about">

		<div class="container">

			<div class="row section-separator">

				<div class="col-md-6">

					<div class="about-img">
						
						<img src="'.$servidor.$about["imagen"].'" class="imagen img-fluid">

					</div>

				</div>

				<div class="col-md-6">

					<div class="about-info">

						<h2 class=" titulo">'.$about["titulo"].'</h2>
						
						<p class="descripcion text-muted">'.$about["descripcion"].'</p>

						<div class="skills">
							
								<ul class="listaSkills">';

									$jsonSkills = json_decode( $about["skills"],true);

									foreach ($jsonSkills as $key => $value){

										echo'<li><span>'.$value["skill"].'</span></li>';
										
									}

							echo'</ul>

						</div>

						<a href="https://drive.google.com/open?id=10RylkoyL80EVrINPDjYOgI2w8VouLKlN" target="_blank" class="btnDefault btnDescargarCV">Descargar CV<i class="fa fa-download"></i></a>

					</div>

				</div>

			</div>

		</div>

	</section>


	 <section class="Skill" id="Skill">

		<div class="home-v-img">

			<div class="container">

				<div class="row section-separator">

					<div class="section-title text-center col-sm-12">
						<!--<h2>Skills</h2>-->
					</div>

					<div class="col-md-6 col-sm-12">

						<div class="mh-skills-inner">

							<div class="mh-professional-skill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.3s; animation-name: fadeInUp;">

								<h3>Habilidades Técnicas</h3>

								<div class="each-skills">';

									foreach ($jsonSkills as $key => $value){
										
										echo'

												<div class="candidatos">

														<div class="parcial">

															<div class="info">
																<div class="name">'.$value["skill"].'</div>
																<div class="porcentaje-num">'.$value["porcentaje"].'%</div>
															</div>

															<div class="progressBar">
																<div class="porcentaje" style="width: '.$value["porcentaje"].'%;"></div>
															</div>

														</div>

												</div>';
									}
									
									

							echo'</div>

							</div>

						</div>

					</div>

					<div class="col-md-6 col-sm-12">

						<div class="mh-professional-skills wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.5s; animation-name: fadeInUp;">

							<h3>Habilidades profesionales</h3>

							<ul class="mh-professional-progress">

								<li>
									<div class="mh-progress mh-progress-circle active" data-progress=10 style="position: relative;">

										<svg viewBox="0 0 100 100">

											<path d="M 50,50 m 0,-47.5 a 47.5,47.5 0 1 1 0,95 a 47.5,47.5 0 1 1 0,-95" stroke="#eee" stroke-width="5" fill-opacity="0"></path>

											<path d="M 50,50 m 0,-47.5 a 47.5,47.5 0 1 1 0,95 a 47.5,47.5 0 1 1 0,-95" stroke="#555" stroke-width="5" fill-opacity="0" style="stroke-dasharray: 298.493px, 298.493px; stroke-dashoffset: 14.9247px;"></path>

										</svg>

										<p style="position: absolute; top: 50%; left: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(85, 85, 85);" class="progressbar-text">95%</p>

									</div>
									
									<div class="pr-skill-name">Comunicación</div>
								</li>

								<li>
									<div class="mh-progress mh-progress-circle active" data-progress="80" style="position: relative;">

										<svg viewBox="0 0 100 100">

											<path d="M 50,50 m 0,-47.5 a 47.5,47.5 0 1 1 0,95 a 47.5,47.5 0 1 1 0,-95" stroke="#eee" stroke-width="5" fill-opacity="0"></path>

											<path d="M 50,50 m 0,-47.5 a 47.5,47.5 0 1 1 0,95 a 47.5,47.5 0 1 1 0,-95" stroke="#555" stroke-width="5" fill-opacity="0" style="stroke-dasharray: 298.493px, 298.493px; stroke-dashoffset: 40.322px;"></path>

										</svg>

										<p style="position: absolute; top: 50%; left: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(85, 85, 85);" class="progressbar-text">80%</p>

									</div> 
									
									<div class="pr-skill-name">Trabajo en equipo</div>
								</li>

								<li>
									<div class="mh-progress mh-progress-circle active" data-progress="60" style="position: relative;">

										<svg viewBox="0 0 100 100">

											<path d="M 50,50 m 0,-47.5 a 47.5,47.5 0 1 1 0,95 a 47.5,47.5 0 1 1 0,-95" stroke="#eee" stroke-width="5" fill-opacity="0"></path>

											<path d="M 50,50 m 0,-47.5 a 47.5,47.5 0 1 1 0,95 a 47.5,47.5 0 1 1 0,-95" stroke="#555" stroke-width="5" fill-opacity="0" style="stroke-dasharray: 298.493px, 298.493px; stroke-dashoffset: 111.789px;"></path>

										</svg>

										<p style="position: absolute; top: 50%; left: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(85, 85, 85);" class="progressbar-text">60%</p>

									</div>

									<div class="pr-skill-name">Gestion de proyectos</div>
								</li> 

								<li>
									<div class="mh-progress mh-progress-circle active" data-progress="70" style="position: relative;">

										<svg viewBox="0 0 100 100">
											
											<path d="M 50,50 m 0,-47.5 a 47.5,47.5 0 1 1 0,95 a 47.5,47.5 0 1 1 0,-95" stroke="#eee" stroke-width="5" fill-opacity="0"></path>
											
											<path d="M 50,50 m 0,-47.5 a 47.5,47.5 0 1 1 0,95 a 47.5,47.5 0 1 1 0,-95" stroke="#555" stroke-width="5" fill-opacity="0" style="stroke-dasharray: 298.493px, 298.493px; stroke-dashoffset: 80.397px;"></path>
										</svg>

										<p style="position: absolute; top: 50%; left: 50%; padding: 0px; margin: 0px; transform: translate(-50%, -50%); color: rgb(85, 85, 85);" class="progressbar-text">70%</p>

									</div>

									<div class="pr-skill-name">Creatividad</div>
								</li>

							</ul>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>';
 
 ?>