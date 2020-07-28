<?php 


	$servidor = Url::ctrUrlServidor();

	$url = Url::ctrUrl();

	$experiencia = ControladorPlantilla::ctrMostrarExperiencia();

	echo'<section class="experience image-bg featured-img-one" id="experience">

		<div class="img-color-overlay-2">

			<div class="container">

				<div class="row section-separator">

					<div class="col-sm-12 col-md-6">

						<div class="education">

							<h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInUp;">Educación</h3>

							<div class="education-deatils">';

								foreach ($experiencia as $key => $value) {
									

									if($value["tipo"] =="educacion"){

										echo'<div class="education-item black-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.3s; animation-name: fadeInUp;">

												<h4>'.$value["titulo"].'<a href="'.$value["link_lugar"].'" target="_blank">'.$value["lugar"].'</a></h4>

												<div class="eduyear">'.$value["desde_hasta"].'</div>';

												if(!empty($value["descripcion"])){

													echo'<p>'.$value["descripcion"].'</p>';
												}
										
										echo'</div>';

									}

								}

						echo'</div>

						</div>

					</div>

					<div class="col-sm-12 col-md-6">

						<div class="work">

							<h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInUp;">Experiencia Laboral</h3>

							<div class="experience-deatils">';
								foreach ($experiencia as $key => $value) {

									if($value["tipo"] =="trabajo"){

									echo'<div class="work-item black-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.4s; animation-name: fadeInUp;">';

											if(!empty($value["lugar"])){

												echo'<h4>'.$value["titulo"].'<a href="'.$value["link_lugar"].'" target="_blank">'.$value["lugar"].'</a></h4>';

											}else{

												echo'<h4>'.$value["titulo"].'</h4>';
											}
											

											echo'<div class="eduyear">'.$value["desde_hasta"].'</div>';

											if(!empty($value["descripcion"])){

												echo'<p>'.$value["descripcion"].'</p>';
											}
											
											echo'<ul class="work-responsibility">';

												$jsonTasks = json_decode( $value["responsabilidades"],true);

												foreach ($jsonTasks as $key => $value2) {
													
													echo'<li><i class="fa fa-circle"></i>'.$value2["tareas"].'</li>';
												}
									
											echo'</ul>

										</div>';

									}
									
								}
								                          
								
						echo'</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>';

 ?>