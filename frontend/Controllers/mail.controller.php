<?php 

/**
 * 
 */
class ControladorMail
{
	
	/**
	 * [ctrRegistroUsuarios description]
	 * @return [type] [description]
	 */
	public function ctrEnviarMail(){

		if(isset($_POST["email"])){

			if(preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/',$_POST["nombre"]) &&
			   preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["email"]) && preg_match('/^[,\\.\\a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]*$/', $_POST["mensaje"])){

						/*=============================================
						=            VERIFICACION CORREO           =
						=============================================*/
						
						
						date_default_timezone_set("America/Argentina/Buenos_Aires");

						$url = Url::ctrUrl();

						$mail = new PHPMailer;

						$mail->CharSet='UFT-8';

						$mail->isMail();

						$mail ->setFrom('noreply@luigigutierrez.com','Luigi Gutierrez');

						$mail ->addReplyTo(''.$_POST["email"].'',''.$_POST["nombre"].'');

						$mail -> Subject = "Mensaje desde mi pagina web - {$_POST["nombre"]}";

						$mail ->addAddress('luigijose.gutierrez@gmail.com');

						$mail -> msgHTML('<div style="width:100%; background:#eee; position:relative; font-family:sans-serif; padding-bottom:40px">
	
											<center>
												
												<img style="padding:20px; width:10%" src="http://tutorialesatualcance.com/tienda/logo.png">

											</center>

											<div style="position:relative; margin:auto; width:600px; background:white; padding:20px">
											
												<center>
												
												<img style="padding:20px; width:15%" src="http://tutorialesatualcance.com/tienda/icon-email.png">

												<h3 style="font-weight:100; color:#999">Mensaje de '.$_POST["nombre"].'</h3>

												<hr style="border:1px solid #ccc; width:80%">

												<h4 style="font-weight:100; color:#999; padding:0 20px">'.$_POST["mensaje"].'</h4>

												<br>

												<hr style="border:1px solid #ccc; width:80%">

												</center>

											</div>

										</div>');

						$envio = $mail -> Send();

						if(!$envio){

							echo '<script> swal({
									  title: "¡ERROR!",
									  text: "¡Ha ocurrido un problema enviando verificación de correo electrónico a '.$_POST["email"].$mail->ErrorInfo.'!",
									  type: "error",
									  confirmButtonText: "Cerrar",
									  closeOnConfirm: false
									}, 
										
									  function(isConfirm){

									  	if(isConfirm){

											history.back();
									  	}
									  }
									); 
								</script>';

						}else{

							echo '<script> swal({
									  title: "OK!",
									  text: "¡Email enviado, en breve me estaré contactando al correo electrónico '.$_POST["email"].', que tengas excelente dia!",
									  type: "success",
									  timer: 3000
									}, 
										
									  function(isConfirm){

									  	if(isConfirm){

											window.location ="'.$url.'";
									  	}
									  }
									); 
							</script>';

						}
						
			}else{

				echo '<script> swal({
									  title: "¡ERROR!",
									  text: "Al enviar el correo, no se permiten caracteres especiales",
									  type: "error",
									  confirmButtonText: "Cerrar",
									  closeOnConfirm: false
									}, 
										
									  function(isConfirm){

									  	if(isConfirm){

											history.back();
									  	}
									  }
									); 
					</script>';
			}
		}
	}
}


 ?>