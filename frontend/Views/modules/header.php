<?php 

	$servidor = Url::ctrUrlServidor();
	$url = Url::ctrUrl();	

 ?>

<header class="home" id="home">

			<nav class="navbar navbar-fixed navbar-inverse" role="navigation">

				<div class="container-fluid">
					
					<div class="navbar-header"> 

						<button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target=".navbar-collapse"> 
							<span class="icon-bar"></span> 
							<span class="icon-bar"></span> 
							<span class="icon-bar"></span> 
						</button> 

					</div>

					<div class="collapse navbar-collapse">

						<ul class="nav navbar-nav">

							<li class="nav-item">

								<a class="<?php echo ($_GET["url"] =="" ? "active" : "")?>" href="<?php echo $url?>">Inicio</a>

							</li>

							<li class="nav-item">

								<a class="<?php echo ($_GET["url"] == "about" ? "active" : "")?>" href="<?php echo $url ?>about">Acerca de</a>

							</li> 

							<li class="nav-item">

								<a class="<?php echo ($_GET["url"] == "services" ? "active" : "")?>" href="<?php echo $url ?>services">Servicios</a>

							</li>
							
							<li class="nav-item">

								<a class="<?php if(($_GET["url"] == "portfolio") || (stripos($_GET["url"],'Project'))) {?> active <?php } ?>)?>" href="<?php echo $url ?>portfolio">Portafolio</a>
							
							</li> 

							<li class="nav-item">

								<a class="<?php echo ($_GET["url"] == "under-construction" ? "active" : "")?>" href="<?php echo $url ?>under-construction">Blog</a>

							</li>

							<li class="nav-item">

							   <a class="<?php echo ($_GET["url"] == "contact" ? "active" : "")?>" class="nav-link" href="<?php echo $url ?>contact">Contacto</a>

							</li>

						</ul>
						
					</div>

				</div>

			</nav>

</header>