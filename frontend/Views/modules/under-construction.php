<section class="enConstruccion">
	<?php 

		$template = ControladorPlantilla::ctrEstiloPlantilla();	
		
		$servidor = Url::ctrUrlServidor();
		$url = Url::ctrUrl();	

		echo'<div class="header-background">
		        <img class="img-fluid" src="'.$servidor.$template["background"].'">
		    </div>
		
		<div class="img-color-overlay">

			<div class="container">
				
				<div class="row section-separator">
					
						<div class="col-sm-12 text-center section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInUp;">
							
							<h2 class="tittle-service">Pagina en construcción</h2>
						
							<div class="banner-info">
								<p>Esta sección se encuenta en construcción, pronto estará lista para ti suscribete para mas información.</p>
							</div>

						</div>


						<div class="items-timer"> 
							
							<div class="row clock">
								
								<div class="col-md-3 col-sm-6 col-xs-12 column days" >
									<div class="timer" id="days">11</div>
									<div class="text">Days</div>
								</div>

								<div class="timer days"></div>
								
								<div class="col-md-3 col-sm-6 col-xs-12 column">
									<div class="timer" id="hours">19</div>
									<div class="text">Hours</div>
								</div>

								<div class="timer"></div>
								
								<div class="col-md-3 col-sm-6 col-xs-12 column">
									<div class="timer" id="minutes">53</div>
									<div class="text">Minutes</div>
								</div>

								<div class="timer"></div>
								
								<div class="col-md-3 col-sm-6 col-xs-12 column">
									<div class="timer" id="seconds">02</div>
									<div class="text">Seconds</div>
								</div>
			

							</div>	 
						</div>';
							

					echo'<div class="col-md-12 col-sm-12 col-xs-6 social"> 

							<a href="'.$url.'" class="btn btnDefault wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.5s; animation-name: fadeInUp;">Volver al inicio</a>
						</div>';

	 ?>
						

				</div>

			</div>

		</div>

	</div>
			
</section>