<?php 

	$servidor = Url::ctrUrlServidor();
	$url = Url::ctrUrl();

	$categorias_proyectos = ControladorProyectos::ctrMostrarCategoriasProyectos();

	$item = null;
	$valor= null;

	$proyectos = ControladorProyectos::ctrMostrarProyecto($item,$valor);	

 	echo'<section class="portfolio" id="portfolio">

			<div class="container">

				<div class="row section-separator">

					<div class="col-sm-12 text-center section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInUp;">
						<h2 class="tittle-service">Portfolio</h2>

						<div class="filtros-busqueda">	
							<ul class="filtros">

								<li><span class="filter" data-filter="all">Todos</span></li>';

								foreach ($categorias_proyectos as $key => $value) {
												echo'<li><span class="filter" data-filter="'.$value["categoria_filtro"].'">'.$value["titulo"].'</span></li>';
											}			
								
						echo'</ul>
						</div>

					</div>

					

					<div class="portfolioList" id="portfoliolist" data-ref="mixitup-container">';

						foreach ($proyectos as $key => $value) {
							
							echo'<div class="col-md-4 col-sm-6 col-xs-12 portfolio-item item '.$value["categoria"].' wow fadeInUp">
											
									<img src="'.$servidor.$value["imagen"].'" class="img-fluid" alt=""/>

									<div class="overlay">
										<a href="'.$url.'portfolio/project/'.$value["id"].'" class="">
							                    <span><i class="fa fa-link"></i></span>						               
										</a> 
									</div>

								</div>';
						}

				echo'</div>

				</div>

			</div>
				
	</section>';

 ?>

<script>
    var containerEl = document.querySelector('[data-ref="mixitup-container"]');

    var mixer = mixitup(containerEl, {
	    selectors: {
	        target: '.item'
	    }
    });
</script>

<!-- data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInUp;" -->