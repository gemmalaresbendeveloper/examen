function VerificarUsuario(){
	var u = $("#txt_usuario").val();
	var p = $("#txt_pass").val();
	if (u.length == 0 || p.length == 0) {
		swal("Campos incompletos!!","");
	}else{
		$.ajax({
			url:'../controlador/usuario/controlador_usuario_validar.php',
			type:'POST',
			data:{
				user:u,
				pass:p,
			}
		})
		.done(function(resp){
			if (resp==0) {
				Limpiar_post_usuario();
				var resultado="";
				resultado = 'Usuario y/o contrase\u00f1a no Valido';
			    swal(resultado,"","warning");
			}else{
				 var data = JSON.parse(resp);
				$.ajax({
				url:'../controlador/usuario/controlador_iniciar_sesion.php',
				type:'POST',
				data:{
					user:data[0][0],
					pass:data[0][1],
					nom:data[0][2],
					img:data[0][4],
					usuario:data[0][6],
					codigo_personal:data[0][5],
					idusuario:data[0][7]
				}
				})
				.done(function(resp){
					swal({
					  title: "Bienvenido",
					  text: "Datos Correctos.",
					  timer: 1000,
					  showConfirmButton: false
					});
					location.reload(true);
				})
			}
		})
		.fail(function( jqXHR, textStatus, errorThrown){
			if (jqXHR.status === 0) {

		    alert('Not connect: Verify Network.');

		  } else if (jqXHR.status == 404) {

		    alert('Requested page not found [404]');

		  } else if (jqXHR.status == 500) {

		    alert('Internal Server Error [500].');

		  } else if (textStatus === 'parsererror') {

		    alert('Requested JSON parse failed.');

		  } else if (textStatus === 'timeout') {

		    alert('Time out error.');

		  } else if (textStatus === 'abort') {

		    alert('Ajax request aborted.');

		  } else {

		    alert('Uncaught Error: ' + jqXHR.responseText);

		  }
		})
	}
}
function Limpiar_post_usuario(){
	$("#txt_usuario").val("");
	$("#txt_pass").val("");
} 
