<?php 
	
	require_once "Controllers/template.controller.php";
	require_once "Controllers/projects.controller.php";
	require_once "Controllers/mail.controller.php";

	require_once "Models/template.model.php";
	require_once "Models/projects.model.php";
	require_once "Models/url.php";

	require_once "Extensions/PHPMailer/PHPMailerAutoload.php";
	require_once "Extensions/vendor/autoload.php";
	
	$plantilla = new ControladorPlantilla();
	$plantilla -> plantilla();