function validarMensaje(){

	/*=================================
	=          VALIDAR NOMBRE         =
	===================================*/
	
	var nombre = $("#nombre").val();

	if(nombre != ""){

		var expresion = /^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]*$/;

		if(!expresion.test(nombre)){

			swal({
			  title:"¡ERROR!",
			  text: "¡No se permiten numeros ni caracteres especiales en el campo 'Nombre' !",
			  type: "error",
			  confirmButtonText: "Cerrar",
			  closeOnConfirm: false
			})
				
			return false;

		}

	}else{

		swal({
			  title:"¡ERROR!",
			  text: "¡El campo 'Nombre' es obligatorio!",
			  type: "error",
			  confirmButtonText: "Cerrar",
			  closeOnConfirm: false
			})  

		return false;
	}


	/*=================================
	=          VALIDAR EMAIL          =
	===================================*/

	var email = $("#email").val();

	if(email != ""){

		var expresion = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;

		if(!expresion.test(email)){

			swal({
			  title:"¡ERROR!",
			  text: "¡Escriba correctamente el correo electrónico!",
			  type: "error",
			  confirmButtonText: "Cerrar",
			  closeOnConfirm: false
			})

			return false;

		}

	}else{

		swal({
		  title:"¡ERROR!",
		  text: "¡El campo 'Email' es obligatorio!",
		  type: "error",
		  confirmButtonText: "Cerrar",
		  closeOnConfirm: false
		})

		return false;
	}


	var comentario = $("#mensaje").val();
	console.log("comentario", comentario);

	if(comentario != ""){

		var expresion = /^[,\\.\\a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]*$/;

		if(!expresion.test(comentario)){

			swal({
			  title:"¡ERROR!",
			  text: "¡No se permiten caracteres especiales como por ejemplo: ¡¿?&%$&/[]*! en el campo 'Mensaje'!",
			  type: "error",
			  confirmButtonText: "Cerrar",
			  closeOnConfirm: false
			})

			return false;
		}

	}else{

		swal({
		  title:"¡ERROR!",
		  text: "¡El campo 'Mensaje' es obligatorio!",
		  type: "error",
		  confirmButtonText: "Cerrar",
		  closeOnConfirm: false
		})

		return false;
	}

	return true;
}