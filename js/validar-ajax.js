$(document).ready(function(){
	$('#formulario').validate({
		rules: {
			nombre: {
				required: true,
				minlength: 2,
				maxlength: 50
			},
			amaterno: {
				required: true,
				minlength: 2,
				maxlength: 50
			},
			apaterno: {
				required: true,
				minlength: 2,
				maxlength: 50
			},
			correoe: {
				required: true,
				email: true
			}
		},
		messages: {
			nombre: {
				required: "El nombre es obligatorio",
				minlength: "El nombre debe ser de al menos 2 caracteres",
				maxlength: "El nombre debe tener menos de 50 caracteres"
			},
			amaterno: {
				required: "El apellido materno es obligatorio",
				minlength: "El apellido materno debe ser de al menos 2 caracteres",
				maxlength: "El apellido materno debe tener menos de 50 caracteres"
			},
			apaterno: {
				required: "El apellido paterno es obligatorio",
				minlength: "El apellido paterno debe ser de al menos 2 caracteres",
				maxlength: "El apellido paterno debe tener menos de 50 caracteres"
			},
			correoe: {
				required: "El correo electrónico es obligatorio",
				email: "Introduzca un correo electónico válido."
			}
		}
	});
});

$(document).ready(function(){
	$("button").click(function () {       
	  $.post(
		"insertar.php", { 
		  nombre: $('input[name=nombre]').val(), 
		  apaterno:   $('input[name=apaterno]').val(),
		  amaterno:   $('input[name=amaterno]').val(),
		  correoe:   $('input[name=email]').val()
		},
		
		function(data, status){alert("Datos: "+data+"\nEstatus: "+status);}
		);
	});
});