<?php 
    
    $servidor = Url::ctrUrlServidor();

    $url = Url::ctrUrl();

    $template = ControladorPlantilla::ctrEstiloPlantilla(); 

    echo'<div class="col-sm-12 copyright wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInUp;">
        
            <div class="row">

                 <div class="col-xs-12 menu-foot">
                    
                    <ul>
                    
                        <li class="">

                            <a class="" href="'.$url.'">Inicio</a>

                        </li>

                        <li class="">

                            <a class="" href="'.$url.'about">Acerca de</a>

                        </li> 

                        <li class="">

                                <a class="" href="'.$url.'services">Servicios</a>

                        </li>
                        
                        <li class="">

                            <a class="" href="'.$url.'portfolio">Portafolio</a>

                        </li> 

                        <li class="">

                            <a class="" href="'.$url.'under-construction">Blog</a>

                        </li>

                        <li class="">

                           <a class="" href="'.$url.'contact">Contacto</a>

                        </li>

                    </ul>
                </div>

                <div class="col-xs-12 media-foot">

                    <ul class="social-icon">';
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


                <div class="col-xs-12">
                    <div class="text-left">
                        <p class="copy-titulo">Todos los derechos reservados <strong> @ Luigi Gutierrez</strong> 2019</p>
                    </div>
                </div>
                
            </div>

        </div>';

?>
