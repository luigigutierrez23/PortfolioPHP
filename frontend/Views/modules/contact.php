<?php 
    
    $servidor = Url::ctrUrlServidor();

    $url = Url::ctrUrl();

    $template = ControladorPlantilla::ctrEstiloPlantilla(); 

    //$footer = ControladorPlantilla::ctrMostrarFooter();

    echo'<section class="footer footer-3" id="contact">

        <div class="container-fluid">

            <div class="row section-separator">

                <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <h3>Contacto</h3>
                </div>

                <div class="map-image image-bg img-fluid col-sm-12">

                    <div class="container mt-30">

                        <div class="row">

                            <div class="col-sm-12 col-md-6 footer-address">';

                                $jsonContacto = json_decode($template["info_contacto"],true);

                                foreach ($jsonContacto as $key => $value){

                                    echo'<div class="col-md-12 xs-no-padding">
                                            
                                            <div class="address-footer-item black-bg shadow-1 media wow '.$value["animacion"].'" data-wow-duration="'.$value["duracion"].'" data-wow-delay="'.$value["delay"].'" style="'.$value["estilo"].'">
                                                
                                                <div class="each-icon">
                                                    <i class="'.$value["icono"].'"></i>
                                                </div>
                                               
                                                <div class="each-info media-body">
                                                    <h4>'.$value["titulo-footer"].'</h4>
                                                    
                                                    <a href="'.$value["href"].'" target="_blank">'.$value["titulo"].'</a>
                                                  
                                                </div>

                                            </div>

                                        </div>';

                                }

                        echo'</div>

                            <div class="col-sm-12 col-md-6 col-xs-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.2s; animation-name: fadeInUp;">

                                <form id="contactForm" class="single-form quate-form wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;" method="POST" onsubmit="return validarMensaje()">
                                    
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    
                                    <div class="row">
                                        
                                        <div class="col-md-12">
                                            <input name="nombre" class="contact-name form-control" id="nombre" type="text" placeholder="Nombre">
                                        </div>
            
                                        <div class="col-md-12">
                                            <input name="email" class="contact-subject form-control" id="email" type="email" placeholder="Correo" >
                                        </div>
            
                                        <div class="col-md-12">
                                            <textarea class="contact-message" name="mensaje" id="mensaje" rows="6" placeholder="Mensaje" ></textarea>
                                        </div>';

                                        $enviarMensaje = new ControladorMail();
                                        $enviarMensaje -> ctrEnviarMail();
                                        
                                    echo'<div class="btn-form col-md-12">
                                            <button type="submit" class="btn btnDefault btnEnviar btn-block" id="form-submit">Enviar Mensaje</button>
                                        </div>

                                    </div>

                                </form>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>';

 ?>